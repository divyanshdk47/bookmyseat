<?php
session_start();
if(isset($_SESSION["email"]))
{
  echo '

<!DOCTYPE html>

<html>
<title>BookMySeat - Book your show now </title>
<link rel="icon" href="logobms2.png" width="300px" height="300px">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="web1.css">
<link rel="stylesheet" href="bms.css" />
<link rel="stylesheet" href="bookmyseat.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
 <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="parallax.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>


<style>
.mySlides {display:none;}

body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;
  }

  html{
      scroll-behavior:smooth;


  }

  body {
      height: 100%;
      color: #555555;
      line-height: normal;
      background-attachment:fixed;
      background-position:center;
      background-image: linear-gradient(to right,#e0fff0,#e6e6fa);
      overflow-x: hidden;
  }

  .background{
    color:#222222;
    top:70%;
    left:10%;
    opacity:0.1;
    letter-spacing: 25px;
    font-size:90px;
    position:absolute;
    font-weight:bolder;
    font-family:brush script mt;
    z-index: -1;
    cursor: default;
  }

  div.box-rightdark{
    height:500px;
    width:250px;
    padding:20px;
    right:0px;
    background:#333;
    margin-top: 6.5vw;
    margin-right:30px;
    position:absolute;
    opacity:1;
    color: #777;
    z-index: 0;
    cursor: pointer;
    box-shadow: 0 2px 2px 0px rgba(0, 0, 0, 0.5);
    font-size: 10px;

  }
  					.next {
  					  margin-top:15px;
  						margin-left: -0.8vw;
  					  width:5.2vw;
  					  height:170.1px;
  						opacity:0.3;
  					  background-image: linear-gradient(to right,#fff,#555);

  					}

  					.previous{
  					  margin-top:15px;
  					  margin-left: -0.8vw;
              width:5.2vw;
  					  height:170.1px;
  					  border-radius:5px 0px 0px 5px;
  						opacity:0.5;
  					  background-image: linear-gradient(to right,#444,#ffffff);
  					}

  .pagination {
    display: inline-block;

  }

  .pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    font-size:20px;

  }

  .pagination a.active {
    background-color:  rgba(0, 150, 175, 1);
    color: white;
    border-radius: 5px;
  }

  .pagination a:hover:not(.active) {
    background-color: #ddd;
    border-radius: 5px;
  }

  .gallery {
    background: transparent;
    width:100%;
    margin-right:20vw;

  }

  .gallery-cell {
    width: 20%;
    height: 170px;
    margin-right: 5vw;
    background: none;
    margin-top: 2vw;
    cursor: pointer;
    left:20%;
  }

  .gallery-cell2 {
    width: 5%;
    height: 60px;
    margin-right: 3vw;
    background: none;
    margin-top: 5vw;
    cursor: pointer;
  }

  /* cell number */
  .gallery-cell:before {
    display: block;
    text-align: center;
    content: counter(gallery-cell);
    line-height: 200px;
    font-size: 80px;
    color: white;

  }

  .light-mode{
      color:#888888;
    background:#222222;
    animation: change 15s ease-in-out infinite;
  }

  .light-modee{
      color:#888888;
  }

  .footer-box{
    cursor:default;
    opacity:0.9;
    width:100%;
    background: rgba(70,150, 185, 1);
    position:absolute;
    margin-top:10vw;
    color:#777;
  }

  .footer-box-dark{
    cursor:default;
    opacity:0.9;
    width:100%;
    background: rgba(1,1, 1, 0.8);
    position:absolute;
    margin-top:10vw;
    color:#888;
  }

  img.box-img{
    position:absolute;
    float:center;
    opacity:0.1;
    z-index:-1;
    margin-top:10vw ;
    height:200px;
    width:200px;
  }

  .table-box{
    background:rgba(70,150,185,0.8);
    color:#ffffff;
    margin-left:40vw;
    margin-top:-38vw;

  }

  .table-box-dark{
    background:rgba(0,1,1,0.6);
    color:#ffffff;
    margin-left:40vw;
    margin-top:-38vw;

  }

  .table-con{
    z-index:2;margin-left:40vw;background:#f6f6f6;border:solid 0.25px #999;margin-top:-1px;
  }

  .table-condark{
    z-index:2;
    margin-left:40vw;
    background:#333;
    border:solid 0.25px #222;
    margin-top:-1px;
  }

  .side-box-dark{
    border-bottom: 2px solid #999;
    margin-top: 30px;
    letter-spacing: 2px;
    z-index:0;
    font-size: 20px;
    transition: 0.5s;
    padding-bottom: 10px;

  }

  .side-box-dark:hover{
    border-right: 26px solid rgba(70,150, 185, 1);
    border-left: 26px solid rgba(70,150, 185, 1);
    border-bottom: 2px solid rgba(70,150, 185, 1);
    letter-spacing: 0px;
  }

  .head{
    font-size:20px; background: rgba(70,150, 185, 1);padding:20px;color:#f6f6f6;margin-top:-5px;
  }
  .head-dark{
    font-size:20px; background: rgba(0,10, 10, 0.6);padding:20px;color:#888;margin-top:-5px;
  }

  div.box-dark{
    height:500px;
    width:250px;
    padding:20px;
    left:0px;
    margin-top: 6.5vw;
    margin-left:30px;
    position:absolute;
    background:#333;
    opacity:1;
    color: #fff;
    font-weight: bold;
    z-index: 0;
    cursor: pointer;
    box-shadow: 0 2px 2px 0px rgba(0, 0, 0, 0.5);


  }

  .mar{
    color:red;font-size:15px;margin-top:2vw;margin-left:10px;
  }

  .mar-dark{
    color:grey;font-size:15px;margin-top:2vw;margin-left:10px;
  }

  .box-ad{
    height:500px;
    width:1080px;
    margin-top: 6.5vw;
    margin-left:23vw;
    opacity:1;
    color: #222222;
    z-index: 0;
    cursor: pointer;
    box-shadow: 0 3px 10px 2px rgba(0, 0, 0, 0.8);


  }
  .bright{
    filter:brightness(20%);
  }

  .cont{
    position:relative;
  }

  .overlay{
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background-image:linear-gradient(to bottom,rgba(0,10,10,0.6),#87ceeb);
      overflow: hidden;
      width: 100%;
      height: 0;
      transition: .7s ease;
      transition-delay:0.4s;
      color:#fff;
      font-size:10px;
      border-radius:5px;
    }

    .cont:hover .overlay{
      height:85%;
    }
    .checked {
      color: orange;
    }

    .left{position:relative;
  			animation:animateleft 1s;
  			opacity:1;}

  	@keyframes animateleft{
  		from{left:0px;opacity:0}
  		to{left:300px;opacity:1}}



  	.right
  	{position:relative;
  		animation:animateright 1s;
  		opacity:1;}

  	@keyframes animateright
  		{from{right:-300px;opacity:0}
  		to{right:0;opacity:1}}


      	.fixed{	position:fixed;
                   bottom:500px;
      				width:200px;
      				margin-bottom:20px;
      				opacity:1;

      			}

      	.fixeda{	position:fixed;
                   bottom:450px;
      				width:200px;
      				margin-bottom:20px;
      				margin-right:-20px;
      				opacity:1;
      				float:right;

      			}

      	.fixedb{	position:fixed;
                   bottom:400px;
      				width:200px;
      				margin-bottom:20px;
      				margin-right:20px;
      				opacity:1;

      			}
      	.fixedc{	position:fixed;
                   bottom:350px;
      				width:200px;
      				margin-bottom:20px;
      				margin-right:20px;
      				opacity:1;

      			}
      	.fixedd{	position:fixed;
                   bottom:300px;
      				width:500px;
      				margin-bottom:20px;
      				margin-right:20px;
      				opacity:1;

      			}            #mySidenav a {position: fixed;  left: 95vw ;              transition: 0.3s;                padding: 15px;                width: 100px;                text-decoration: none;                font-size: 20px;                color: white;                float:right;                border-radius: 0 5px 5px 0;}
                          #mySidenav a:hover {left: 93vw  }

</style>
<body>
  <div class="w3-top" >

  <div class="w3-bar" id="myNavbar" >

   <a class="w3-bar-item w3-button border w3-margin-top  w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu"></a>
     <nav style="margin-top:-15px;">
<ul>
    <li class="logo w3-hide-small w3-hide-medium"  ><a href="#top"><img src="  logobms2.png" style=" margin-top:0.2vw;margin-left:2vw" class="w3-bar-item  w3-hide-small" width="60px" height="60px" style="opacity:2;z-index:2"><p class="logo-txt" style="font-family:brush script mt; margin-top:1.5vw;padding:-10px;"> Book My Seat</p></img></a></li>
    <li class="items  w3-hide-small w3-hide-medium">
      <form id="searchform" method="get" action="source.html">
        <input  id="searchbar"  style="opacity:1;" class="search" placeholder="Search...." type="text" />  <button  class="search-txt search" type="submit" style="opacity:1;vertical-align:middle"><span ><p class="search-txt"  style="font-size:10px;padding:5px "><i class="fa fa-search" style="font-size:18px;padding-bottom:5px"></i></p> </span> </button>
      </form>
    </li>

    <li class="items  w3-hide-small w3-hide-medium"><a href="#top"><i class="fa fa-home" style="letter-spacing:2px;"></i>HOME</a></a></li>
    <li class="items  w3-hide-small w3-hide-medium"><a href="#user"><i class="	fa fa-calendar" style="letter-spacing:2px;"></i>MOVIE</a></a></li>
    <li class="items  w3-hide-small w3-hide-medium"><a href="#work"><i class="fa fa-microphone" style="letter-spacing:2px;"></i>EVENTS</a></a></li>
    <li class="items  w3-hide-small w3-hide-medium" style="margin-right:-2vw"><a href="#work"><i class="fa fa-trophy" style="letter-spacing:2px;"></i>SPORTS</a></a></li>
    <li class="items-login  w3-hide-small w3-hide-medium" style="margin-right:-1vw;padding:0 0 0 0vw"><i class=" fa  fa-user" style="font-size:15px;"></i> ' .$_SESSION["email"] .'</li>
    <li class="items-login  w3-hide-small w3-hide-medium" style="margin-right:2vw;padding:0 0 0 0vw"><a href="logout.php"><button class="signin">Logout</button></a> </li>
    <li style="items" onclick="dark_mode()"> <i class="fa fa-adjust" style="margin-right:10px;margin-top:10px;letter-spacing:2px;font-size:25px;color:#f6f6f6"></i>

</ul>

</nav>

</div>
</div>

<script>
function dark_mode() {
  var foot = document.body;
  var image = document.getElementById("image");
   var element = document.getElementById("foot");
   var ele = document.getElementById("footer1");
   var ele1 = document.getElementById("footer");
   var ele2 = document.getElementById("footer2");
   var ele3 = document.getElementById("footer3");
   var ele4 = document.getElementById("footer4");
   var ele5 = document.getElementById("footer5");
   var ele6 = document.getElementById("footer6");
   var ele8 = document.getElementById("heading1");
   var ele9 = document.getElementById("end");
   var ele7 = document.getElementById("marq");



   foot.classList.toggle("light-mode");
   element.classList.toggle("box-rightdark");
   ele.classList.toggle("box-dark");
   ele1.classList.toggle("side-box-dark");
   ele2.classList.toggle("side-box-dark");
   ele3.classList.toggle("side-box-dark");
   ele4.classList.toggle("side-box-dark");
   ele5.classList.toggle("side-box-dark");
   ele6.classList.toggle("side-box-dark");
   ele8.classList.toggle("head-dark");
   ele9.classList.toggle("footer-box-dark");
   ele7.classList.toggle("mar-dark");

}

</script>

<div class="container" >

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>



  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="width:150%;margin-left:-12.5vw;height:100%" >

    <div class="item active" >
      <img class="mySlides car w3-animate-left" src="avn.jpg" style="width:120vw;height:34vw">

      <div class="carousel-caption" >

        <h3 class="w3-display-center " style="letter-spacing: 5px;font-size:30px;font-weight:bold;margin-bottom: 3vw;margin-left:-9vw;"> Hollywood Blockbusters <br />COMING SOON<br />Pre Book now </h3><br />
        <p class="w3-display-center" style="text-align:right;font-size:20px;margin-bottom:5vw;margin-right:30vw;letter-spacing:2px;">
          John Wick | FUN | 4:00 PM  <a href="jw.php"> <button type="submit" class="book" value="Book">Book</button></a><br />
          Looper  | INOX | 3:00 PM  <button type="submit"  class="book" value="Book">Book</button><br />
          Black Panther | PVR  | 2:00 PM  <button type="submit"  class="book" value="Book">Book</button><br />
          Avengers Infinity War | SRS | 3:30 PM  <button type="submit"  class="book" value="Book">Book</button><br />
        </p>

      </div>
    </div>

    <div class="item">
      <img class="mySlides car w3-animate-left" src="mar.jpg" style="width:100vw;height:34vw">
      <div class="carousel-caption" style="text-align:center;margin-right:0vw">

        <h1 class="w3-display-center " style="letter-spacing: 8px;font-size:50px;font-weight:bold;margin-bottom: 4vw;margin-left:-9vw;">Race For Cause</h1><br />
        <h3 class="w3-display-center " style="letter-spacing: 5px;font-size:20px;font-weight:light;margin-left:-9vw;margin-bottom: 2vw">29th March , 2020 </h3>
        <h3 class="w3-display-center " style="letter-spacing: 5px;font-size:20px;font-weight:light;margin-bottom: 0vw;margin-left:-9vw;">Sunday , 8:00AM </h3>
        <h3 class="w3-display-center " style="letter-spacing: 5px;font-size:20px;font-weight:light;margin-left:-9vw;margin-bottom: 3vw">Starting | Lohia Park , Gomti Nagar<br />Ending | Mantri Awas , Hazratganj</h3>



      </div>
    </div>

    <div class="item">
      <img class="mySlides car w3-animate-left" src="cm.jpg" style="width:100vw;height:34vw">
      <div class="carousel-caption">
        <h3 class="w3-display-center " style="letter-spacing: 5px;font-size:30px;font-weight:bold;margin-bottom: 3vw;margin-left:-9vw">Watch PayTM Trophy</h3><br />
        <p  style="font-size:20px;margin-bottom:3vw;margin-left:-10vw;letter-spacing:2px;">India <br />vs </br>England<br />Monday , 2:30 PM <br />Ekana Stadium , Lucknow<br /><br />
        <button type="submit"  class="book" value="Book" style="">Book</button>
        </p>

      </div>
    </div>

    <div class="item">
      <img class="mySlides car w3-animate-left" src="hin.jpg" style="width:100vw;height:34vw">
      <div class="carousel-caption">
        <h3 class="w3-display-center " style="letter-spacing: 5px;font-size:30px;font-weight:bold;margin-bottom: 5vw;margin-left:-9vw">Watch Bollywood blockbusters</h3><br />
        <p class="w3-display-center" style="text-align:right;font-size:20px;margin-bottom:5vw;margin-right:30vw;letter-spacing:2px;">
          Hera Pheri | 4:00 PM  <button type="submit" class="book" value="Book">Book</button><br />
          Phir Hera Pheri | 3:00 PM  <button type="submit"  class="book" value="Book">Book</button><br />
          Andaaz Apna Apna | 2:00 PM  <button type="submit"  class="book" value="Book">Book</button><br />
          Drishyam | 3:30 PM  <button type="submit"  class="book" value="Book">Book</button><br />
        </p>
      </div>
    </div>

    <div class="item">
      <img class="mySlides car w3-animate-left" src="show.jpg" style="width:100vw;height:34vw">
      <div class="carousel-caption">
        <h3 class="w3-display-center " style="letter-spacing: 5px;font-size:30px;font-weight:bold;margin-bottom: 5vw;margin-left:-9vw">Upcoming Events</h3><br />
        <p class="w3-display-center" style="text-align:right;font-size:20px;margin-bottom:5vw;margin-right:30vw;letter-spacing:2px;">
          Abhishek Upmanyu , SRM | 4:00 PM  <button type="submit" class="book" value="Book">Book</button><br />
          Mahabharat , Theatre Drama , SNKA | 3:00 PM  <button type="submit"  class="book" value="Book">Book</button><br />
          Food Festival , IGP | 2:00 PM  <button type="submit"  class="book" value="Book">Book</button><br />
        </p>
      </div>
    </div>

    <div class="item">
      <img class="mySlides car w3-animate-left" src="cms.jpg" style="width:100vw;height:34vw">
      <div class="carousel-caption">

        </p>
      </div>
    </div>


  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="margin-left:-13vw;height:34vw">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="right carousel-control" href="#myCarousel" data-slide="next"  style="margin-top:0vw;margin-right:-13vw;height:34vw">
    <span class="glyphicon glyphicon-chevron-right" ></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>

<div class="marquee" ><div class="track mar" id="marq" style=""<img src="hdfc 1.png" style="color:red;font-size:15px;margin-top:2vw;margin-left:10px;">Enjoy 20% discount on HDFC Bank Credit Card <img src="hdfc 1.png">Enjoy 20% discount on HDFC Bank Credit Card <img src="hdfc 1.png">Enjoy 20% discount on HDFC Bank Credit Card <img src="hdfc 1.png">Enjoy 20% discount on HDFC Bank Credit Card<img src="hdfc 1.png">Enjoy 20% discount on HDFC Bank Credit Card<img src="hdfc 1.png">Enjoy 20% discount on HDFC Bank Credit Card<img src="hdfc 1.png">Enjoy 20% discount on HDFC Bank Credit Card<img src="hdfc 1.png">Enjoy 20% discount on HDFC Bank Credit Card<img src="hdfc 1.png">Enjoy 20% discount on HDFC Bank Credit Card<img src="hdfc 1.png">Enjoy 20% discount on HDFC Bank Credit Card<img src="hdfc 1.png">Enjoy 20% discount on HDFC Bank Credit Card<img src="hdfc 1.png">Enjoy 20% discount on HDFC Bank Credit Card </div></div>

<div class="about" id="mySidenav" style="z-index:6;">
<div class="fixed w3-hide-small ">

<a href="https://www.facebook.com/webkitjockey-101988874891432" target="_blank"><img alt="design" src="fb.png" height="40px" width="40px" style="z-index:1;border-radius:5px" ></a>

</div>
<div class="fixeda w3-hide-small ">
<a href="https://www.instagram.com/?hl=en" target="_blank"><img  src="insta2.jpg" alt="design" width="40px" height="40px" style="border-radius:10px"></a>
</div>
<div class="fixedb w3-hide-small ">
 <a href="https://twitter.com/Divyans84773603" target="_blank"><img  src="tweet.png" alt="design" width="40px" height="40px" style="border-radius:10px"></a>
</div>
<div class="fixedc w3-hide-small ">
  <a href="snapcodeBitmoji.svg" target="blank"><img  src="snapchat.png" width="40px" alt="design" height="40px" style="border-radius:10px"></a>





</div>
</div>
<script>

$(document).ready(function() {
  $(window).scroll(function() {
  if ($(document).scrollTop() > 300) {
    $(".about").addClass("left");
  }else {
    $(".about").removeClass("left");
  }
  });
});
</script>

<div class="box " id="footer1" style="">
<img class="box-img" id="image" src="logobms2.png" style=""/>
  <ul class=" w3-display box-left" style="text-align:center">
  <h3 class="head" id="heading1"  style="">
  Pick Your Catogary
  </h3>
  <ul id="list" class=" w3-display box-left" style="text-align:center">
    <li  class="side-box" style="20vw" id="footer">
      Movies
    </li>
    <li class="side-box" id="footer2">
      Events
    </li>
    <li class="side-box" id="footer3">
      Sports
    </li>
    <li class="side-box" id="footer4">
      Stand Up
    </li>
    <li class="side-box" id="footer5">
      Festivals
    </li>
    <li class="side-box" id="footer6">
      Theatre
    </li>

  </ul>

</div>

</div>


<div class="box-ad2" style="padding:10px;margin-top:43vw;">
  <h6>@ Ad by Google</h6>

</div>


<div class="box-right" id="foot">
  <ul class=" w3-display" style="text-align:left;font-size:15px;padding-left:10px;">

    <li class=""  style="list-style-type:none;margin-bottom:20px;">
      <h3 style="font-weight:bold;text-align:center">Guidlines In Cinema Hall</h3>
      <h6 style="text-align:center">(To be followed )</h6>
    </li>


    <li  class="right-list" style="margin-bottom:10px">
      Physical distance of at least 6 feet has to be maintained outside common and waiting areas.
    </li>
    <li class=""   style="margin-bottom:10px">
      You will have to use face covers or masks at all times.
    </li>

    <li class=""  style="margin-bottom:10px">
      Tissue paper or handkerchief or elbow will definitely be used while coughing.
    </li>

    <li class=""  style="margin-bottom:10px">
      Spitting in a public place will be prohibited.
    </li>

    <li class=""  style="margin-bottom:10px">
      People have been advised to use the Aarogya Setu App.
    </li>

  </ul>

</div>

<div class="gallery " style="cursor:pointer;margin:0 0 0 21vw" >
 <img class="gallery-cell2 "  style="width:8vw;height:5vw" src="fun.png" /></a>
 <img class="gallery-cell2 " style="width:10vw;margin-left:0vw" src="cin.png"/></a>
 <img class="gallery-cell2 "  style="width:6vw" src="pvr.jpg"/></a>
  <img class="gallery-cell2 " style="width:10vw;height:4vw"  src="inox.png"/>
  <img class="gallery-cell2 " src="srs.png" style="width:10vw;height:9vw"/>


</div>

<img class="w3-image w3-display-middle" src="cms.jpg" style="position:relative;float:center;z-index:-1;margin-top:15vw;margin-bottom:-15vw"  />


<div class="box-ad" style="width:margin-left:23.5vw;padding-bottom:90px;background:transparent;height:inherit;box-shadow:1px 1px 3px 3px rgba(0,0,0,0.0)">


<h1 style="font-weight:1000;margin-left:2vw;margin-top:6vw;padding:10px;letter-spacing:3px;color:#444444">Latest Hollywood</h3>

<div class="gallery js-flickity " style="cursor:pointer;margin:0 0px 0 vw" >

<div class="cont">
 <a href="wolve.php">
 <img class="gallery-cell shadowimg"  style="cursor:pointer;width:18vw;margin-left:-25vw" src="loop.jpg" />
 <div class="overlay" style="cursor:pointer;width:18vw;margin-left:-25vw;text-align:center;font-size:10px;">
<h3 style="color:#fff;font-weight:bolder;">
LOOPER</h3></a><br />
<h6 style="margin-top:-18px">
<p class="fa fa-star checked"></p>
<p class="fa fa-star checked"></p>
<p class="fa fa-star checked"></p>
<p class="fa fa-star"></p>
<p class="fa fa-star"></p>
</h6>

<h6 style="letter-spacing:0px;font-size:10px;color:#fff;text-decoration:none;text-align:left;padding-left:10px">
Looper is a 2012 American science fiction action-thriller film written and directed by Rian Johnson, and produced by Ram Bergman and James D. Stern.<br /><br />
Produced by: Ram Bergman; ‎James D. Stern‎<br />
Cast: Bruce Willis<br />
Written by: Rian Johnson<br />
Cinematography: Steve Yedlin<br />
</h6>
 </div>
 </div>

<div class="cont">
  <a href="once.php">
  <img class="gallery-cell shadowimg" style="width:18vw;margin-left:-4vw" src="ooh.jpg"/>

  <div class="overlay" style="cursor:pointer;width:18vw;text-align:center;font-size:0px;letter-spacing:2px;font-weight:bolder;margin-left:-4vw">
  <h4 style="color:#fff;font-weight:bolder;">
  Once Upon A Time In Hollywood</h4></a><br />
  <h6 style="margin-top:-5px">
  <p class="fa fa-star checked"></p>
  <p class="fa fa-star checked"></p>
  <p class="fa fa-star checked"></p>
  <p class="fa fa-star checked"></p>
  <p class="fa fa-star"></p>
  </h6>

  <h6 style="letter-spacing:0px;color:#fff;text-decoration:none;text-align:left;padding-left:10px">
    Once Upon A Time In Hollywood is a 2012 American science fiction action-thriller film written <br />
  Produced by: Ram Bergman; ‎James D. Stern‎<br />
  Cast: Bruce Willis<br />
  Written by: Rian Johnson<br />
  Cinematography: Steve Yedlin<br />
  </h6>
  </div>
  </div>

  <div class="cont">
  <a href="wolverine.php">
  <img class="gallery-cell shadowimg"  style="width:18vw;margin-left:-2vw" src="wolve.jpg"/>
  <div class="overlay" style="cursor:pointer;width:18vw;margin-left:0vw;text-align:center;font-size:0px;letter-spacing:2px;font-weight:bolder;margin-left:-2vw">
  <h3 style="color:#fff;font-weight:bolder;">
  Wolverine</h3></a><br />
  <h4 style="">
  <p class="fa fa-star checked"></p>
  <p class="fa fa-star checked"></p>
  <p class="fa fa-star checked"></p>
  <p class="fa fa-star checked"></p>
  <p class="fa fa-star"></p>
  </h4>

  <h6 style="letter-spacing:0px;color:#fff;text-decoration:none;text-align:left;padding-left:10px">
  Wolverine is a 2012 American science fiction action-thriller film written and directed by Rian Johnson, and produced by Ram Bergman and James D. Stern.<br /><br />
  Produced by: Ram Bergman; ‎James D. Stern‎<br />
  Cast: Hugh Jackman<br />
  Written by: Rian Johnson<br />
  Cinematography: Steve Yedlin<br />
  </h6>
  </div>
  </div>

  <div class="cont">
  <img class="gallery-cell shadowimg" style="width:18vw ;margin-left:-2vw" src="fis.jpg"/>
  <div class="overlay" style="cursor:pointer;width:18vw;margin-left:0vw;text-align:center;font-size:0px;letter-spacing:2px;font-weight:bolder;margin-left:-2vw">
  <h3 style="color:#fff;font-weight:bolder;">
  The Falult In Stars</h3><br />
  <h4 style="">
  <p class="fa fa-star checked"></p>
  <p class="fa fa-star checked"></p>
  <p class="fa fa-star checked"></p>
  <p class="fa fa-star checked"></p>
  <p class="fa fa-star"></p>
  </h4>

  <h6 style="letter-spacing:0px;color:#fff;text-decoration:none;text-align:left;padding-left:10px">
  The Falult In Stars is a 2012 American science fiction action-thriller film written and directed by Rian Johnson, and produced by Ram Bergman and James D. Stern.<br /><br />
  Produced by: Ram Bergman; ‎James D. Stern‎<br />
  Cast: Hugh Jackman<br />
  Written by: Rian Johnson<br />
  Cinematography: Steve Yedlin<br />
  </h6>
  </div>
  </div>

  <img class="gallery-cell shadowimg" style="width:18vw ;" src="jum.jpg"/>
  <img class="gallery-cell shadowimg" style="width:18vw ;"  src="bb.jpg"/>
  <a href="jw.php"> <img class="gallery-cell shadowimg" style="width:18vw" src="jw.jpg"/></a>
  <img class="gallery-cell shadowimg" style="width:18vw ;"  src="tdk.jpg"/>
  <img class="gallery-cell shadowimg" style="width:18vw ;"  src="1917.jpeg"/>

</div>



<h1 style="font-weight:1000;margin-left:3vw;margin-top:3vw;letter-spacing:3px;color:#444444">Latest Bollywood</h3>

<div class="gallery js-flickity" style="cursor:pointer;margin:0vw 0vw 0vw 0vw;" >
 <a href="wolve.php"> <img class="gallery-cell shadowimg" style="margin-left:-25vw;width:18vw;" src="sr.jpg" /></a>
  <img class="gallery-cell shadowimg" src="bmb.jpg" style="margin-left:-4vw;width:18vw;"/>
  <img class="gallery-cell shadowimg" src="pad.jpg" style="margin-left:-2vw;width:18vw;"/>
  <img class="gallery-cell shadowimg" src="br.jpg" style="margin-left:-2vw;width:18vw;"/>
  <img class="gallery-cell shadowimg" src="tan.jpg" style="margin-left:-2vw;width:18vw;"/>
  <img class="gallery-cell shadowimg" src="lag.jpg" />
  <img class="gallery-cell shadowimg" src="3.jpg"/>
  <img class="gallery-cell shadowimg" src="raid.jpg"/>
  <img class="gallery-cell shadowimg" src="gow.jpg"/>


</div>
<div class="box " id="footer1" style="height:25vw">
<img class="box-img" id="image" src="logobms2.png" style="margin-top:100px"/>
  <ul class=" w3-display box-left" style="text-align:left">
  <h3 class="head" id="heading1"  style="text-align:center">
Follow Us On  </h3>
  <ul id="list" class=" w3-display box-left" style="text-align:left">
    <li  class="side" style="position:relative;padding:10px" id="footer">
      <img style="height:30px;width:30px;margin-right:10px" src="insta2.jpg"  />Instagram
    </li>
    <li  class="" style="position:relative;padding:10px" id="footer">
      <img style="height:30px;width:30px;margin-right:10px;" src="snapchat.png"   />Snapchat
    </li>
    <li  class="" style="position:relative;padding:10px" id="footer">
      <img style="height:30px;width:30px;margin-right:10px" src="fb.png"  />Facebook
    </li>
    <li  class="" style="position:relative;padding:10px" id="footer">
      <img style="height:30px;width:30px;margin-right:10px" src="mail.png"  />Gmail
    </li>
    <li  class="" style="position:relative;padding:10px" id="footer">
      <img style="height:30px;width:30px;margin-right:10px" src="tweet.png"  />Twitter
    </li>


  </ul>

</div>

</div>

<div class="" style="position:relative">

  <img class="box-ad bright" src="ive.png" style="">
  <p  class="w3-display-middle " style="margin-top:3vw;margin-left:10vw;text-align:center;color:#fff;font-size:50px;letter-spacing:2px;font-weight:bolder">India <br />vs </br>England<br />Monday , 2:30 PM <br />Ekana Stadium , Lucknow<br /><br />
  <button  type="submit"  class=" w3-display-middle  book" value="Book" style="font-size:15px;width:100px;height:50px;margin-top:10vw">Book</button>
  </p>
</div>
</div>


<div class="box-ad2" style="margin-top:5vw" >
<h6>@ Ad by Google</h6>

</div>
<div class="box-ad" style="width:margin-left:23.5vw;padding-bottom:90px;background:transparent;height:inherit;box-shadow:1px 1px 3px 3px rgba(0,0,0,0.0)">

<h1 style="font-weight:1000;margin-left:22vw;margin-top:3vw;letter-spacing:3px;color:#444444">Sports In Your City</h3>

<div class="gallery js-flickity"  style="cursor:pointer;margin:0 0px 0 0vw">
  <a href="wolve.php"> <img class="gallery-cell shadowimg" style="margin-left:-28vw;width:18vw;" src="ive.png" /></a>
  <img class="gallery-cell shadowimg" src="rn.jpg" style="margin-left:-7vw;width:18vw;" />
  <img class="gallery-cell shadowimg" src="nvi.jpg" style="margin-left:-2vw;width:18vw;"/>
  <img class="gallery-cell shadowimg" src="isl.jpg" style="margin-left:-2vw;width:18vw;"/>
  <img class="gallery-cell shadowimg" src="isl2.jpg"/>
  <img class="gallery-cell shadowimg" src="mara.jpg"/>
</div>


  <h1 style="font-weight:1000;margin-left:22vw;margin-top:3vw;letter-spacing:3px;color:#444444">Upcoming Events</h3>

  <div class="gallery js-flickity" style="cursor:pointer;margin:0 0px 0 0vw" >
    <a href="wolve.php"> <img class="gallery-cell shadowimg" style="margin-left:-28vw;width:18vw;" src="fest.jpg" /></a>
    <img class="gallery-cell shadowimg" src="fest2.jpg" style="margin-left:-7vw;width:18vw;"/>
    <img class="gallery-cell shadowimg" src="fests3.jpg" style="margin-left:-2vw;width:18vw;"/>
    <img class="gallery-cell shadowimg" src="abhi.jpg"/>
    <img class="gallery-cell shadowimg" src="zak.jpg"/>

</div>
</div>
</div>

<div class="pagination w3-display-bottom w3-display-center" style="margin-left:40vw;margin-top:10vw">
  <a href="#" class="active">Home</a>
  <a href="wolve.php">1</a>
  <a href="once.php" >2</a>
  <a href="wolverine.php">3</a>
  <a href="#">4</a>
  <a href="#" >5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>



  <footer class="w3-center  w3-display-container w3-padding-64  footer-box"  id="end"   style="" >
    <a href="#top " class="w3-button w3-light-grey w3-hide-small"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section" >
     <a href="https://www.facebook.com/webkitjockey-101988874891432" target="_blank"> <i class="fa fa-facebook-official w3-hover-opacity" style="color:#666"></i></a>
     <a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fa fa-instagram w3-hover-opacity" style="color:#666"></i></a>
     <a href="https://twitter.com/Divyans84773603" target="_blank"> <i class="fa fa-twitter w3-hover-opacity" style="color:#666"></i></a>
     <a href="https://www.linkedin.com/in/divyansh-singh-64550a190?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B6MwMS1B7QpO2KjGgJbPZAw%3D%3D" target="_blank"> <i class="fa fa-linkedin w3-hover-opacity" style="color:#666"></i></a>
     <a href="snapcodeBitmoji.svg" target="_blank"> <i class="fa fa-snapchat w3-hover-opacity" style="color:#666" ></i></a>
    </div>
  </footer>



<script>

document.getElementById("searchform").onsubmit = function() {
    window.location = "http://127.0.0.1/Book%20My%20Seat/wolve.php?q=site:wolve.php " + document.getElementById("searchbar").value;
    return false;
}


function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}



window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " lin" ;
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top lin", "");
    }
}




function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }

}

</script>






</body>
</html>
';
}
?>
