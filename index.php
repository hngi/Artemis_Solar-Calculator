<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="icon" href="https://res.cloudinary.com/incolet/image/upload/v1569671533/arte_lgn5fj.jpg" sizes="16x16" type="image/png">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/index.css">
  <link rel="stylesheet" href="style/checkbox.css">
    <script src="https://kit.fontawesome.com/1b74471b9a.js" crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
    </script>
  
  	<title>Solar Load Calculator</title>
</head>
<body>
    <header >
      <div class="header">
       <nav class="navbar navbar-expand-sm bg-artemis  fixed-top">
       
   <a class=" col-sm-8 navbar-brand" href="#">
    <img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1569383582/HEADER_pz58tu.png" alt="Logo">
  </a>
</nav> 
<img style="width:100%; height:100%" class="img-fluid header_bg" src="https://res.cloudinary.com/wpgroom-com/image/upload/v1569483187/Home_v2_lzhzws.png" alt="">

</div>
    </header>
    <section class="calculator">
       <h1>Calculator</h1>
       <p>Fill in your appliances &amp; loads here </p>
       <form action="add.php" method="post" id="appliance_form">
<!--          Appliances 1-->
           <div class="appliance artemis-width" id="appliance">
               <input type="text" placeholder="Appliance" name="appliance_name" id="appliance_name" onchange="appliance_name_func()" required>
               <input type="number" placeholder="Quantity" name="quantity" id="quantity" onchange="appliance_quantity_func()" disabled min="1" required>
               <input type="number" placeholder="AC Watts" name="watts" id="watts" onchange="appliance_watts_func()" disabled min="1" required>
               <input type="number" placeholder="Hours-ON" name="hours_on" id="hours_on" onchange="appliance_hours_on_func()" disabled min="1" required>
               <input type="text" placeholder="Watt-Hours" name="hours" id="hours" readonly value="" required>
               <button id="addButton">ADD</button>
      </div>
            </form>
        <div id="appliance_error" style="visibility: hidden; color: red">&nbsp;</div>
        <div class="append">
            <div class="artemis calculator_readonly">
               <input type="text" placeholder="Appliance" disabled>
               <input type="number" placeholder="Quantity" disabled>
               <input type="number" placeholder="AC Watts" disabled>
               <input type="number" placeholder="Watt-Hours" disabled>
               <input type="text" placeholder="Remove" disabled>
            </div>
            <div class="checked">
                <div id="basket">
                    <?php include('basket.php')?>
                </div>
            </div>
        
        </div>


        <script type="text/javascript">
            $(document).ready(function (e) {
                $('#appliance_form').on('submit',(function (e) {
                    e.preventDefault();
                    $.ajax({
                        url:'add.php',
                        type: 'POST',
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function () {
                            // window.location.reload();
                            console.log('success');
                            //$('#basket').empty();
                            $("#appliance_form")[0].reset();
                            $('#basket').load(' #each_appliance');

                            $('#result').empty();
                            $('#result').load(' #result');

                            $('#panel').empty();
                            $('#panel').load(' #panel');

                        },
                        error: function () {
                            console.log('error');
                        }
                    })
                }));
            });

            $(document).ready(function () {
                $(document).ready(function () {
                    $('#basket').on('click','a[id="removeBtn"]', function(e) {
                        e.preventDefault();
                        var href = $(this).attr('href');
                        $.ajax({
                            type: "GET",
                            url: "index.php?action=delete&id="+href,
                            success: function () {
                                $('#result').empty();
                                $('#panel').empty();
                                $('#basket').load(' #each_appliance');

                                $('#result').load(' #result');
                                $('#panel').load(' #result');

                            }
                        });
                    });
                });
            })
        </script>
    </section>
    <section class="result">
        <p>Total KiloWatt-Hours/Day:</p>
        <h1 id="result"><?php echo number_format($total_kilowatts,0) ?>kwh</h1>
    </section>
    <section class="diy">
        <main class="col-sm-7">
            <h1>How to use<br> Solar Load Calculator</h1>
            <div class="diy_items">
                <div>
                    <span> <img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1569477031/one_apsmtj.png" alt=""></span>
                     <p>Fill out each Field for each appliance, if you are unsure about the wattage of your appliance.
                    </p>
                
                   </div>
                    <hr class="mx-auto">
            </div>
            
            <div class="diy_items">
                <div>
                   <div><span><img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1569477024/two_cqaq97.png" alt=""></span></div>
                    
                    <p>Use "Add Appliance" to add an empty row.</p>
                </div>
            </div>
            <hr class="mx-auto">
            
            <div class="diy_items">
                <div>
                    <span><img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1569477018/three_aj4mbr.png" alt=""></span>
                    <p>You can save the calculation to your email by filling out the form below and click on "Send" button. All fields are required.</p>
                </div>
            </div>
            
        </main>
        <aside>
            <img style="height: 100%" src="https://res.cloudinary.com/wpgroom-com/image/upload/v1569383887/Oriii_mcgqap.png" alt="">
        </aside>
    </section>
    <section class="subscribe">
       
        <p class="subscribe_text">Send the calculation to your mail</p>
        <form action="">
        <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Enter your email">
    <div class="input-group-append">
    
      <button class="input-group-text">SEND</button>
    </div>
  </div>
<!--
        <input type="text" placeholder="Enter your email">
        <input type="submit" value="SEND">
-->
        </form>
    </section>
    <section class="footer">
       
<<<<<<< HEAD
        <div class="footer_heading col-12 col-sm-4">
            <h1><img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1569479398/Shape_jx4klq.png" alt="">Artemis</h1>
            <p>Solar Load Calculator</p>
        </div>
        <div class="col-12 col-sm-7 footer_caption">
=======
        <div class="footer_heading col-4 col-sm-4">
            <h1><img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1569479398/Shape_jx4klq.png" alt="">Artemis</h1>
            <p>Solar Load Calculator</p>
        </div>
        <div class="col-7 col-sm-7 footer_caption">
>>>>>>> 2d233972c5d3b1f0b6f8ea9f105271ba0d34a755
            <p><B>About Solar Load Calculator</B><br>
            This calculator is a refreshingly simple, easy to use web interface for calculating load/appliances in order to use solar energy. Why? Because our mission is to build a better internet, one digital product at a time that promotes renewable energy. <br> Like the site? Send us a note.
            
            </p>
        </div>
<<<<<<< HEAD
        <div class="col-sm-1 col-12 social-icon">
=======
        <div class="col-sm-1 col-1 social-icon">
>>>>>>> 2d233972c5d3b1f0b6f8ea9f105271ba0d34a755
            <a href=""><img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1569479222/twitter-black-shape_q4pagm.png" alt=""></a>
            <a href=""><img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1569479210/facebook-letter-logo_fwtp27.png" alt=""></a>
       <a href=""><img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1569479207/google-logo_adjanc.png" alt=""></a> 
        </div>
    </section>
    <section class="copyright artemis">
        <p>&copy; 2017 - 2019 <a href="">Atermis</a></p>
    </section>
  <!--NAV BAR-->
        
                    
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/add-appliance.js"></script>
<script>
    function checkScroll(){
    var startY = $('.navbar').height() * 2; //The point where the navbar changes in px

    if($(window).scrollTop() > startY){
        $('.navbar').addClass("scrolled");
    }else{
        $('.navbar').removeClass("scrolled");
    }
}

if($('.navbar').length > 0){
    $(window).on("scroll load resize", function(){
        checkScroll();
    });
}
    </script>
</body>

</html>
