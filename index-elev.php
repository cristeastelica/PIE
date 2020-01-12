<!DOCTYPE html>
<html>
<head>
<script>
function FunctionAcasa() {
    $(".content3").hide();
    $("#acasadiv").show();
}
</script>

  
<?php
if(!isset($_COOKIE["TestCookie"])) {
       header('refresh:1;url=index.php');
} 
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  margin: 0;
  height :100%;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}
.containere {
  position: relative;
  text-align: center;
  font-size: 60px;
  background-image: url('header.jpg');
  width:100%;
  height: 140px;
  background-size: cover;
  color: white;
}

.centered {
  position: absolute;
  text-align: left;
   text-shadow: 2px 2px 12px #000000;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/* Page Content */
.content {padding:20px;}
h1 {
  text-align: center;
}
.topnav3 {
  overflow: hidden;
  background-color: #333;
  border: 1px solid #ddd;
}
button {
  background-color: #4CAF50;
  display: inline-block;
  color: white;
  padding: 14px 20px;
  margin: 25px 35px;
  border: none;
  cursor: pointer;
  width: 100%;

}
.logoutbtn {
  text-align: center;
  float: right;
  margin-top: 30px;
  margin-right: 20px;
  height: 40px !important;
  width: 70px !important;
  padding: 0px !important;
  font-size: 15px !important;
  background-color: #ff5050;
}


button:hover {
  opacity: 0.8;
}
.topnav3 a {
  float: left;
  color: #ddd;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav3 a:hover {
  background-color: #ddd;
  color: black;
  text-decoration: none;
}


.topnav3 a.active {
  background-color: #ddd;
  color: white;
}
</style>
</head>

</div>
<head>
 <div class="containere">

  <div class="centered">Olimpiada nationala</div>
      <button onclick="window.open('logout.php')" class ="logoutbtn"> Logout</button>
</div> 

<style>
.content3 { display:none }
</style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script><script>
$(function() {
  $(".nav").on("click",function(e) {
    e.preventDefault();
    $(".content3").hide();
    $("#"+this.id+"div").show();
  });
});
</script>
</head>
<body onload="FunctionAcasa()">




<div class="topnav3">

  <a class="nav"  id ="acasa" href="#acasa">Acasa</a>
  <a class="nav"  id ="subiecte" href="#subiecte">Subiecte</a>
  <a class="nav"  id ="faq" href="#faq">FAQ</a>
  <a class="nav" href="#afisare" id="afisare" >Afisare Candidati</a>
  <a class="nav" id="rezultate" href="#rezultate"> Afisare Rezultate</a>
  <a class ="nav" href="#contact" id="contact">Contact</a>

</div>


<div id="acasadiv" class="content3">
  <?php include('acasa.php') ?>

</div>


<div id="contactdiv" class="content3">
  <?php include('contact.php') ?>

</div>
<center>
<div id="afisarediv" class="content3">
  <?php include('afisarecandidati.php') ?>
</div>
</center>
<center>
<div id="rezultatediv" class="content3">
  <?php include('rezultatecandidati.php') ?>
</div>
</center>
<div id="faqdiv" class="content3">
  <?php include('faq.html') ?>

</div>
<div id="subiectediv" class="content3">
  <?php include('home-subiecte.php') ?>

</div>

<center><div id="logindiv" class="content3">
  <?php include('paginawelcome.html') ?>

</div></center>




</body>
</html>
