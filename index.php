<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/index.css">
  <link rel="stylesheet" href="style/checkbox.css">
  
  	<title>Solar Load Calculator</title>
</head>
<body>
    <header >
      <div class="header">
       <nav class="navbar navbar-expand-sm bg-artemis  fixed-top">
       
   <a class=" col-sm-8 navbar-brand" href="#">
    <img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1569383582/HEADER_pz58tu.png" alt="Logo" style="width:40x;">
  </a>
</nav> 
<img style="width: 100%" class="img-fluid header_bg" src="https://res.cloudinary.com/wpgroom-com/image/upload/v1569483187/Home_v2_lzhzws.png" alt="">

</div>
    </header>
    <section class="calculator">
       <h1>Calculator</h1>
       <p>Fill in your appliances &amp; loads here </p>
       <form action="">
<!--          Appliances 1-->
           <div class="appliance artemis-width">
               <input type="text" placeholder="Appliance">
               <input type="number" placeholder="Quantity">
               <input type="number" placeholder="AC Watts">
               <input type="number" placeholder="Hours-ON">
               <input type="number" placeholder="Watt-Hours">  
                  <Button>Add</Button>          
      </div>
            </form>     
              <section class="append">
                  <span> 
                  <div class="artemis calculator_readonly">
               <input type="text" placeholder="Appliance" readonly>
               <input type="number" placeholder="Quantity" readonly>
               <input type="number" placeholder="AC Watts" readonly>
               <input type="number" placeholder="Hours-ON" readonly>
               <input type="number" placeholder="Watt-Hours" readonly>
               <input type="text" placeholder="Remove" readonly>            
      </div>  
                  </span>
                   <form action="">
                <div class="appliance checked artemis-width">
               <input type="text" placeholder="Appliance">
               <input type="number" placeholder="Quantity">
               <input type="number" placeholder="AC Watts">
               <input type="number" placeholder="Hours-ON">
               <input type="number" placeholder="Watt-Hours">  
                  <Button>Remove</Button>          
      </div>  
    
       </form>
        
              </section>
              
    </section>
    <section class="result">
        <p>Total Watt-Hours/Day:</p>
        <h1>930wh</h1>
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
       
        <div class="footer_heading col-sm-4">
            <h1><img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1569479398/Shape_jx4klq.png" alt="">Artemis</h1>
            <p>Solar Load Calculator</p>
        </div>
        <div class="col-sm-7 footer_caption">
            <p><B>About Solar Load Calculator</B><br>
            This calculator is a refreshingly simple, easy to use web interface for calculating load/appliances in order to use solar energy. Why? Because our mission is to build a better internet, one digital product at a time that promotes renewable energy. <br> Like the site? Send us a note.
            
            </p>
        </div>
        <div class="col-sm-1 social-icon">
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
