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

input[type=textForUser], select, textarea {
  width: 70%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submitForUser] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 12px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

button{
  background-color: #4CAF50;
  color: white;
  padding: 12px 15px;
  border: none;
  cursor: pointer;
  float:right;
}

button:hover{
  background-color: #45a049;
}

/* Style the container/contact section asd*/

.container1 {
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



<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<div class="container1">
  <div style="text-align:center">
    <h2>Adauga Rezultate</h2>
    <p></p>
  </div>
  <div class="row">
    <div class="column">
   
    </div>
    <div class="column">
      <form action = "" method = "post">
        <label for="Username">Username</label><br>
        <input type="textForUser" name="user_candidati"   required="" placeholder="User candidat...">
        <input type="submitForUser" name="Check User"  value="Check User" onsubmit="return false">
        <label for="nume">Nume</label>
        <input type="text" name="nume_candidati"   required="" placeholder="Nume candidat...">
        <label for="prenume">Prenume</label>
        <input type="text" name="prenume_candidati"  required="" placeholder="Prenume candidat...">
        <label for="adresa">Adresa</label>
        <input type="text" name="adresa_candidati"  required="" placeholder="Adresa candidat...">
        <label for="telefon">Telefon</label>
        <input type="text" name="telefon_candidati" pattern="[0-9]{10}" title="Doar cifre"  required=""placeholder="Numarul de telefon...">
        <label for="text">E-mail</label>
        <input type="text"  name="email_candidati" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required=""title="Introduceti o adresa de email valida" maxlength="45" size="30" placeholder="E-mail-ul tau...">
         <label for="clasa">Clasa</label>
        <input type="text" name="clasa_candidati"  required="" placeholder="Clasa candidat...">
         <label for="scoala">Scoala</label>
        <input type="text" name="scoala_candidati"  required="" placeholder="Scoala candidat...">
        <label for="judet">Judet</label>
        <input type="text" name="judet_candidati"  required="" placeholder="Judet candidat...">
        <label for="localitate">Localitate</label>
        <input type="text" name="localitate_candidati"  required="" placeholder="Localitate candidat...">
       <label for="materia">Materia</label>
        <input type="text" name="materia"  required="" placeholder="Materia...">
        <label for="puncte">Puncte</label>
        <input type="text" name="puncte"  required="" placeholder="Puncte...">
        <label for="locul">Locul</label>
        <input type="text" name="locul"  required="" placeholder="Locul...">
     
        <input type="submit" name="Adauga"  value="Adauga" onsubmit="return false">
        <button type="button" onclick="window.open('', '_self', ''); window.close();">Inapoi</button>
      </form>
    </div>
  </div>
</div>

<?php

?>
<?php 
if ( isset( $_POST['Adauga'] ) ) { 
 $servername = "localhost";
$username = "admin";
$password = "admin123";
$myDB="7YNzXacPRV";
$nume_candidati=filter_input(INPUT_POST, 'nume_candidati');
$prenume_candidati=filter_input(INPUT_POST, 'prenume_candidati');
$adresa_candidati=filter_input(INPUT_POST, 'adresa_candidati');
$telefon_candidati=filter_input(INPUT_POST, 'telefon_candidati');
$email_candidati=filter_input(INPUT_POST, 'email_candidati');
$clasa_candidati=filter_input(INPUT_POST, 'clasa_candidati');
$scoala_candidati=filter_input(INPUT_POST, 'scoala_candidati');
$judet_candidati=filter_input(INPUT_POST, 'judet_candidati');
$localitate_candidati=filter_input(INPUT_POST, 'localitate_candidati');
$materia=filter_input(INPUT_POST, 'materia');
$puncte=filter_input(INPUT_POST, 'puncte');
$locul=filter_input(INPUT_POST, 'locul');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
   $rez="INSERT INTO rezultate(nume_candidati,prenume_candidati,clasa_candidati,scoala_candidati,localitate_candidati,judet_candidati,materia,puncte,locul)VALUES('$nume_candidati','$prenume_candidati','$clasa_candidati','$scoala_candidati','$localitate_candidati','$judet_candidati','$materia','$puncte','$locul')";

   $conn->query($rez);
 header('refresh:1;url=adaugarez.php');
    }catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
     echo $query . "<br>" . $e->getMessage();
   echo $rez . "<br>" . $e->getMessage();
    $conn = null;
    }}
?>


</body>
</html>