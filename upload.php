<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="upload.css">
    
    
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <title>NavBar</title>
    <style>
      .footer-top{
	background : #6495ED;
    padding: 40px 0;
    width:100%;
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

.givespace{
  padding: 5px 5px 5px 5px;
 font-family: 'Indie Flower', cursive;
 font-size: 17px;
 color: mediumblue;
}

    </style>
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
                    <li type="none"><button type="submit" class="btn btn-link" value="motivation" name="category">Motivational</button></li>
            
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
<nav class="navbar navbar-fixed-top navbar-expand-sm navbar-light bg-light border-bottom ">
            <button class="btn btn-primary" id="menu-toggle"><span class="dark-blue-text"><i
        class="fa fa-bars fa-1x"></i></span>
            </button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <a href="#" class="navbar-brand space">BLOGGIT®</a>

            
        </nav>

        <div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="main-form" method="POST" enctype="multipart/form-data">
            <div class="form-group">
               <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            <div class="invalid-feedback">please enter a valid username</div>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" style = "width:100%;" rows="15" id="content" required></textarea>


            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" id="category" class="form-control" required>
                    <option value="food">Food</option>
                    <option value="tech">Science and Technology</option>
                    <option value="motivational">Motivational</option>
                    <option value="science">Science Literature</option>
                    <option value="stories">Stories</option>
                    
                    <option value="travel">Travel</option>
                    <option value="mythology">Mythology</option>
                </select>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                    <label for="author">Author Name</label>
                    <input type="text" name="author" id="author" class="form-control" required>
                </div>
                <div class="col">
                    <label for="picture">Image</label>
                    <input type="file" name="picture" id="picture" class="form-control" >
                </div>
                </div>
            </div>
                <center>
                <button type="submit" class="btn btn-outline-primary" onclick="validate()" name="insert">Submit</button>
                </center>

        </form>

    </div>
     <br>
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
                    <p>Varun Sreedhar</p>
                    <p>Srikrishna Veturi</p>
                </div>

			</div>
		</div>

	</div>
</footer>
</div>


<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     
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

<script src="upload.js"></script>

<?php
 $username="root";
 $password="";
 $db="varun";
 date_default_timezone_set('Asia/Kolkata');

 

 if(isset($_POST["insert"])){
    $conn= new mysqli('localhost',$username,$password,$db) or die("Unable to connect");
       
    $title=mysqli_real_escape_string($conn,$_POST["title"]);
    $content=mysqli_real_escape_string($conn,$_POST["content"]);
    $description=mysqli_real_escape_string($conn,$_POST["description"]);
    $category=$_POST["category"];
    $author=mysqli_real_escape_string($conn,$_POST["author"]);
    $image=$_FILES["picture"]["type"];
    $date=date("d/m/Y");
    $time=date("h:m:sa");

    

    



    if(strlen(trim($title))==0 || strlen(trim($content))==0 || strlen(trim($category))==0 || strlen(trim($author))==0|| ImageExtension($image)){
        $title="";
        $content="";
        $category="";
        $author="";
        $image="";

       
    }

    else{
        
            $picture=$_FILES["picture"]["tmp_name"];
            $file= addslashes(file_get_contents($picture));
            $sql ="INSERT INTO blogs (Title,Content,Description,Category,Author,Image,Likes,Date,Time) VALUES ('$title','$content','$description','$category','$author','$file',0,'$date','$time');";
            mysqli_query($conn,$sql);

           
           
        
        }
        
      
 }

 function ImageExtension($image){
    $extension= explode("/",$image,2);
    $type= array("jpg","jpeg","png","jfif","JPG","JPEG","PNG","JFIF");

    

    
    if(in_array($extension[1],$type)){
        return false;
    }

    else if(strlen($image)==0){
        return false;

    }

    else{
        return true;
    }

}

 

?>



</body>
</html>