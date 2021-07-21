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
        height:500px;
        width:300px;
        padding:20px;
				right:0px;
				top:-10px;
				margin-left:850px;
				position:relative;
        background-image:linear-gradient(to right,#87cefa,#e6e6fa);
        border-radius:10px;
				margin-right: 100px;
				opacity:0.99;
				color: #000000;
      }



button{

	background-image:linear-gradient(to bottom,rgba(0,50,205,0.6),#87ceeb);
	border-radius: 200px;
	box-shadow: 0 5px rgba(0, 50, 205, 0.3);
	color:#555;

}

button:hover{
	background-image:linear-gradient(to bottom,#87ceeb,rgba(0, 50, 205, 0.6));
	color:#ffffff;

}
button:active{
	box-shadow: 0 1px rgba(0, 50, 205, 0.5);
	transform: translateY(4px);


}

ul{
list-style-image: url('arrow.png');
font-size: 30px;
z-index:10;
margin-left: 0vw;

}

img.a{
	margin-top: -160px;
	margin-left: -25vw;

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
	margin-top: -5vw;
}

ul.bms{
	margin-left: -20vw;
}

input {
	background: transparent;
	border-bottom: 2px solid #888888;
	border-right: none;
	border-left: none;
	border-top:  none;
 margin-left: 10px;
 padding-left:6px;
 padding-top: 6px;
 color:#333;
}

input:hover{
	border-bottom: 2px solid rgba(0,50,205,0.8);
	transition: 0.5s;
	border-left: 18px solid rgba(0,50,205,0.8);
}

input:active{
	border:none;
	background-color: #555;
	border-bottom: 2px solid rgba(0,50,205,0.8);
	border-left: 18px solid rgba(0,50,205,0.8);

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


<img class="a" src="logobms2.png" height="70px" width="70px" />

<center style="margin-top:0vw;">

<h1 class="bms" style="font-size:80px;font-weight:bold">Welcome </br></h1>
<h1 class="bms" style="font-size:40px;margin-top:-20px;font-family:arial;">BookMySeat.com</h1>



</center>



<ul class="bms">
	<li>
		   BookMySeat offers showtimes, movie tickets,<br/> reviews, trailers of movies to be relaeased.
			   two months .

	</li>

	<li>
		It also provies concert tickets and events near Mumbai, Delhi, <br />
		Kolkata 	and many other cities in India.


	</li>

	<li>
		Also features promotional offers, coupons and mobile.
	</li>
</ul>

 <div class="w3-display-middle" style="white-space:nowrap;">



<div  class="flex-container" style="margin-left:120px">

  <div style="box-shadow: 0 10px 15px 0 rgba(0,0,0,0.9)" class="box " >
		<img src="logobms2.png" alt="bgimage" height="200px" width="200px" style="opacity:0.1;position:absolute;margin-top:8vw;margin-left:20px;z-index:-1" />

		    <h4 class="w3-center" ><b>Welcome</b> <br /><strong style="font-family:brush script mt;letter-spacing:2px;text-shadow:1px 2px #555 ;color:rgba(70,100,185,1);"> BookMySeat.com </strong></h4>
		<h6 style=" margin-top:-15px;font-size:10px; " class="w3-center">Brought to you by......</h6>
    <img src="icon2.png" class="w3-center" style="margin-left:75px" width="100px" height="70px"/><br />

    <h2 class="w3-center" style="font-weight:bold;color:#555555">Log In</h2>

    <form action="login2.php" method="POST">

   <input class="" name="email" id="email" placeholder="Enter ur email"  style="border-radius:0px;padding:6px;z-index:1;" size="30"  type="email "/>

    <br /><input  type="password" name="pass" id="pass" class=" " placeholder="Enter ur Password" style="margin-top: 10px;opacity:1;padding:6px;font-size:15px;" size="30"  /><br />

      <button type="submit" name="submit" class="" value="Submit" size="30px" style="border: none;font-size:14px;color:#ffffff;height:38px;width:240px;margin-left:10px;margin-top:30px;cursor:pointer">Log In</button><br />
    </form>
		<a href="signup.php"  style="margin-left:7vw;position:relative;margin-top:20px;" >Sign Up</a>


</div>
</div>

  </div>




  </div>

  </body>
  </html>
