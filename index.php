<!DOCTYPE html>
<html>
<head>
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
.container {
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
.topnav {
  overflow: hidden;
  background-color: #333;
  border: 1px solid #ddd;
}

.topnav a {
  float: left;
  color: #ddd;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #ddd;
  color: white;
}
</style>
</head>

</div>
<head>
 <div class="container">

  <div class="centered">Olimpiada nationala</div>
</div> 

<style>
.content { display:none }
</style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script><script>
$(function() {
  $(".nav").on("click",function(e) {
    e.preventDefault();
    $(".content").hide();
    $("#"+this.id+"div").show();
  });
});
</script>
</head>
<body>




<div class="topnav">

  <a class="nav"  id ="acasa" href="#acasa">Acasa</a>
  <a class="nav" href="#operatii" id="operatii" >Operatii Candidati</a>
  <a class="nav" id="rezultate" href="#rezultate">Operatii Rezultate</a>
  <a class ="nav" href="#contact" id="contact">Contact</a>

</div>


<div id="acasadiv" class="content">
  <?php include('acasa.php') ?>

</div>

<div id="operatiidiv" class="content">
  <?php include('modal.php') ?>

</div>
<div id="rezultatediv" class="content">
  <?php include('modal-rezultate.php') ?>

</div>
<div id="contactdiv" class="content">
  <?php include('contact.php') ?>

</div>




</body>
</html>
