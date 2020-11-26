<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="style1.css">
  
  
</head>

<body>

<script>
  function checking(){
    console.log("In validate");
    var fname=document.getElementById("First name").value;
    var lname=document.getElementById("Last name").value;
    var email=document.getElementById("Email").value;
    var password=document.getElementById("password").value;
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    

    if(fname.trim().length==0){
        alert("Enter First Name");
    }

    else if(lname.trim().length==0){
        alert("Enter Last name");
    }

    else if(!email.match(mailformat)){
        alert("Enter valid email id");
    }

    else if(password.trim().length<8){
        alert("Password should have minimum 8 characters");
    }

    

    
}
</script>

<?php 
    $username="root";
    $password="";
    $db="varun";
    $conn= new mysqli('localhost',$username,$password,$db) or die("Unable to connect");


      

    if(isset($_POST['insert'])){
      $firstName=$_POST['firstName'];
      $lastName=$_POST['lastName'];
      $email=$_POST['Email'];
      $userpassword=$_POST['password'];
      
      if(strlen(trim($firstName))==0 || strlen(trim($lastName))==0||!filter_var($email,FILTER_VALIDATE_EMAIL)||strlen(trim($userpassword))<8){
        $firstName="";
        $lastName="";
        $email="";
        $userpassword="";
        $action="";

       
      }

      else{
        $action="preview.php";
        $hashedPassword=hash('sha256',$userpassword);
        $sql="INSERT INTO users(FName,LName,email,password) VALUES ('$firstName','$lastName','$email','$hashedPassword');";
        mysqli_query($conn,$sql);
      }

    }

  ?>

<div class="container">

<div class="jumbotron m-5">
    <h1 class="text-center"> SIGN UP</h1>
    <hr class="w-25 pt-4">

  <form action="<?php echo $action; ?>" method="POST" enctype="multipart/form-data">
  <div class="row">
    <div class="col">
      <label for="exampleInputEmail1">First Name</label>
      <input type="text" class="form-control" placeholder="First name" name="firstName" id="First name">
    </div>
    <div class="col">
      <label for="exampleInputEmail1">Last Name</label>
      <input type="text" class="form-control" placeholder="Last name" name="lastName" id="Last name">
    </div>
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control"  aria-describedby="emailHelp" name="Email" id="Email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  name="password" id="password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-dark text-center" onclick="checking()" name="insert">Submit</button>
  </form>
  </div>
</div>
</div>
    

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


  
  
 
</body>

</html>