<!DOCTYPE html>
<html>
<head>
<title>Filtrare Rezultate</title>
    <meta charset="utf-8"/>
    <title>Table Dropdown Filter</title>
    <link href="w3.css" rel="stylesheet"/>
    <style>
        .containernou{width:1253px;margin:30px auto;}
        thead select{border: 1px solid #ffffff;width:100%;}
    </style>
</head>
<body background="img.jpg">
<center>
<h3>Reset Filter</h3>

    <div class="containernou">
        <table id="mytable" class="w3-table-all">
            <thead>
                <tr>
                    <th>Cod</th>
                    <th>Nume</th>
                    <th>Prenume</th>
                    <th>Clasa</th>
                    <th>Scoala</th>
                    <th>Judet</th>
                    <th>Localitate</th>
                  
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
				$username = "admin";
				$password = "admin123";
				$myDB="7YNzXacPRV";
              $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
                $stmt = $conn->prepare("select * from candidati");
                $stmt->execute();
                while($row = $stmt->fetch()){
                ?>
                <tr>
                    <td><?php echo $row['cod'] ?></td>
                    <td><?php echo $row['nume_candidati'] ?></td>
                    <td><?php echo $row['prenume_candidati'] ?></td>
                    <td><?php echo $row['clasa_candidati'] ?></td>
                    <td><?php echo $row['scoala_candidati'] ?></td>
                    <td><?php echo $row['judet_candidati'] ?></td>
                    <td><?php echo $row['localitate_candidati'] ?></td>
                  
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="jquery.min.js"></script>
    <script src="ddtf.js"></script>
    <script>
        $('#mytable').ddTableFilter();
    </script>
    </center>
</body>
</html>