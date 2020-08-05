<?php
 session_start();
		  $user="root";
		  $password="";
		  $db="varun";
		  
		  $conn= new mysqli('localhost',$user,$password,$db) or die("Unable to connect");

          $id=$_GET["view"];

         
		  $sql= "SELECT * FROM blogs WHERE ID=$id;";
          $result= mysqli_query($conn,$sql);
          $resultCheck = mysqli_num_rows($result);
 
		 
		  if($resultCheck>0){
			while($row=mysqli_fetch_assoc($result)){
			
			
			$title=$row["Title"];
			$description=$row["Description"];
			$content=$row["Content"];
			$category=$row["Category"];
            $author=$row["Author"];
            $image=$row["Image"];

			
			
			
            }
            

            
                
            
        }

        

       		  
		?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <title>NavBar</title>
</head>
<body bgcolor="#f0f8ff">
<div class="d-flex" id="wrapper">

    <div class="bg-light border-right" id="sidebar-wrapper">

        <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Home</a>

        </div>

         <div class="sidebar-dropdown">
            <a href="#" class="list-group-item list-group-item-action bg-light">Categories</a>
            <div class="sidebar-submenu">
              <ul>
                <li type="none"><a href="#">Food</a> </li>
                <li type="none"><a href="#">Science and Technology</a></li>
                <li type="none"><a href="#">Motivational</a></li>
              </ul>
            </div>
          </div>

        <div class="sidebar-dropdown">
            <a href="#" class="list-group-item list-group-item-action bg-light">Sort</a>
            <div class="sidebar-submenu">
              <ul>
                <li type="none"><a href="#">By Likes</a> </li>
                <li type="none"><a href="#">By Time</a></li>
              </ul>
            </div>
          </div>

    </div>

    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-sm navbar-light bg-light border-bottom ">
            <button class="btn btn-primary" id="menu-toggle"><span class="dark-blue-text"><i
        class="fa fa-bars fa-1x"></i></span>
            </button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <a href="#" class="navbar-brand space">BLOGGIT®</a>

            <div class="collapse navbar-collapse">
                <ul class = "navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="upload.html" class="navbar-link">Write your own!</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-center">
            <div class="blog-element">
                <h1><?php echo $title;?></h1>
            </div>
            <div class="blog-element" align="right">
                <i><?php echo $author;?></i>
            </div>
            <div class="blog-element">
               <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'"/>';?>
                
            </div>
            <div class="blog-element">
                <?php echo $content;?>
                </div>
            <div class="blog-element">
                <button type="submit" class="btn btn-outline-primary" >Like</button>
            </div>
        </div>
    </div>

</div>



<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     Popper.JS
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
</script>

</body>
</html>