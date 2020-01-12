<!DOCTYPE HTML>
<html>
<head>
<title>Inregistare Elev</title></head>
<body background="picregistr.jpg" >
<form name="registration_form" action=""method="post">
<center><b><h1>Inregistrare Elev</h1></b></center>
<style> 
input[type=text] {
  width: 15%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
select{
  width: 15%;
  padding: 12px 20px;
  margin-top: -10px;
  margin-bottom: 5px;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}
input[type=password] {
  width: 15%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=password]:focus {
  border: 3px solid #555;
  }
  input[type=phone] {
  width: 15%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=phone]:focus {
  border: 3px solid #555;
  }
  .submit {
  background-color: #ff0000;
    display: inline-block;
  color: white;
  padding: 14px 20px;
  margin: 8px 20px;
  border: none;
  cursor: pointer;
  width: 15%;

}
</style>
<br><center>
<input type="text" name="nume_candidati"placeholder="Nume" required /><br><br>
<input  type="text" name="prenume_candidati" placeholder="Prenume" required /><br><br>
<input type="text" name="adresa_candidati" placeholder="Adresa"  required /><br><br>

<input type="phone" class="form-control rounded-right" placeholder="Telefon" name="telefon_candidati" pattern="[0-9]{10}" title="Doar cifre" maxlength="10" size="30" required=""><br><br>

<input type="text" name="email_candidati" placeholder="Email" required /><br><br>
<input    type="text" name="clasa_candidati" placeholder="Clasa" maxlength="2" required /><br><br>
<input   type="text" name="scoala_candidati" placeholder="Scoala" required/><br><br>
<input   type="text" name="judet_candidati"placeholder="Judet" required /><br><br>
<input  type="text" name="localitate_candidati" placeholder="Localitate" required /><br><br>
<input    type="text" name="user_candidati" placeholder="User" required /><br><br>
<input  type="password" name="parola_candidati" placeholder="Parola" required /><br><br>
<br>
<select name ="materia">
  <option value="Romana">Romana</option>
  <option value="Biologie">Biologie</option>
  <option value="Matematica">Matematica</option>
</select></br>
<br>
<input type="submit" class="submit" name="submit"  value="submit" onsubmit="return false">
</
</center>
<?php 
if ( isset( $_POST['submit'] ) ) { 
$nume_candidati=filter_input(INPUT_POST, 'nume_candidati');
$prenume_candidati=filter_input(INPUT_POST, 'prenume_candidati');
$adresa_candidati=filter_input(INPUT_POST, 'adresa_candidati');
$telefon_candidati=filter_input(INPUT_POST, 'telefon_candidati');
$email_candidati=filter_input(INPUT_POST, 'email_candidati');
$clasa_candidati=filter_input(INPUT_POST, 'clasa_candidati');
$scoala_candidati=filter_input(INPUT_POST, 'scoala_candidati');
$judet_candidati=filter_input(INPUT_POST, 'judet_candidati');
$localitate_candidati=filter_input(INPUT_POST, 'localitate_candidati');
$user_candidati=filter_input(INPUT_POST, 'user_candidati');
$parola_candidati=filter_input(INPUT_POST, 'parola_candidati');
$materia= $_POST['materia'];
$servername = "localhost";
$username = "admin";
$password = "admin123";
$myDB="7YNzXacPRV";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO candidati(nume_candidati ,prenume_candidati ,adresa_candidati ,telefon_candidati ,email_candidati ,clasa_candidati ,scoala_candidati ,judet_candidati ,localitate_candidati ,user_candidati, parola_candidati,materia)
    VALUES('$nume_candidati','$prenume_candidati','$adresa_candidati','$telefon_candidati','$email_candidati','$clasa_candidati','$scoala_candidati','$judet_candidati','$localitate_candidati','$user_candidati','$parola_candidati','$materia')";

   $query="INSERT INTO utilizator(user,pass,rol) VALUES('$user_candidati','$parola_candidati','elev')";
   $rez="INSERT INTO rezultate(nume_candidati,prenume_candidati,clasa_candidati,scoala_candidati,localitate_candidati,judet_candidati)VALUES('$nume_candidati','$prenume_candidati','$clasa_candidati','$scoala_candidati','$localitate_candidati','$judet_candidati')";

    // use exec() because no results are returned
    $conn->exec($sql);
    $conn->exec($query);
    $conn->exec($rez);
	$message = "Autentificare cu succes! Bun venit ".$user_candidati;
	echo "<script type='text/javascript'>alert('$message');</script>";
    header('refresh:1;url=index-elev.php');

   }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
}
?>

</body>
</html>