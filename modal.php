<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;

}
</style>

  
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#divreset").load("filtrarecandidati.php");
  });
});
</script>

<center>
	<br></br>
<button class="masterclass" onclick="window.open('editarecandidati.php').style.display='block'"  style="width:auto;">Editare candidati</button>
<button class="masterclass"onclick="window.open('adaugacandidati.php').style.display='block'" style="width:auto;">Adaugare candidati</button>
<button class="masterclass"onclick="window.open('stergecandidati.php').style.display='block'" style="width:auto;">Sterge candidati</button>
<button class="masterclass"onclick="window.open('chart-afisare-candidati.php').style.display='block'" style="width:auto;">Chart rezultate</button>
<button class="masterclass"onclick="window.open('pdf-candidati.php').style.display='block'" style="width:auto;">Export PDF</button>
<button class="masterclass"style.display='block' style="width:auto;">Reset Filter</button>
<div id="divreset"><h2></h2></div>
<br></br>
</center>


</body>
</html>