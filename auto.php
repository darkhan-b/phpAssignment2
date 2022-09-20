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
font-size: 16px; color:white; margin-top: 30px;
}
.tit b {
 text-transform: uppercase;
  font: 650 "Oswald", sans-serif;
font-size: 70px;
  text-shadow: 0 0 80px rgba(255, 255, 255, 0.9);
  animation: bounce-top 2s;
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

  <title>Авторизация на сайтеx  </title>

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
<b style=" ">	<?php
          echo '<style>
                  font { color: gold; text-shadow: 0 1px 3px;   }
            </style>';
	$color1 = 'white';
	$color2 = 'yellow';
	$aitu = 'Authorization on the site';
	if ($color2!=$color1) {
		echo "<font>". $aitu ."</font>";

	}
	 ?></b></div>

 <div class="container-fluid" style="margin-top: 20px;  ">
    <div class="container" style="box-shadow: 0 1px 5px; height: 470px; background-color:white;">

      <h2 class="text-center" id="title" style="margin-top:50px;">If you are a volunteer of Astana IT University-visit the site</h2>
       <p class="text-center">
        <small id="passwordHelpInline" class="text-muted"> Authorization takes place strictly according to the specified data. The site administration is not responsible for loss of password or forgetfulness of email.</small>
    <P>Each volunteer must have: </p>
      <?php
$info = ['Username', 'Password', 'Email Address'];
$c = 0;

while ($c < 2) {
  echo "<b>".$info[$c]."</b>,  ";
  $c++;
  if($c == 2) {
    echo "<b>".$info[$c]."</b>";
  }
}
        ?>
      <hr>
      <div class="row">
        <div class="col-md-5">

            <fieldset>
              <p class="text-uppercase pull-center"> Authorization on the site</p>
              <div class="form-group">
                <input type="text" name="username" id="username" class="form-control input-lg" placeholder="username">
              </div>

              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
              </div>

              <div class="form-check">

                </div><p>
              <div>

                    <input type="submit" class="btn btn-lg btn-primary" onclick="check1()" placeholder="Send" value="Log in ">
              </div>
            </fieldset>

        </div>

        <div class="col-md-2">

        </div>

        <div class="col-md-5">
            <form role="form">
            <fieldset>
              <p class="text-uppercase"> Forgot password? </p>

              <div class="form-group">
                <input type="text" name="username" id="username1" class="form-control input-lg" placeholder="username">
              </div>
              <div class="form-group">
                <input type="email" name="email" id="email1" class="form-control input-lg" placeholder="Email Address">
              </div>
              <div>
                <input type="submit" class="btn btn-md" onclick="check2()" value="Send code on email">
              </div>

            </fieldset>
        </form>
        </div>
      </div>
    </div>
    <p class="text-center">

  </div>
  </div>


<footer class="page-footer font-small bg-dark"  style="margin-top: 250px;">

  <div class="footer-copyright text-center py-3" style="color:white" ><span>© 2020 Copyright:
    <a href="https://www.instagram.com/aitu_volunteers/"> AITU VOLUNTEERS</a></span>
<p><p>

  <script>

    function check1() {

      if(document.getElementById("email").value === '') {
alert('You didn not enter mail');
      }
      if  (document.getElementById("username").value === '') {
        alert('You didn not enter name');
      }
      if (document.getElementById("password").value === '') {
        alert('You didn not enter password');
      }
      else {
    alert('The confirmation code was sent to the email address where You registered');
  }
}

   function check2() {

      if(document.getElementById("email1").value === '') {
alert('You didn not enter email');
      }
      if  (document.getElementById("username1").value === '') {
        alert('You didn not enter name');
      }

      else {
    alert('The confirmation code was sent to the email address where You registered');
  }
}

    </script>
</body>
</html>
