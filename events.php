<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Events</title>
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
.container{background-color:white; padding: 15px; }

  #dis {
     display: grid;
    grid-gap: 1px;
    grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    grid-template-rows: repeat(2, 100px);
 margin-left: 400px;
padding: 10px;
  }

  #dis > div {
    display: grid;
    background-color: #f6fca9;
    border: 1px solid black;
  }
</style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

    </header>

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


<div  class="tit" style="padding-top: 55px; width: 100%" id="nav14" >
<b style=" ">	<?php
	$color1 = 'white';
	$color2 = 'yellow';
	$aitu = 'Events Volunteer';
	if ($color2!=$color1) {
		echo "<font>". $aitu ."</font>";

	}
	 ?></b></div>

<div class="container-fluid" style="margin-top: 50px;">
    <div class="container" style="box-shadow: 0 1px 5px;">
      <h2 class="text-center" id="title">If you are interested in a specific event, select </h2>
       <p class="text-center">

      </p>
      <hr>
      <div class="row">
        <div class="col-md-12">

            <fieldset>

              <div class="form-group">
							<h5 style="margin-left: 350px;">	<?php
								$events = 11;
								$mainNumber = 10;
								if($events = 10) {
									echo "Number of events on Volunteering - ".$events;
								}
								elseif ($events > 10){
									echo "AITU Volunteers has more ". $mainNumber. " events on Volunteering";
								}
								else {
									echo "AITU Volunteers has less ". $mainNumber. " events on Volunteering";
								}
								 		?></h5><p><p>
									 <?php
								$array1 = ['Concerts, performances and music show', 'Scientific, international conferences, presentations',
								'Charity exhibitions, flash mobs', ' Sport events', 'Open days, meeting guests', 'CyberGames'];
								$num = 6;
								for( $i=1; $i <= sizeof($array1); $i++) {
									echo ($array1[$i-1].' - '.$i.' <p>' );
								}	?>
</div>
                 <div class="form-group">

                <input id="numb" type="text" class="form-control input-lg" placeholder="Input number" name="numbEv">
              </div>
              </div>
              <div>
                  <button onclick="event1()" class="btn btn-outline-success " style="margin-left: 15px;">To Choose Event</button>
              </div>
            </fieldset>
        </div>
      </div>
    </div>
    </div>

  <table class="table table-striped table-dark" style="margin-top: 50px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Event name</th>
      <th scope="col">Description</th>
      <th scope="col">Organizer </th>
    </tr>
  </thead>
  <tbody>
    <tr class="conference">
      <th scope="row" >1</th>
      <td>Robocon</td>
      <td>Held exhibitions of robotics, many students came to participate in the Republican event. Our volunteers followed what was happening.</td>
      <td>Astana IT University</td>
    </tr>
    <tr class="conference">
      <th scope="row" >2</th>
      <td>AIFC conference</td>
      <td>Event that hosted an international scientific conference on the development of IT technologies and Engineering. </td>
      <td>Astana international financial center</td>
    </tr>
    <tr class="concert">
      <th scope="row" >3</th>
      <td>Acoustic Night</td>
      <td>At this event, an evening of aitu students was held, where many played guitars. The atmosphere was great, even here our volunteers helped with the event</td>
      <td>Astana IT University Music club</td>
    </tr>
    <tr class="concert">
      <th scope="row" >4</th>
      <td>Yernar Aydar's concert</td>
      <td>Passed on December 22. About 80+ volunteers gathered, including 12 volunteers-students of Astana IT University. The main task was to: navigation, checking of tickets </td>
      <td>Organizer of concerts Barys Arena </td>
    </tr>
    <tr class="usual">
      <th scope="row" >5</th>
      <td>Open Days AITU</td>
      <td>This event was attended by more than 30 volunteers of our University, each volunteer had their own position and helped to organize them. All the volunteers were happy!</td>
      <td>Astana IT University</td>
    </tr>
    <tr class="blag">
      <th scope="row" >6</th>
      <td>Charity flash mob</td>
      <td>More than 70 volunteers took part in the charity flashmob, 15 of them are students of Astana IT university. This flash mob was held for a boy with cancer. This flash mob helped the boy to collect a good amount for the operation, we hope that the child will recover.</td>
      <td>Khan Shatyr, the organizers of the flash mob</td>
    </tr>
<tr class="sport">
      <th scope="row" >7</th>
      <td>David Cup</td>
      <td>8 volunteers from our University took part in the Davis Cup. The volunteers got a good experience and found new acquaintances.</td>
      <td>Davis Cup organizers</td>
    </tr>
    <tr class="sport">
      <th scope="row" >8</th>
      <td>Asian Cup in basketball</td>
      <td>One of the volunteers of our University - Yerbol (IT1904) took part. The volunteer provided valuable assistance and was also the first volunteer event in his life</td>
      <td>The organizers of the Asian Cup in basketball</td>
    </tr>
    <tr  class="concert1">
      <th scope="row">9</th>
      <td>Scriptonite's concert (SOON)</td>
      <td> Coming soon!!! 8 ambitious and strong volunteers will take part from our University </td>
      <td>Organizer of concerts</td>
    </tr>
    <tr class="conference2">
      <th scope="row" >10</th>
      <td>ComicCon 2020 (SOON)</td>
      <td>
Coming soon!!! 8 ambitious and strong volunteers will take part from our University
			</td>
      <td>Organizers of the ComicCon 2020 Astana festival</td>
    </tr>
  </tbody>
</table>



<footer class="page-footer font-small bg-dark" class="col-xs-3" style="margin-top: -20px;">
  <div class="footer-copyright text-center py-3" style="color:white" ><span>© 2020 Copyright:
    <a href="https://www.instagram.com/aitu_volunteers/"> AITU VOLUNTEERS</a></span><p><p>
<button id="btn1" type="button" class="btn btn-outline-success" >On the top</button>
  </div>




</footer>

<script>

var nav1 = document.getElementById("nav14");
var but1 = document.getElementById("btn1");

function handleButtonClick() {
   nav1.scrollIntoView({block: "center", behavior: "smooth"});
}

but1.addEventListener('click', handleButtonClick);



function event1() {
var numb = document.getElementById('numb').value;
var conference = document.querySelector('.conference');
var sport = document.querySelector('.sport');
var concert = document.querySelector('.concert');
var usual = document.querySelector('.usual');
var blag = document.querySelector('.blag');
if(numb == 1) {
conference.style.display = 'none';
sport.style.display = 'none';
usual.style.display = 'none';
blag.style.display = 'none';
conference2.style.display = 'none';
concert1.style.display = 'none';
}
if(numb == 2) {
concert.style.display = "none";
sport.style.display = "none";
usual.style.display = "none";
blag.style.display = "none";
conference2.style.display = 'none';
concert1.style.display = 'none';
}
if(numb == 3) {
conference.style.display = 'none';
sport.style.display = 'none';
usual.style.display = 'none';
concert.style.display = 'none';
conference2.style.display = 'none';
concert1.style.display = 'none';
}
if(numb == 4) {
conference.style.display = 'none';
conference2.style.display = 'none';
concert.style.display = 'none';
concert1.style.display = 'none';
usual.style.display = 'none';
blag.style.display = 'none';
}
if(numb == 5) {
conference.style.display = 'none';
sport.style.display = 'none';
concert.style.display = 'none';
blag.style.display = 'none';
conference2.style.display = 'none';
concert1.style.display = 'none';
}
if (numb >5 || numb < 1) {
  alert("You can write only from 1 to 5 number");
}
}
</script>

</body>
</html>
