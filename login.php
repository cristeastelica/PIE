<html>
<head>
	<br><br><br>
<title>Login Page</title></head>
<body>
	<center><b><h1>Login Page</h1></b></center>
	<center><img src="login.jpg"  width="300" height="200"  ></center>
<br><br>
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
<form name="login_form" action="" method="post">
<center>

<input  type="text" name="user" value="" required /><br><br>
<input type="password" name="pass" value="" required /><br><br>
<input type="submit" name="submit"  value="Login" class="submit" onsubmit="return false"><br>
<span class="unlock_acc">Nu ai cont?</span><a href="meniuinregistrare.html">Creeaza un cont aici</a>

  </center>        

<?php 

if ( isset( $_POST['submit'] ) ) { 

$user=filter_input(INPUT_POST, 'user');
$pass=filter_input(INPUT_POST, 'pass');

$rol=filter_input(INPUT_POST, 'rol');
 $servername = "localhost";
$username = "admin";
$password = "admin123";
$myDB="7YNzXacPRV";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "select rol from utilizator where user='$user' and pass='$pass'";

   foreach($conn->query($sql) as $row){
    if($row['rol']=='comisie'){
 
$message = "Autentificare cu succes! Bun venit ".$user;
echo "<script type='text/javascript'>alert('$message');</script>";

      setcookie("TestCookie", $user);
      setcookie("TestCookie", $user, time()+3600);  /* expire in 1 hour */
      setcookie("TestCookie", $user, time()+3600, "/", "localhost", 1);
     header('refresh:1;url=index-comisie.php');
 }else{
 	$message = "Autentificare cu succes! Bun venit ".$user;
echo "<script type='text/javascript'>alert('$message');</script>";
      setcookie("TestCookie", $user);
      setcookie("TestCookie", $user, time()+3600);  /* expire in 1 hour */
      setcookie("TestCookie", $user, time()+3600, "/", "localhost", 1);
      header('refresh:1;url=index-elev.php');
 }
   }
   }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
}
?>

</form>
</body>
</html>