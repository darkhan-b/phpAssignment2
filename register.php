<!DOCTYPE html>
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">

  <style>
    body {
  margin: 0px;
  background-image: url(https://images.wallpaperscraft.com/image/net_gray_background_bright_83492_2048x1152.jpg) ;
min-width: 678px;
background-size: cover;
  padding: 0px;
overflow-x: hidden;

}
.mainblock {
display: flex;
word-wrap: nowrap;
  justify-content: space-between;
flex-wrap: wrap;
width: 80%;
margin-top: 20px;
margin-left: 180px;
}
.mainblock > div {
  border: 2px solid white;
  box-shadow: 0 1px 3px;
  background-color: transparent;
  font-family: sans-serif;
  font-size: 17px;
  justify-content: space-between;
  margin-top: 30px;
}
.mainblock > div {
  display: flex;
  flex-wrap: wrap;
}
.mainblock h5 {
 text-transform: uppercase;
  font: 700 "Oswald", sans-serif;

  text-shadow: 0 0 80px rgba(255, 255, 255, 0.9);
  animation: bounce-top 2s;
font-size: 16px; color:white; margin-top: 30px;
}
.tit b {
 text-transform: uppercase;
  font: 650 "Oswald", sans-serif;
font-size: 70px;
  text-shadow: 0 0 80px rgba(255, 255, 255, 0.9);
  color: #fff; margin-left: 150px; margin-top: 30px;display: flex;
}
#btn1 {
   font-size: 14px;
}



#nav-toggle-button span {
    background-color: white;
}


  </style>
  <link rel="stylesheet" type="text/css" href="css/main.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <meta charset="utf-8">

  <title>Регистрация на сайте</title>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav14">
    <h1 class="navbar-brand" href="#">Astana IT University Volunteers</h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav" >
        <li><a class="nav-item nav-link active" href="index.php">MainPage <span class="sr-only"></span></a></li>
       <a class="nav-item nav-link active" href="events.php">Events volunteering<span class="sr-only"></span></a>
        <a class="nav-item nav-link active" href="department.php">Department <span class="sr-only"></span></a>

          <p style="margin-left: 828px;">
          <li style="">

  					<a href="auto.php"><button class="btn btn-outline-success" >Sign In</button></a>
  					<a href="register.php"><button class="btn btn-outline-success" >Join now</button></a>

          </li>
      </div>
    </div>


  </nav>
    </header>


<div  class="tit" style="padding-top: 35px; width: 100%"  >
<b ><?php
echo '<style>
                  font { color: gold; text-shadow: 0 1px 3px; }
            </style>';
$color1 = 'white';
$color2 = 'yellow';
$aitu = 'Registration on the site';
if ($color2!=$color1) {
  echo "<font>". $aitu ."</font>";

}
 ?></b></div>

 <div class="container-fluid" style="margin-top: 20px;">
    <div class="container" style="box-shadow: 0 1px 5px; background-color:white; height: 570px;">
      <h2 class="text-center" id="title">If you are a volunteer of Astana IT University - register</h2>
       <p class="text-center">
        <small id="passwordHelpInline" class="text-muted">Registration on the site takes place strictly according to the specified parameters<a href="rules.html"> rules</a>. If you have any questions, please contact - volunteers@astanait.edu.kz</small>
      </p>
      <hr>
      <div class="row">
        <div class="col-md-5">

            <fieldset>
              <p class="text-uppercase pull-center"> Registration on the aitu volunteer website</p>
              <div class="form-group">
                <input type="text" name="username" id="username" class="form-control input-lg" placeholder="username">
              </div>

              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
              </div>
                <div class="form-group">
                <input type="password" name="password2" id="password2" class="form-control input-lg" placeholder="Password2">
              </div>
              <div class="form-group">
                <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Ваше имя">
              </div>
              <div class="form-group">
                <select style="height: 30px;">
                  <option disabled>University faculty</option>
                  <option>Information technology</option>
                  <option>Telecommunications technologies</option>
                  <option>Cybersecurity</option>
                  <option>IT management</option>
                </select>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  By clicking you agree to the terms of privacy
                </label>
                </div><p>
              <div>
                    <input type="submit" class="btn btn-lg btn-primary" onClick="check()"   value="Register">
              </div>
            </fieldset>

        </div>

     <div class="col-md-6">
            <form role="form">
            <fieldset>
              <p class="text-uppercase" ><p> Registration on our site will allow You to be a full member.<p>
                You can add news to the site, leave your comments, view hidden text, and much more.<p>
If you have problems registering, contact the site administrator. </p>
<h6>
<?php
$cookie = 1;
switch ($cookie) {
  case 1:
  echo "Your browser must allow cookies";
    break;
case 2:
  echo "Your browser has cookies";
  break;
  case 3:
    echo "Your browser does not have allow cookies";
    break;
}
  ?>
 </h6>
            </fieldset>
        </form>
        </div>


      </div>
    </div>
    <p class="text-center">

  </div>
  </div>


<footer class="page-footer font-small bg-dark"  style="margin-top: 150px;">


  <div class="footer-copyright text-center py-3" style="color:white" ><span>© 2020 Copyright:
    <a href="https://www.instagram.com/aitu_volunteers/"> AITU VOLUNTEERS</a></span>
<p><p>

  <script>
    function check() {

      if(document.getElementById("email").value === '') {
alert('You did not enter email');
      }
      if  (document.getElementById("username").value === '') {
        alert('You did not enter name');
      }
      if (document.getElementById("password").value === '') {
        alert('You did not enter passwprd');
      }
      if  (document.getElementById("password2").value === '') {
        alert('You did not re-enter your password, or it is incorrect');
      }
      else {
    alert('The confirmation code was sent to your email address');
  }
}

    </script>
</body>
</html>
