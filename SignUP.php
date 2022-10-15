<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/styling.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script scr="signin.js"></script>
  <link rel="stylesheet" text="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>Khulla Pathsala </title>
</head>



<script>
 function validate(){
    var a=document.myform.pass.value;
    var b=document.myform.confirm.value;
    if (b!=a){
      alert("Incorrect Username or Password")
      return false;

    }
    else{
      return true;
    }
  } 
</script>

  <body>
     <!--nav bar starts-->
<nav style="background-color: rgb(136, 133, 131);" class="navbar sticky-top navbar-expand-lg navbar-dark"
  id="navstick">
  <div class="container-fluid">
    <a href="Home.php"><img src="image/lgo.jpg" id="logoimg"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div style="float: right;margin-right: 50px;">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li id="ab" class="nav-item">
            <a class="nav-link" aria-current="page" href="Home.php">Home</a>
          </li>
          <li id="ab" class="nav-item">
            <a class="nav-link " href="About Us.php">About</a>
          </li>
          <li id="ab" class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li id="ab"><a class="dropdown-item" href="login.php">Login</a></li>
              <li id="ab"><a class="dropdown-item" href="SignUP.php">Signup</a></li>


            </ul>
          </li>

        </ul>

      </div>
    </div>
  </div>
</nav>
 <!--nav bar ends-->


<style>
  body {
    background-image: url("image/REG.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
</style>

<body>
  <link rel="shortcut icon" href="#" />
  <title>Sign Up</title>
  <link rel="stylesheet" href="css/styling.css">
  <!--signup form starts-->
  <form action="Registered.php" method="post" name="myform" class="signup" onsubmit="return validate();"
        autocomplete="off">
        <div class="myform">Create Account</div>

        <label class="id" name="Name"> Student Name:</label>
        <div class="form">
            <input class="inputField" name="name" type="text" placeholder=" Enter name" required>
        </div>
        <label class="id" name="emailAd"> Email Address:</label>
        <div class="form">
            <input class="inputField" name="mail" type="email" placeholder="abc@email.com" required>
        </div>

        <label class="id"> Password:</label>
        <div class="form">
            <input class="inputField"  name="pass" type="password" placeholder="Password" required>
        </div>

        <label class="id"> Confirm Password:</label>

        <div class="form">
            <input class="inputField" name="confirm" type="password" placeholder="Confirm Password" required>
        </div>

        <div>
            <button id="signUpBtn" type="submit" class="signUpBtn" name="submit" onclick="validate();"> Sign Up </button>
        </div>
        <div>

            <span style="color: rgb(27, 26, 24);">Already Registered ?</span><a href="login.php"
                style="text-decoration: none; color:rgb(53, 180, 74);"> Login Here</a>
        </div>
    </form>
    <!--signup form ends-->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>Our Partners</h4>
            <ul>
              <li><a href="https://www.google.com/">Google</a></li>
              <li><a href="https://www.amazon.in/">Amazon</a></li>
              <li><a href="https://www.alibaba.com/">Alibaba</a></li>
              <li><a href="https://www.tesla.com/">Tesla</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4> Quick Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="About us.php">About</a></li>
              <li><a href="SignUP.php">Signup</a></li>
              <li><a href="login.php">Login</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4> Contact info</h4>
            <ul>
              <li><a href="#"><i class="fas fa-map-marker-alt"></i>Chitwan,Nepal 4200</a></li>
              <li><a href="#"><i class="fas fa-envelope"></i>Rajstha665@gmail.com</a></li>
              <li><a href="#"><i class="fas fa-phone"></i>+977 9865004522</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Follow us</h4>
            <div id="social" class="Social-links">
              <a href="https://www.facebook.com/profile.php?id=100049907109217"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="https://instagram.com/_rajstha.ds?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>

            </ul>
          </div>
        </div>
      </div>
      <h6 class="text-center copyright ">Copyright © 2022 Khulla Pathsala. Since 1995 AD.</h6>
     
    </footer>

</body>
</html>