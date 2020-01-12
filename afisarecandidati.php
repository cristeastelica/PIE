<html>
<body>
	<style>
		table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.smr{
margin-top: 40px !important;
height: 30px;
width: 70% !important;

}

body {font-family: Arial;
height :100%;
margin: 0;}

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
</style>
<br>
<h2>Filtrare candidati</h2></br>
<input type="text" id="myInput" class ="smr" onkeyup="myFunction()" placeholder="Cauta dupa nume" title="Type in a name">
<table id="myTable"> 
  <tr>
    <th>Cod</th>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Clasa</th>
    <th>Scoala</th>
    <th>Judet</th>
    <th>Localitate</th>
   
      </tr>
  <?php
  $nume_candidati=filter_input(INPUT_POST, 'nume_candidati');
$prenume_candidati=filter_input(INPUT_POST, 'prenume_candidati');
$adresa_candidati=filter_input(INPUT_POST, 'adresa_candidati');
$telefon_candidati=filter_input(INPUT_POST, 'telefon_candidati');
$email_candidati=filter_input(INPUT_POST, 'email_candidati');
$clasa_candidati=filter_input(INPUT_POST, 'clasa_candidati');
$scoala_candidati=filter_input(INPUT_POST, 'scoala_candidati');
$judet_candidati=filter_input(INPUT_POST, 'judet_candidati');
$localitate_candidati=filter_input(INPUT_POST, 'localitate_candidati');

$servername = "localhost";
				$username = "admin";
				$password = "admin123";
				$myDB="7YNzXacPRV";
              $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
                $sql="select * from candidati";
               
    foreach($conn->query($sql) as $row){
    	echo"<tr>";
    	echo "<td>".$row['cod']."</td>";
    		echo "<td>".$row['nume_candidati']."</td>";
    			echo "<td>".$row['prenume_candidati']."</td>";
    				echo "<td>".$row['clasa_candidati']."</td>";
    					echo "<td>".$row['scoala_candidati']."</td>";
    						echo "<td>".$row['judet_candidati']."</td>";
    							echo "<td>".$row['localitate_candidati']."</td>";
    						 
    						echo "</tr>";

}

  ?>
</table>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>

</body>
</html>