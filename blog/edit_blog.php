<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/all_blog.css">
    <!-- include summernote css/js -->
    <script src="https://kit.fontawesome.com/1b74471b9a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../js/editor.js"></script>
    <script>
			$(document).ready(function() {
				$("#txtEditor").Editor();
			});
		</script>
   <link href="../style/editor.css" type="text/css" rel="stylesheet"/>
    <title>Edit Articles</title>
</head>

<body>
    <header>
        <div class="breadcrumb">
            <nav class="navbar navbar-expand-sm bg-artemis">

                <a class=" col-sm-8 navbar-brand" href="#">
                    <img src="https://res.cloudinary.com/wpgroom-com/image/upload/v1569383582/HEADER_pz58tu.png" alt="Logo">
                </a>
            </nav>
            <!--    breadcrumb-->
            <div class="container text-center">
                <h3 class="mb-0">  Edit Articles</h3>
                <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Edit Articles</span></p>
            </div>
        </div>
        <!--    breadcrumb-->
    </header>
    <!--   Blog Section-->
    <section class="container-fluid row our-blog">
        <main class="col-12 blog-content">
            <div class="d-flex mt-5 my-3 justify-content-end">
                <a href="all_blog.php"><button type="button" class="btn btn-primary">All Article</button></a>
            </div>
            <div class="d-flex justify-content-center">
                <form action="">
                    <table class="table table-bordered mx-auto">
                        <thead>
                            <tr>
                                <th class="mx-auto" colspan="2">Add New Article</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><label for="title">Title</label></th>
                                <td> <input type="text" name="title" placeholder="Title of your Article"></td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="featured_img">Featured Image</label>
                                </th>
                                <td>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Content</th>
                                <td>
                                    <textarea name="" id="txtEditor" cols="100" rows="10"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th><button class="btn btn-success " type="submit" name="publish" value="publish">Update</button></th>
                                <th><button class="btn btn-danger " type="submit" name="publish" value="publish">Delete</button></th>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div> 
        </main>

    </section>
    <!--   blog section-->


    <section class="copyright artemis">
        <p>&copy; 2017 - 2019 <a href="">Atermis</a></p>
    </section>
    <!--NAV BAR-->


    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/add-appliance.js"></script>
    <script src="js/blog_carousel.js"></script>
    <script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

    </script>

</body>

</html>
