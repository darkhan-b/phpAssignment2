<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Volunteer Department</title>
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
  background-image: url(https://images.wallpaperscraft.com/image/net_gray_background_bright_83492_2048x1152.jpg);
background-size: cover;
  padding: 0px;

}
.mainblock {
display: flex;
word-wrap: nowrap;
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
  margin-top: 30px;
}
.mainblock h5 {
 text-transform: uppercase;
  font: 700 "Oswald", sans-serif;
  text-shadow: 0 0 80px rgba(255, 255, 255, 0.9);
  animation: bounce-top 2s;
font-size: 16px;
color:white;
margin-top: 30px;
}
.tit b {
 text-transform: uppercase;
  font: 650 "Oswald", sans-serif;
font-size: 70px;
  text-shadow: 0 0 80px rgba(255, 255, 255, 0.9);
  animation: fallword 2s;
  color: #fff;
  margin-left: 150px;
   margin-top: 30px;

}

#btn1 {
   font-size: 14px;
}



#nav-toggle-button span {
    background-color: white;
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

</header>
<div  class="tit" style="padding-top: 55px; width: 100%" id="nav14" >
<b style=" ">	<?php
	$color1 = 'white';
	$color2 = 'yellow';
	$aitu = 'Volunteer Department';
	if ($color2!=$color1) {
		echo "<font>". $aitu ."</font>";

	}
	 ?></b></div>
<div style="flex">
<div class="mainblock">
	<div class="" ><img src="https://sun9-60.userapi.com/c854124/v854124109/1eb6cf/-bN4aUtO1Vs.jpg" width="696.5px;" height="446.5px;"></div>
<div class="words" style="height: 300px;border: transparent; box-shadow: none;">
  <?php
$arr = ['DEPARTMENT OF ANALYTICS AND INTERNAL DEVELOPMENT', 'SOCIAL Media', 'VOLUNTEER DEPARTMENT'];
$count = 1;
   ?>
<h5 style="font-size: 16px; color:white; margin-top: 20px;">
  <?php echo "$count".". "."$arr[0]"; ?> - SURVEYS, STATISTICS, ANALYTICS, AND WORKING WITH THE ORGANIZATION'S DATA. FINANCIAL AND LEGAL DEPARTMENT .<p><p>
    <?php
    if ($count < 2) {
      $count++;
    } ?>
   ATTRACTING INVESTORS, WORKING WITH DOCUMENTS AND CONTRACTS. WORKING WITH THE ORGANIZATION'S MONETARY FUND AND FIXING COSTS.<p><p>
     <?php echo "$count".". "."$arr[1]"; ?>  - DEPARTMENT FOR FINDING PROJECTS AND SPONSORS (WHILE IN THIS DEPARTMENT, YOU STRICTLY DO NOT HAVE THE RIGHT TO BE IN SEVERAL ORGANIZATIONS). YOU WILL BE GIVEN A MINI INTERVIEW.
     <?php
     if ($count < 3) {
       $count++;
     } ?>
     <p><p><?php echo "$count".". "."$arr[2]"; ?>  - COMPLETELY WORKING WITH THE CITY STAFF OF VOLUNTEERS RECRUITMENT AND DIVISION OF VOLUNTEERS INTO PROJECTS. WORKING WITH LISTS AND KEEPING TRACK OF COMPLETED PROJECTS.</p></h5></div>



<div class="" ><img src="https://sun9-16.userapi.com/c854124/v854124109/1eb6a9/j065C9fgkek.jpg" width="696.5px;" height="556.5px;"></div>
<div class="words" style="height: 300px;border: transparent; box-shadow: none;">


<h5 style="font-size: 16px; color:white; margin-top: 20px;">THE RIGHTS OF VOLUNTEERS<p><p>
  <?php
$rules = "department1";
switch ($rules) {
case "department1":
echo "1. WORK IN A HEALTHY AND SAFE ENVIRONMENT (SEE THE LAW (S) ON LABOR CONSERVATION OF THE REPUBLIC OF KAZAKHSTAN);<p>
2. PASS AN INTERVIEW AND GET A JOB IN ACCORDANCE WITH THE LAW ON EQUAL OPPORTUNITIES AND ANTI-DISCRIMINATION;<br> <p>
3. BE ADEQUATELY INSURED; <br><p>
  4. GET ACCURATE AND TRUTHFUL INFORMATION ABOUT THE ORGANIZATION YOU WORK FOR;
 <br><p>

   5. REIMBURSEMENT FOR YOUR OUT-OF-POCKET EXPENSES INCURRED ON BEHALF OF THE ORGANIZATION YOU WORK FOR;<br><p>
6. GET A COPY OF THE ORGANIZATION'S VOLUNTEER POLICY AND ANY OTHER POLICIES THAT AFFECT YOUR WORK;<br><p>
7. DO NOT HOLD A POSITION PREVIOUSLY HELD BY A PAID EMPLOYEE / VOLUNTEER;<br><p>";
break;
case "department2":
  echo "To respect confidentiality, and private intellectual property
<p>
Be punctual and reliable
<p>
Perform the duties specified in the description of your volunteer position
<p>
Be responsible
<p>
Notify if your availability changes or you leave the organization
<p>
Report any injuries, problems, or hazards that you notice in the workplace
<p>
Adhere to the organization's policies and procedures
<p>
Handle complaints appropriately
<p>
Complete training in accordance with a request or task
<p>
Ask for support when necessary
<p>
Support all members of the organization when necessary
<p>
Share your feedback about volunteer work
<p>
Be physically and psychologically stable for the sustainable development of the organization and yourself as a whole<p>";
  break;
 }

   ?>

</h5>
</div>

</div>

<footer class="page-footer font-small bg-dark" class="col-xs-3" style="margin-top: 250px;">


  <div class="footer-copyright text-center py-3" style="color:white" ><span>© 2020 Copyright:
    <a href="https://www.instagram.com/aitu_volunteers/"> AITU VOLUNTEERS</a></span>
<p><p><button id="btn1" type="button" class="btn btn-outline-success" >On the top</button>
  </div>




</footer>
<script>
var nav1 = document.getElementById("nav14");
var but1 = document.getElementById("btn1");

function handleButtonClick() {
   nav1.scrollIntoView({block: "center", behavior: "smooth"});
}

but1.addEventListener('click', handleButtonClick);
</script>
</body>
</html>
