<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="newupload.css">
    <link rel="stylesheet" type="text/css" href="blog.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@800&display=swap" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">


    <title>NavBar</title>
</head>
<body>
<div class="d-flex" id="wrapper">

    <div class="bg-light border-right" id="sidebar-wrapper">

        <div class="list-group list-group-flush ">
        <a href="#" class="list-group-item list-group-item-action bg-light givec"><i class="fa fa-home"></i> Home</a>
         
                <li type="none" class="givespace">Your Creativity Our technology! <br>Together we can Bloggit <i class="fa fa-heart"></i></li>
                
            

        </div>

         <div class="sidebar-dropdown">
            <a href="#" class="list-group-item list-group-item-action bg-light givec"><i class="fa fa-th-list"></i> Categories</a>
            <div class="sidebar-submenu gs">
              <ul>
                <li type="none"><a href="#" >Food</a> </li>
                <li type="none"><a href="#" >Science and Technology</a></li>
                <li type="none"><a href="#">Motivational</a></li>
            
                      <li type="none"><a href="#">Fiction</a></li>
                       <li type="none"><a href="#">Non Fiction</a></li>
                        <li type="none"><a href="#">Poems</a></li>
                         <li type="none"><a href="#">Short Clippings</a></li>
                
                  <li type="none"><a href="#">Mythology</a></li>
                  

              </ul>
            </div>
          </div>

        <div class="sidebar-dropdown">
            <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-sort"></i> Sort</a>
            <div class="sidebar-submenu gs">
              <ul>
                <li type="none"><a href="#">By Likes</a> </li>
                <li type="none"><a href="#">By Time</a></li>
              </ul>
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

            <div class="collapse navbar-collapse">
                <ul class = "navbar-nav ml-auto">
                    <li class="nav-item">
                        <button type="button" class="btn btn-primary">Create your own <i class="fa fa-plus-square"></i></button>
                    </li>
                </ul>
            </div>
        </nav>


<form action="" class="main-form">
<div class="container">
       
            <div class="form-group">
               <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            <div class="invalid-feedback">please enter a valid username</div>
            </div>
           <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                    <input type="image" name="picture" id="picture" class="form-control">
                </div>
                </div>
            </div>
            <br>
            <center>
                <button type="submit" class="btn btn-primary">Submit</button>
            </center>

        </div>
        </form>
        

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