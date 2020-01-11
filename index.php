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
.containerindex {
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
.topnav1 {
  overflow: hidden;
  background-color: #333;
  border: 1px solid #ddd;
}

.topnav1 a {
  float: left;
  color: #ddd;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav1 a:hover {
  background-color: #ddd;
  color: black;
  text-decoration: none;
}

.topnav1 a.active {
  background-color: #ddd;
  color: white;
}
</style>
</head>

</div>
<head>
 <div class="containerindex">

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




<center><div class="topnav1">

  <a class="nav"  id ="acasa" href="#acasa">Acasa</a>
  <a class="nav"  id ="subiecte" href="#subiecte">Subiecte</a>
  <a class ="nav" href="#contact" id="contact">Contact</a>
  <a class ="nav" href="#login" id="login">Login/Inregistrare</a>

</div></center>


<div id="acasadiv" class="content">
  <?php include('acasa.php') ?>

</div>

<div id="contactdiv" class="content">
  <?php include('contact.php') ?>

</div>

<center><div id="subiectediv" class="content">
  <?php include('home-subiecte.php') ?>

</div></center>

<center><div id="logindiv" class="content">
  <?php include('paginawelcome.html') ?>

</div></center>




</body>
</html>
