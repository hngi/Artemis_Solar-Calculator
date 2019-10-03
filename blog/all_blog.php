<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../style/all_blog.css">
  

    <script src="https://kit.fontawesome.com/1b74471b9a.js" crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
    </script>
  
  	<title>All Article</title>
</head>
<body>
    <header >
    <div class="breadcrumb">
     <nav class="navbar navbar-expand-sm bg-artemis">
       
   <a class=" col-sm-8 navbar-brand" href="#">
    <img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1569383582/HEADER_pz58tu.png" alt="Logo">
  </a>
</nav>
     <!--    breadcrumb-->
      <div class="container text-center">
        <h3 class="mb-0">All Article</h3>
        <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>All Article</span></p>
      </div>
    </div>
<!--    breadcrumb-->
</header>
<!--   Blog Section-->
   <section class="container-fluid row our-blog">
       <main class="col-12 blog-content">
           <div class="d-flex mt-5 my-3 justify-content-end">
               <a href="add_blog.php"><button type="button" class="btn btn-primary">Add New Article</button></a>
           </div>
           <div class="d-flex justify-content-center">
           <table class="table table-bordered mx-auto">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Title</th>
        <th>Author</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Advantages of Solar Energy Through The Years</td>
        <td>Admin</td>
        <td>3/10/2019</td>
        <td>
            <div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Action
  </button>
  <div class="dropdown-menu menu">
    <a class="dropdown-item" href="edit_blog.php">Edit</a>
    <a class="dropdown-item" href="#">Delete</a>
  </div>
</div>
        </td>
      </tr>
    </tbody>
  </table>
      </div>
       </main>
      
   </section>
<!--   blog section-->
    
    
    <section class="copyright artemis">
        <p>&copy; 2017 - 2019 <a href="">Atermis</a></p>
    </section>
  <!--NAV BAR-->
        
                    
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/add-appliance.js"></script>
       <script src="js/blog_carousel.js"></script>
<!--
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
-->
</body>

</html>
