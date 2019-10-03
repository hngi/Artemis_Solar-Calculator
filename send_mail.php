<?php
session_start();
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\Exception;


use League\OAuth2\Client\Provider\Google;

date_default_timezone_set('Etc/UTC');
// Load Composer's autoloader
require 'vendor/autoload.php';

$emailAddress = $_POST['email'];

//$body = "hello your calculation is".$content;

$body = '<html><body>';
$body.= '<table style="width: 100%; text-align: left">';
$body.= '<tr>';
$body.= '<th>Appliance</th>';
$body.= '<th>Quantity</th>';
$body.= '<th>Total Watts</th>';
$body.= '</tr>';
$total_watts = 0;
foreach ($_SESSION['appliance_array'] as $key => $value) {
    $appliance_watts = $value['Total Power Rating'];
    $body .= '<tr>';
    $body .= "<td>{$value['Appliance']}</td>";
    $body .= "<td>{$value['Quantity']}</td>";
    $body .= "<td>{$value['Total Power Rating']}</td>";
    $body .= '</tr>';
    $body .= '</table>';
    $total_watts += $value['Total Power Rating'];
}
$body.= '<h2>Your Total Power Consumption in Watts is '.$total_watts.' </h2>';
$body.= '</body></html>';




// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->Port       = 587;                                    // TCP port to connect to
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;       // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->AuthType = 'XOAUTH2';
    //$mail->Username   = 'solarhngi@gmail.com';                     // SMTP username
    //$mail->Password   = '115d1af6-f092-4b03-972d-6196d742045b';                               // SMTP password

    $google_email = 'solarhngi@gmail.com';
    $oauth2_clientId = '184717253847-6b0166un8po04r1irbeub362qiopi88l.apps.googleusercontent.com';
    $oauth2_clientSecret = 'o1EAJlBR0cL3liGGDymO_Z9S';
    $oauth2_refreshToken = '1/gnx6yBnFkzntltvSb9kskZzN6JQJNzFMxiTwMTAjDNs';

    $provider = new Google(
        [
            'clientId' => $oauth2_clientId,
            'clientSecret' => $oauth2_clientSecret,
        ]
    );

    $mail->setOAuth(
        new OAuth(
            [
                'provider' => $provider,
                'clientId' => $oauth2_clientId,
                'clientSecret' => $oauth2_clientSecret,
                'refreshToken' => $oauth2_refreshToken,
                'userName' => $google_email,
            ]
        )
    );


    //Recipients
    $mail->setFrom('solarhngi@gmail.com', 'Artemis Solar Load Calculator');
    $mail->addAddress($emailAddress);     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
/*    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    /*// Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/

    // Content
                                     // Set email format to HTML
    $mail->Subject = 'Here is the result of your Calculation';
    $mail->Body    = $body;
    $mail->isHTML(true);


   $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'success';
} catch (Exception $e) {
    echo "error occurred";
}