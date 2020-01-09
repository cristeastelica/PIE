<!DOCTYPE HTML>
<html>
<head>
<title>Inregistare Comisie</title></head>
<body>
<form name="registration_form" action=""method="post">
<center><b><h1>Inregistrare Comisie</h1></b></center>
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
<input type="text" name="nume_comisie"placeholder="Nume" required /><br><br>
<input  type="text" name="prenume_comisie" placeholder="Prenume" required /><br><br>
<input type="text" name="email_comisie" placeholder="Email" required /><br><br>

<input type="phone" class="form-control rounded-right" placeholder="Telefon" name="telefon_comisie" pattern="[0-9]{10}" title="Doar cifre" maxlength="10" size="30" required=""><br><br>

<input    type="text" name="username_comisie" placeholder="User" required /><br><br>

<input  type="password" name="parola_comisie" placeholder="Parola" required /><br><br>
<input type="submit" class="submit" name="submit"  value="submit" onsubmit="return false">

</center>
<?php 
if ( isset( $_POST['submit'] ) ) { 
$nume_comisie=filter_input(INPUT_POST, 'nume_comisie');
$prenume_comisie=filter_input(INPUT_POST, 'prenume_comisie');
$telefon_comisie=filter_input(INPUT_POST, 'telefon_comisie');
$email_comisie=filter_input(INPUT_POST, 'email_comisie');
$username_comisie=filter_input(INPUT_POST, 'username_comisie');
$parola_comisie=filter_input(INPUT_POST, 'parola_comisie');
$rol_comisie=filter_input(INPUT_POST, 'rol_comisie');
 $servername = "localhost";
$username = "admin";
$password = "admin123";
$myDB="7YNzXacPRV";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO comisie(nume_comisie,prenume_comisie,email_comisie,telefon_comisie,username_comisie,parola_comisie,rol_comisie)
    VALUES ('$nume_comisie','$prenume_comisie','$telefon_comisie','$email_comisie','$username_comisie','$parola_comisie','comisie')";
    $query="INSERT INTO utilizator(user,pass,rol) VALUES('$username_comisie','$parola_comisie','comisie')";

    // use exec() because no results are returned
      $conn->exec($sql);
    $conn->exec($query);
$message = "Autentificare cu succes! Bun venit ".$username_comisie;
echo "<script type='text/javascript'>alert('$message');</script>";
    
     header('refresh:1;url=login.php');
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