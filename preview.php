<?php
session_start();
if(!isset($_SESSION['sort'])){
  $_SESSION['sort']="";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>preview</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="preview.css">
    <style>
      .footer-top{
	background : #6495ED;
	padding: 40px 0;
}

.container-footer{
	background : #6495ED;
}

.segment a i{
	font-size: 20px;
	color: #fff;
	padding: 10px 12px;
	border-radius: 50%;
}

    </style>

    
    
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@800&display=swap" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">



    <title>NavBar</title>
</head>
<body>
<div class="d-flex" id="wrapper">

    <div class="bg-light border-right" id="sidebar-wrapper">

        <div class="list-group list-group-flush">
          <form action="preview.php" method="GET">
          <button type="submit" class="btn btn-dark list-group-item list-group-item-action bg-light" name="category" value="home"><i class="fa fa-home"></i> Home</button>
          </form>
         
                <li type="none" class="givespace">Your Creativity Our technology! <br>Together we can Bloggit <i class="fa fa-heart"></i></li>
                
            

        </div>

         <div class="sidebar-dropdown">
            <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-th-list"></i> Categories</a>
            <div class="sidebar-submenu gs">
            <form action="preview.php" method="GET">
              <ul>
                <li type="none"><button type="submit" class="btn btn-link" value="food" name="category">Food</button> </li>
                <li type="none"><button type="submit" class="btn btn-link" value="tech" name="category">Technology</button></li>
                <li type="none"><button type="submit" class="btn btn-link" value="motivational" name="category">Motivational</button></li>
            
                <li type="none"><button type="submit" class="btn btn-link" name="category" value="science">Science Literature</button></li>
                    <li type="none"><button type="submit" class="btn btn-link" name="category" value="travel">Travel</button></li>
                    
                    <li type="none"><button type="submit" class="btn btn-link" name="category" value="stories">Stories</button></li>
                
                    <li type="none"><button type="submit" class="btn btn-link" name="category" value="mythology">Mythology</button></li>
                  

              </ul>
              </form>
            </div>
          </div>

        <div class="sidebar-dropdown">
            <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-sort"></i> Sort</a>
            <div class="sidebar-submenu gs">
              <form action="preview.php" method="POST">
              <ul>
                <li type="none"><button type="submit" class="btn btn-link" name="likes">By Likes</button> </li>
                <li type="none"><button type="submit" class="btn btn-link" name="time">By Time</button></li>
              </ul>
              </form>
            </div>
          </div>

    </div>

    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-sm navbar-light bg-light border-bottom">
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
                        <form action="upload.php">
                        <button type="submit" class="btn btn-primary">Create your own <i class="fa fa-plus-square"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <br>       
        <?php

$user="root";
$password="";
$db="varun";

$conn= new mysqli('localhost',$user,$password,$db) or die("Unable to connect");




if(isset($_GET["category"])){
  $category=$_GET["category"];
  $_SESSION["category"]=$category;
  //$_SESSION['sort']="";

  if($category=="home"){
    if($_SESSION['sort']=="likes")
    {
      $sql="SELECT * FROM blogs ORDER BY Likes DESC ;";
    }
    else{
      $sql="SELECT * FROM blogs ORDER BY ID DESC ;";
    }
    
  }

  else{
  
  

  if($_SESSION['sort']=="likes"){
    $sql="SELECT * FROM blogs WHERE Category='$category' ORDER BY Likes DESC ;";

  }

  else if($_SESSION['sort']=="time"){
    $sql="SELECT * FROM blogs WHERE Category='$category' ORDER BY ID DESC ;";
  

  }

  else {
    $sql="SELECT * FROM blogs WHERE Category='$category' ORDER BY ID DESC ;";
  

  }
}
  
}

else if(isset($_POST['likes'])){
  $_SESSION['sort']="likes";
  

  if(isset($_SESSION["category"])){
    $category=$_SESSION["category"];
  
    if($category=="home"){
      $sql="SELECT * FROM blogs ORDER BY Likes DESC ;";
    }
    else{
    $sql="SELECT * FROM blogs WHERE Category='$category' ORDER BY Likes DESC ;";
  }
}

  else{
    $sql="SELECT * FROM blogs ORDER BY Likes DESC ;";
  
  }
}

else if(isset($_POST['time'])){
  $_SESSION['sort']="time";
  
  if(isset($_SESSION["category"])){
    $category=$_SESSION["category"];

    if($category=="home"){
      $sql="SELECT * FROM blogs ORDER BY ID DESC;";
    }
    else{
      $sql="SELECT * FROM blogs WHERE Category='$category' ORDER BY ID DESC ;";
    }
    
  }

  else{
    $sql="SELECT * FROM blogs ORDER BY ID DESC ;";
  
  }

}

else{
  $sql="SELECT * FROM blogs ORDER BY ID DESC ;";
  
}









$result= mysqli_query($conn,$sql);
  $resultCheck = mysqli_num_rows($result);

  

  if($resultCheck>0){
    while($row=mysqli_fetch_assoc($result)){

    
    
    $titleval=$row["Title"];
    $contentval=$row["Description"];
   
    $imageval=$row['Image'];
    $authorval=$row["Author"];
    $id=$row['ID'];
    $likes=$row['Likes'];

    

    echo '<div class="container">
    <div class="row mb-5">
      <div class="col-lg-6 col-md-6 col-12">
      <img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode($imageval).'"/>
      </div>
  
        <div class="col-lg-6 col-md-6 col-12 text-center">
          <a href="#"><h2>'.$titleval.' </h2></a> 
          <div class="bg-light text-dark">
  
            <p>'.$contentval.' </p>
  
        
  
        </div>
        <div class="row mb-5">
          <div class="col-lg-6 col-md-6 col-12">
          <a href="#" class="like"><i class="fa fa-heart"></i></a>' .$likes. ' Likes
          </div>
          <div class="col-lg-6 col-md-6 col-12">
          <em>-By '.$authorval.'</em>
          
          
          
          </div>

          </div>

          <form action="newblog.php" method="GET">
          <button type="submit" class="btn btn-light" name="view" value='.$id.' >Check it out now  <i class="fa fa-paper-plane"></i></button>
          
          </form>

        
  
  </div>
  </div>
  </div>
  <hr>
  ';
  

    

    
    
    }

    
              
          
      }
      
      if(isset($_GET["view"])){
        $val=$_GET["view"];
       
 
        

      }

      
      
    
?>
    
    <footer>
	<div class="footer-top">
		<div class="container-footer">
			<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12 segment">
                    <h2>&copy 2020 Copyright:<a> BloggIt</a></h2><br>
					<p>Share your secret recipes,write something that's on your mind, just found out you have a secret talent?</p>
                    <p>Everything in the same place!,share your thoughts on BloggIt</p>
                </div>

                <div class="col-md-5 col-sm-12 col-xs-12 segment">
                	<h2>Follow Us</h2><br>
                	<p>Please follow us in our social media page in order to keep in touch with us</p>
                    <a href="https://www.facebook.com/BloggItOfficial"> <i class="fa fa-facebook"></i></a>
                    <a href="https://www.twitter.com/BloggItOfficial"> <i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/BloggItOfficial"> <i class="fa fa-instagram"></i></a>
                    <a href="https://www.pinterest.com/BloggItOfficial"> <i class="fa fa-pinterest"></i></a>
                </div>

                <div class="col-md-2 col-sm-12 col-xs-12 segment">
                	<h2> Our Team</h2><br>
                	<p>Sanjana Kumar</p>
                    <p>Varun Shreedhar</p>
                    <p>Srikrishna Veturi</p>
                </div>

			</div>
		</div>

	</div>
</footer>
    </div>

</div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
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