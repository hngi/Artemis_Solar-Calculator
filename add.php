<?php
session_start();


if (empty($_SESSION['appliance_array']) && !isset($_SESSION['appliance'])){

    $power_rating = $_POST['watts'];
    $appliance = $_POST['appliance_name'];
    $quantity = $_POST['quantity'];
    $hours = $_POST['hours'];

    $power_consumption = $power_rating * $quantity;

    $appliance_array = array(
        "Appliance" => $appliance,
        "Quantity" => $quantity,
        "Watts" => $power_rating,
        "Hours" => $hours,
        "Total Power Rating" => $power_consumption
    );

    $_SESSION['appliance_array'] = array(
        $appliance_array
    );
}

else if (!isset($_SESSION['appliance']) && isset($_SESSION['appliance_array'])){

    $power_rating = $_POST['watts'];
    $appliance = $_POST['appliance_name'];
    $quantity = $_POST['quantity'];
    $hours = $_POST['hours'];

    $power_consumption = $power_rating * $quantity;

    $appliance_array2 = array(
        "Appliance" => $appliance,
        "Quantity" => $quantity,
        "Watts" => $power_rating,
        "Hours" => $hours,
        "Total Power Rating" => $power_consumption
    );

    foreach ($_SESSION['appliance_array'] as $index => $item) {
        if ($appliance !== $item['Appliance']){
            array_push($_SESSION['appliance_array'],$appliance_array2);
            break;

        }else{
            $message = "Appliance has been added already, Remove it First";
        }

    }

}
