 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 15px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container3{
   margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>


</head>



<body>

  <?php
if ( isset( $_POST['Modifica'] ) ) { 
    $servername = "localhost";
    $username = "admin";
    $password = "admin123";
    $myDB="7YNzXacPRV";
try {
     $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // use exec() because no results are returned
      
    }catch(PDOException $e)
    {
        
    $conn = null ;
    }

$cod=filter_input(INPUT_POST, 'cod');
$nume_candidati=filter_input(INPUT_POST, 'nume_candidati');
$prenume_candidati=filter_input(INPUT_POST, 'prenume_candidati');
$clasa_candidati=filter_input(INPUT_POST, 'clasa_candidati');
$scoala_candidati=filter_input(INPUT_POST, 'scoala_candidati');
$judet_candidati=filter_input(INPUT_POST, 'judet_candidati');
$localitate_candidati=filter_input(INPUT_POST, 'localitate_candidati');
$proba1=filter_input(INPUT_POST, 'proba1');
$proba2=filter_input(INPUT_POST, 'proba2');
$proba3=filter_input(INPUT_POST, 'proba3');
  $sql = "UPDATE rezultate SET nume_candidati='$nume_candidati',prenume_candidati='$prenume_candidati',clasa_candidati='$clasa_candidati' , scoala_candidati='$scoala_candidati',judet_candidati='$judet_candidati',localitate_candidati='$localitate_candidati',proba1='$proba1' ,proba2='$proba2' ,proba3='$proba3' where cod=$cod ";
  
$conn->exec($sql);
header('refresh:1;url=editarerezultate.php');
}
$_POST = array();
  
?>



<?php
$cod=filter_input(INPUT_POST, 'cod');
$nume_candidati=filter_input(INPUT_POST, 'nume_candidati');
$prenume_candidati=filter_input(INPUT_POST, 'prenume_candidati');
$clasa_candidati=filter_input(INPUT_POST, 'clasa_candidati');
$scoala_candidati=filter_input(INPUT_POST, 'scoala_candidati');
$judet_candidati=filter_input(INPUT_POST, 'judet_candidati');
$localitate_candidati=filter_input(INPUT_POST, 'localitate_candidati');
$proba1=filter_input(INPUT_POST, 'proba1');
$proba2=filter_input(INPUT_POST, 'proba2');
$proba3=filter_input(INPUT_POST, 'proba3');
    $servername = "localhost";
    $username = "admin";
    $password = "admin123";
    $myDB="7YNzXacPRV";
try {
     $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // use exec() because no results are returned
   $sql = "SELECT * FROM rezultate";
$conn->query($sql);
    }catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    $conn = null;
    }
    if($conn->query($sql)==TRUE){
      
    
    }else{echo "nu s-a sters".$conn->error;}
    
?>



<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<div class="container3">
  <div style="text-align:center">
    <h2>Modifica candidati</h2>
    <p></p>
  </div>
  <div class="row">
    <div class="column">
   
    </div>
    <div class="column">
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
       <table>
<tr>
    <th>Cod</th>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Clasa</th>
    <th>Scoala</th>
    <th>Judet</th>
    <th>Localitate</th>
    <th>Proba1</th>
    <th>Proba2</th>
    <th>Proba3</th>
    <th>Modifica</th>
  <?php

    foreach($conn->query($sql) as $row){
      echo"<tr>";
          echo '<form action="" method = "POST">';
            echo "<td><input type=text name=cod value='".$row['cod']."'s</td>";
                echo "<td><input type=text name=nume_candidati value=' ".$row['nume_candidati']."'></td>";
                  echo "<td><input type=text name=prenume_candidati value=' ".$row['prenume_candidati']."'></td>";
                    echo "<td><input type=text name=clasa_candidati value=' ".$row['clasa_candidati']." '></td>";
                      echo "<td><input type=text name=scoala_candidati value=  ' ".$row['scoala_candidati']."'></td>";
                        echo "<td><input type=text name=judet_candidati value=' ".$row['judet_candidati']." '></td>";
                          echo "<td><input type=text name=localitate_candidati value= ' ".$row['localitate_candidati']."'></td>";
                          echo "<td><input type=text name=proba1 value= ' ".$row['proba1']."'></td>";
                          echo "<td><input type=text name=proba2 value= ' ".$row['proba2']."'></td>";
                          echo "<td><input type=text name=proba3 value= ' ".$row['proba3']."'></td>";
                              echo "<td><input type=submit name='Modifica' value='Modifica'>";
                                  echo "</form>";
                                        echo "</tr>";

}

  ?>
</table>
      </form>
    </div>
  </div>
</div>



</body>
</html>