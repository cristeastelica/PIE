    <!DOCTYPE html>
    <html>
    <head>
     <title>Table with database</title>
     <style>
      body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
    display: inline-block;
  color: white;
  padding: 14px 20px;
  margin: 8px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  align-self: center;

}


button:hover {
  opacity: 0.8;
}

      .qtable {
         position: absolute;
       border-collapse: collapse;
        width: 900px;
       color: #588c7e;
       font-family: monospace;
       font-size: 25px;
       text-align: left;
       align-self: center;
         top: 80%;
        left: 35%;
       -ms-transform: translate(-50%, -50%);
     transform: translate(-50%, -50%);

         } 
      .qth {
       background-color: #588c7e;
       color: white;


        }
        .modal {
  display: none; /* Hidden by default */
  position: relative; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

      tr:nth-child(even) {background-color: #f2f2f2}
     </style>
    </head>
    <body>
      <div class="qtable">
     <table>
      <div class="qtr">
     <tr>
      <div class="qth">
        <th>Cod</th>
      <th>Nume</th> 
      <th>Prenume</th>
       <th>Clasa</th>
       <th>Scoala</th>
       <th>Localitate</th>
       <th>Judet</th>
       <th>Proba1</th>
     </div>
     </tr>
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
    }catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    $conn = null;
    }

  $sql = 'SELECT * FROM rezultate';


  $result = $conn->query($sql);
  if ($result->fetchColumn() > 0) {
   // output data of each row
   while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr><td>" . $row["cod"]. "</td><td>" . $row["nume_candidati"]. "</td><td>"
     .$row["prenume_candidati"]. "</td><td>". $row["clasa_candidati"] . "</td><td>".$row["scoala_candidati"]. "</td><td>".$row["localitate_candidati"]. "</td><td>". $row["judet_candidati"]. "</td><td>".$row["proba1"]."<td></tr>";
}
echo "</table></div>";
} else { echo "0 results"; }

  
    ?>
    </table>
<button  onclick="document.getElementById('id05').style.display='block'"  style="width:auto;">Adaugare rezultate</button>

<div id="id05" class="modal">
    <?php include('adaugarezultate.php') ?>
 
</div>
    </body>
    </html>