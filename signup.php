<!DOCTYPE html>
<html>
<head>
	<title>BookMySeat - Book your show now </title>
<link rel="icon" href="logobms2.png" width="300px" height="300px">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="web1.css">
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
  type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
 <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="parallax.min.js"></script>

 <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
  />
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;
	}

	html{
			scroll-behavior:smooth;

	}

	body {
		  height: 100%;
		  color: #ffffff;
		  line-height: 1.8;
		  background-image:url(mov2.png);
			background-attachment:fixed;
			background-position:center;
			background-size: 1700px 1000px;
	}
	a:active{
			color:cyan;
			}

      div.box{
        height:650px;
        width:50vw;
        padding:20px;
				right:0px;
				margin-top:70px;
				margin-left:50px;
				position:relative;
        background-image:linear-gradient(to right,#87cefa,#e6e6fa);
        border-radius:10px;
				margin-right: 100px;
				opacity:1;
				color: #555555;
      }

input:hover{
	border-bottom: 2px solid rgba(0,50,205,01);
	transition: 0.5s;
}
input {
	background: transparent;
	border-bottom: 2px solid #008080;
	border-right: none;
	border-left: none;
	border-top:  none;
 margin-left: 20px;
 padding-left:6px;
 padding-top: 16px;
 margin-top: 10px;
}

button{

	background-image:linear-gradient(to bottom,#87ceeb,rgba(0, 50, 205, 0.5));

}

button:hover{
	background-image:linear-gradient(to bottom,rgba(0, 50, 205, 0.5),#87ceeb);
	color:#ffffff;

}

ul{
list-style-image: url('arrow.png');
font-size: 30px;
z-index:10;
margin-left: 0vw;

}

img.a{
	margin-top: -40px;
	margin-left: -15vw;
	position: absolute;

}

img.b{
	margin-top: 80px;
	margin-left: 60px;
	 height:607px;
	 width:607px;
	 position: absolute;
	 opacity:0.1	;

}
h1.bms{
	margin-left: -20vw;
}

ul.bms{
	margin-left: -20vw;
}


</style>

<body>

	<div id="slider" class="bgimg-1 w3-hide-small  ba" style="box-shadow: 0 20px 16px 0 rgba(0,0,0,0.9);background-attachment:fixed">

	<figure id="top">

	<img src="suc.jpg"   id="home" alt="text" style="background-attachment:fixed;box-shadow: 0 20px 16px 0 rgba(0,0,0,0.5), 0 30px 20px 0 rgba(0,0,0,0.3),0 30px 50px 0 rgba(0,0,0,0.3),0 30px 50px 0 rgba(0,0,0,0.3)";>
	<img src="mov.jpg"   id="home"  alt="design" style="background-attachment:fixed;box-shadow: 0 20px 16px 0 rgba(0,0,0,0.5), 0 30px 20px 0 rgba(0,0,0,0.3),0 30px 50px 0 rgba(0,0,0,0.3),0 30px 50px 0 rgba(0,0,0,0.3)";>
	<img src="ground.jpg"   id="home" alt="design" style="background-attachment:fixed;box-shadow: 0 20px 16px 0 rgba(0,0,0,0.5), 0 30px 20px 0 rgba(0,0,0,0.3),0 30px 50px 0 rgba(0,0,0,0.3),0 30px 50px 0 rgba(0,0,0,0.3)";>
	<img src="mov2.png"   id="home" alt="design" style="background-attachment:fixed;box-shadow: 0 20px 16px 0 rgba(0,0,0,0.5), 0 30px 20px 0 rgba(0,0,0,0.3),0 30px 50px 0 rgba(0,0,0,0.3),0 30px 50px 0 rgba(0,0,0,0.3)";>
	<img src="suc.jpg"   id="home" alt="design" style="background-attachment:fixed;box-shadow: 0 20px 16px 0 rgba(0,0,0,0.5), 0 30px 20px 0 rgba(0,0,0,0.3),0 30px 50px 0 rgba(0,0,0,0.3),0 30px 50px 0 rgba(0,0,0,0.3)";>

	</figure>

	</div>


 <div class="w3-display-middle" style="white-space:nowrap;">
<div  class="flex-container" style="margin-left:120px">
	<img class="a" src="logobms2.png" height="70px" width="70px" />

  <div style="box-shadow: 0 20px 15px 0 rgba(0,0,0,0.4)" class="box " >
		<img src="logobms2.png" alt="bgimage" height="200px" width="200px" style="opacity:0.2;position:absolute;margin-top:15vw;margin-left:250px;z-index:0" />

		    <h4 class="w3-center"><b>Welcome</b> <br /> BookMySeat.com</h4>
		<h6 style=" margin-top:-15px;font-size:10px; " class="w3-center">Brought to you by......</h6>
    <img src="icon2.png" class="w3-center" style="margin-left:310px" width="100px" height="70px"/><br />

    <h2 class="w3-center" style="font-weight:bold;color:#555555">Sign Up</h2>

    <form action="signup_connect.php" method="POST">

   <input class="  " name="fname" id="fname" placeholder="Enter ur Name" style="width:45%;border-radius:0px;" size="30"  type="text"/>
	 <input class="  " name="lname" id="lname" placeholder="Enter ur Last Name" style="width:45%;border-radius:0px;" size="30"  type="text"/></br>
	 <input class="" name="city" id="city" placeholder="Enter ur City" style="width:45%;border-radius:0px;margin-top:10px" size="30"  type="text"/>
	 <input class="" name="phno" id="phno" placeholder="Enter ur Phone No." style="width:45%;border-radius:0px;margin-top:10px" size="30"  type="phone"/></br>
	 <input class="" name="email" id="email" placeholder="Enter ur Email Id" style="width:45%;border-radius:0px;margin-top:10px" size="30"  type="email"/></br>
	 <input class="" name="pass" id="pass" placeholder="Enter ur Password" style="width:45%;border-radius:0px;margin-top:10px" size="30"  type="password"/><br />
	 <input class="" name="cpass" id="cpass" placeholder="Confirm Password" style="width:45%;border-radius:0px;margin-top:10px" size="30"  type="password"/><br /><br />


      <button type="submit" name="submit" class="" value="Submit" size="30px" style="border:none;font-size:14px;color:#ffffff;height:38px;border-radius:20px;width:200px;margin-left:250px;">Sign up</button><br />
      <a href="login.php"  style="margin-left:330px;margin-bottom:50px;" >Login</a>
    </form>

  </div>

  </body>
  </html>
