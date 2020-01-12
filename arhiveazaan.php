 <!DOCTYPE html>
<html>
<head>

  <?php
header('refresh:1;url=index-comisie.php');
require_once("pdf-candidati-arhivare.php");
require_once("pdf-rezultate-arhivare.php");
?>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

</style>


</head>

<body>
<div class="containersterge">
<center>
 <h2>Procesul de arhivare este in curs de desfasurare</h2>
 <div class="loader"></div>
</div>
</center>
   <?php
    $servername = "localhost";
    $username = "admin";
    $password = "admin123";
    $myDB="7YNzXacPRV";
try {
     $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
     
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // use exec() because no results are returned
   
      $sql = "DELETE FROM candidati";
      $sql2 = "DELETE FROM rezultate";
      $sql3 = "DELETE FROM utilizator WHERE rol =\"elev\"";
      $conn->exec($sql);
     $conn->exec($sql2);
      $conn->exec($sql3);
echo "<script type='text/javascript'>alert('Arhivarea a avut loc cu succes!');</script>";
    }catch(PDOException $e)
    {
    echo "Arhivarea nu a avut loc!";
    $conn = null ;
    }

    ?>
</body>
</html>