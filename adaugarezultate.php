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
  padding: 12px 20px;
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
}

button:hover{
  background-color: #45a049;
}

/* Style the container/contact section */
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

<?php 
if ( isset( $_POST['submit'] ) ) { 
$nume_candidati=filter_input(INPUT_POST, 'nume_candidati');
$prenume_candidati=filter_input(INPUT_POST, 'prenume_candidati');
$clasa_candidati=filter_input(INPUT_POST, 'clasa_candidati');
$scoala_candidati=filter_input(INPUT_POST, 'scoala_candidati');
$localitate_candidati=filter_input(INPUT_POST, 'localitate_candidati');
$judet_candidati=filter_input(INPUT_POST, 'judet_candidati');
$proba1_candidati=filter_input(INPUT_POST, 'proba1');
$proba2_candidati=filter_input(INPUT_POST, 'proba2');
$proba3_candidati=filter_input(INPUT_POST, 'proba3');

 $servername = "localhost";
$username = "admin";
$password = "admin123";
$myDB="7YNzXacPRV";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO
   rezultate(nume_candidati,prenume_candidati,clasa_candidati,scoala_candidati,localitate_candidati,judet_candidati,proba1,proba2,proba3)
    VALUES ('$nume_candidati','$prenume_candidati,'$clasa_candidati','$scoala_candidati','$localitate_candidati','$judet_candidati','$proba1','$proba2','$proba3')";
     // use exec() because no results are returned
    $conn->exec($sql);
   
    echo ""; 
   }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

$_POST = array(); }


?>


<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<div class="container1">
  <div style="text-align:center">
    <h2>Adauga rezultate</h2>
    <p></p>
  </div>
  <div class="row">
    <div class="column">
   
    </div>
    <div class="column">
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
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
        <label for="user">Proba 1</label>
        <input type="text" name="proba1"  required="" placeholder="Proba 1 candiat...">
       <label for="user">Proba 2</label>
        <input type="text" name="proba2"  required="" placeholder="Proba 2 candiat...">
          <label for="user">Proba 3</label>
        <input type="text" name="proba3"  required="" placeholder="Proba 3 candiat...">
        <input type="submit" name="submit"  value="submit" onsubmit="return false">
      </form>
    </div>
  </div>

<center>
    <button type="button" onclick="window.open('', '_self', ''); window.close();">Inapoi</button>
  </center>
</div>


</body>
</html>