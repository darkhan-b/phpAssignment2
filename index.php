<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Main menu</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>AITU Volunteers</title>

	<style>
    body {
  margin: 0px;
  background-image: url(https://images.wallpaperscraft.com/image/net_gray_background_bright_83492_2048x1152.jpg) ;
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
.tit b {
  text-transform: uppercase;
  font: 650 "Oswald", sans-serif;
  font-size: 70px;
  text-shadow: 0 0 80px rgba(255, 255, 255, 0.9);
  color: #fff; margin-left: 150px; margin-top: 30px;
  display: flex;
}


.mainblock h5 {
  text-transform: uppercase;
  font: 700 "Oswald", sans-serif;
  text-shadow: 0 0 80px rgba(255, 255, 255, 0.9);
  animation: bounce-top 2s;
  font-size: 16px; color:white; margin-top: 30px;
}
</style>
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


<div class="container-fluid  col-sm-12 text-left">
<div  class="tit" style="padding-top: 55px; width: 100%"  >
<b style=" ">
	<?php
	$color1 = 'white';
	$color2 = 'yellow';
	$aitu = 'Welcome to website AITU Volunteers';
	if ($color2!=$color1) {
		echo "<font>". $aitu ."</font>";

	}
	 ?>
</b>
</div>


<div class="mainblock" >

  <div class="  navbar-expand-lg"><img src="https://sun9-52.userapi.com/c854124/v854124109/1eb695/CTJJkTf5QK8.jpg" width="756.5px;" height="466.5px;" ></div>
  <div class="words navbar-expand-lg" style="height: 350px;border: transparent; box-shadow: none;">
<h5 style="">HI, GUYS! 👋🏼 HOW ARE YOU? OUR VOLUNTEER CLUB IS A PART OF ASTANA IT UNIVERSITY! NOW OUR CLUB HAS MORE THAN 100 VOLUNTEERS WHO ARE READY TO HELP PEOPLE IN A DIFFICULT SITUATION.<p>
NOW WE ARE ONE OF THE STRONGEST CLUBS IN AITU, AS WELL AS PART OF THE ADAL VOLUNTEER CLUB ORGANIZATION.
<p>
OUR CLUB PARTNERS:
<p>

<?php
$clubs = ['AITU HYDRA', 'AITU MUSIC CLUB', 'AITU WAVE', 'MEDIA CLUB'];
$index = 0;

while ($index<=3) {
    echo($clubs[$index].'<br>');
  $index = $index +1;
  }
  ?>
<p>


OUR NON-UNIVERSITY PARTNERS: AIFC MINISTRY OF ECOLOGY TAZAQAZAQSTAN IRONMAN 70.3 ASTANA

WE HOPE THAT OUR CLUB CAN BECOME ONE OF THE STRONG AND PROSPEROUS ONES FOR THE COUNTRY. WE ARE ALSO GOING TO CONDUCT EVEN MORE SETS WITH VOLUNTEERS FROM NEXT YEAR.</p></h5>
</div><p>
<div class=" navbar-expand-lg" ><img src="https://sun9-14.userapi.com/c854124/v854124109/1eb6b3/EoHz0lNlySY.jpg" width="756.5px;" height="466.5px;" ></div>
<div class="words navbar-expand-lg" style="height: 350px;border: transparent; box-shadow: none;">
<h5 style="font-size: 16px; color:white; margin-top: 30px; margin-left: 470px;"><b>BEFORE YOU START, YOU SHOULD CHECK THAT:</b><p><p>
● THE ORGANIZATION IS A LEGITIMATE VOLUNTEER ORGANIZATION *
<br><p>
● THE ORGANIZATION'S GOAL IS CONSISTENT WITH YOUR OWN VALUES AND BELIEFS
<br><p>
● THE ORGANIZATION BEARS STATE RESPONSIBILITY AND VOLUNTARY ACCIDENT INSURANCE<br><p>
● YOUR ROLE IS CLEAR AND SPECIFIC<br><p>
● THE ORGANIZATION CAN PROVIDE YOU WITH WRITTEN INFORMATION ABOUT ITS GOALS AND ACTIVITIES<br><p>
● YOU ARE SATISFIED THAT THE ORGANIZATION'S FUNDS ARE BEING SPENT IN ACCORDANCE WITH ITS MISSION<br><p>
● SO NOW THAT WE'VE COVERED YOUR RIGHTS, HERE ARE YOUR RESPONSIBILITIES<br>
</div>

</h5><p>
<div class=" navbar-expand-lg"><img src="https://sun9-3.userapi.com/c854124/v854124109/1eb682/C7ucnYb5xbw.jpg" width="756.5px;" height="466.5px;"   ></div>
<div class="words navbar-expand-lg" style="height: 350px;border: transparent; box-shadow: none;">
<h5 style="font-size: 16px; color:white; margin-top: 30px;">
THE PRESIDENT OF AITU VOLUNTEERS IS BAIBULAT DARKHAN, A STUDENT OF AITU.<p><p>
  - HOW DID YOU COME UP WITH THE IDEA TO CREATE SUCH A LARGE-SCALE PROJECT?<br>
   MY FIRST VOLUNTEERING TOOK PLACE DURING EXPO2017ASTANA. BACK THEN, I WAS VERY INEXPERIENCED AND HAD PROBLEMS COMMUNICATING WITH OTHER PEOPLE. MORE SIMPLY: I WAS AN INTROVERT.<p> A YEAR LATER, MY FRIEND AND I FOUNDED THE YOUTH ORGANIZATION ADALVOLUNTEERCLUB, WHICH HAS PROMOTED MORE THAN 2000 PEOPLE TO SUCCESS, WHICH HELPED THEM TO ENTER UNIVERSITIES, IN LEADERSHIP QUALITIES. NOW I HAVE ORGANIZED AITU VOLUNTEERS, WHICH CONSISTS OF MORE THAN 100+ PARTICIPANTS WHO ARE READY TO HELP AT ANY TIME.<p><p>
- WE PARTICIPATED IN SUCH EVENTS AS: <p>AIFC FORUM, YERNAR AIDAR CONCERT, ACOUSTIC NIGHT, ROBOCON AND OPENDAYS AITU. MANY CHILDREN RECEIVE LETTERS OF THANKS, CERTIFICATES THAT CAN HELP THEM IN THE FUTURE: ADMISSION, PORTFOLIO FOR WORK. </h5></div>
</div>
</div>
</div>
<p>



<footer class="page-footer font-small bg-dark" >
  <div class="footer-copyright text-center py-3" style="color:white" ><span>© 2020 Copyright:
    <a href="https://www.instagram.com/aitu_volunteers/"> AITU VOLUNTEERS</a></span>
<p><p><button id="btn1" type="button" class="btn btn-outline-success" >On the top</button>
  </div>


<script>
var nav1 = document.getElementById("nav14");
var but1 = document.getElementById("btn1");

function handleButtonClick() {
   nav1.scrollIntoView({block: "center", behavior: "smooth"});
}

but1.addEventListener('click', handleButtonClick);
</script>

</footer>
</body>
</html>
