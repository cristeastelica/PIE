
<!DOCTYPE html>
<html>
<head>
<style>
.button3 {
  background-color: #ff7070; /* Green */
  border: none;
  color: white;
  padding: 14px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  padding: 0px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  color: black; 
  border: 2px solid #f44336;
  max-width: 250px;
  height: 50px;
}



.button3:hover {
  background-color: #f44336;
  color: white;
}


</style>
</head>
<body>

 
<div class="clearfix" id = "shet">
  <h2>Atentie! La apasarea butonului toate informatiile candidatilor vor fi sterese din baza de date si salvate in format pdf.</h2>
   <button class ="button3" onclick="window.location.href = 'arhiveazaan.php';">Arhiveaza an curent</button>

</div>
<?php

if ($handle = opendir('arhiva/')) {
    echo "<div class =\"clearfix\">";
    echo "<h1>Arhiva olimpiada:</h1>\n";


    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        if (strpos($entry, 'pdf') !== false) {
    echo "<br><button class =\"button3\" onclick=\"window.location.href = 'arhiva/$entry';\">$entry</button></br>";
    }
    }

        echo "</div>";
    closedir($handle);
}
?>



</body>
</html>
