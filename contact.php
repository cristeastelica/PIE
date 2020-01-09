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

/* Style the container/contact section */
.container1 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column1 {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row1:after {
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
$subiect=filter_input(INPUT_POST, 'subiect');
$nume=filter_input(INPUT_POST, 'nume');
$prenume=filter_input(INPUT_POST, 'prenume');
$telefon=filter_input(INPUT_POST, 'telefon');
$email=filter_input(INPUT_POST, 'email');
$mesaj=filter_input(INPUT_POST, 'mesaj');
 $servername = "localhost";
$username = "admin";
$password = "admin123";
$myDB="7YNzXacPRV";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO
   contact(subiect,nume,prenume,telefon,email,mesaj)
    VALUES ('$subiect','$nume','$prenume','$telefon','$email','$mesaj')";
     // use exec() because no results are returned
    $conn->exec($sql);
   
    echo ""; 
   }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

$_POST = array();

}
?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<div class="container1">
  <div style="text-align:center">
    <h2>Contacteaza-ne</h2>
    <p></p>
  </div>
  <div class="row1">
    <div class="column1">
      <img class="contact" src="contact.jpg" style="width:100%">
    </div>
    <div class="column1">
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
        <label for="nume">Nume</label>
        <input type="text" name="nume"   required="" placeholder="Numele tau...">
        <label for="prenume">Prenume</label>
        <input type="text" name="prenume"  required="" placeholder="Prenumele tau...">
        <label for="telefon">Telefon</label>
        <input type="text" name="telefon" pattern="[0-9]{10}" title="Doar cifre"  required=""placeholder="Numarul de telefon...">
        <label for="text">E-mail</label>
        <input type="text"  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required=""title="Introduceti o adresa de email valida" maxlength="45" size="30" placeholder="E-mail-ul tau...">
         <label for="subiect">Subiect</label>
        <input type="text" name="subiect"  required="" placeholder="Subiect...">
        <label for="subject">Mesaj</label>
        <textarea  name="subject"  required="" placeholder="Tasteaza aici.." style="height:170px"></textarea>

        <input type="submit" name="submit"  value="submit" onsubmit="return false">
      </form>
    </div>
  </div>
</div>


</body>
</html>