<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}
.img2 {

  float: left;
  padding-right: 20px;
  padding-bottom: 2px;
}
.clearfix {
  border: 3px solid #4CAF50;
  padding: 5px;
  margin-top: 20px;

  }
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Caption text */
.text {

  text-shadow: 5px 4px 8px #000000;
  color: #f2f2f2;
  font-size: 35px;
  padding: 8px 12px;
  position: absolute;
  bottom: 32px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  position: relative;
  top: -50px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.img1 {
  width: 100%;
  height: 400px;
  object-fit: cover;
}
.active {
  background-color: #717171;
}


/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img class="img1" src="exam1.jpg" style="width:100%">
  <div class="text">Cum sa iei rezultate mai bune la examen</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img class="img1"  src="exam2.jpg" style="width:100%">
  <div class="text">100 Mc Donalds deschise pentru elevii ce doresc sa urmeze o cariera in marketing</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img class="img1"  src="exam3.jpg" style="width:100%">
  <div class="text">Afla noile metode de copiat</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<div class="clearfix">
  <h2>Olimpiada de Matematică 2019 se amână pentru 24 februarie. Care este programa olimpiadei pentru clasele V-XII</h2>
  <img class="img2" src="s1.jpg" alt="Pineapple" width="150" height="90">
Competiţia şcolară nu se va mai desfaşura pe 16 februarie, aşa cum fusese anunţat iniţial, deoarece s-ar suprapune cu etapa judeţeană a Olimpiadei de chimie. „Referitor la Olimpiada de matematică, etapa locală va avea loc în data de 24 februarie 2019, având în vedere faptul că, în data de 16 februarie 2019 se desfaşoară etapa judeţeană a Olimpiadei de Chimie” anunţă ISMB.
Pentru buna organizare şi desfăşurare a Etapei locale a Olimpiadei de matematică, ISMB face următoarele precizări: 1. Conform adresei ISMB cu nr. 1232/16.01.2019, data limită de trimitere a listelor nominale cu elevii calificati/ profesori asistenţi/ profesori evaluatori pentru etapa locală a Olimpiadei de Matematică, este 11.02.2019. Necomunicarea, de către unităţile şcolare a acestor liste, până cel târziu luni, 11.02.2019, va conduce la pierderea dreptului de participare a elevilor respectivei unităţi la etapa locală.


</div>
<div class="clearfix">
  <h2>Aur pentru matematicianul din Alexandria, Ştefan Spătaru Fostul elev al Şcolii ” Mihai Viteazul” a obţinut punctajul maxim la Balcaniada de matematică</h2>
  <img class="img2" src="s2.jpg" alt="Pineapple" width="150" height="90">
 Elevii români s-au întors acasă cu două medalii de aur, trei de argint şi una de bronz . Printre laureaţii cu aur se numără şi Ştefan Spătaru din Alexandria, fost elev al Şcolii gimnaziale ”Mihai Viteazul”. Tânărul care este elev acum la Liceul Internaţional de Matematică din Bucureşti a obţinut medalia de aur şi punctajul maxim. Aur a obţinut şi Ioan-Laurenţiu Ploscaru, de la Colegiul Naţional Lahovari, din Rămnicu Vâlcea .Medalii de argint au luat Paul Muscă, de la Liceul Internaţional de Informatică-Bucureşti, (provenit de la Colegiul Naţional Iaşi), Marius Bocanu, de la Liceul Internaţional de Informatică-Bucureşti, (provenit de la Scoala Generală Nr.1, Piteşti) şi Viorel Andrei Bud, de la Liceul Internaţional de Informatică-Bucureşti, (provenit de Liceul Teoretic Negreşti-Oaş.
</div>

</body>
</html> 
