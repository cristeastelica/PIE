<!DOCTYPE html>
<html>
<head>
<title>Filtrare Candidati</title>
    <meta charset="utf-8"/>
    <title>Table Dropdown Filter</title>
    <link href="w3.css" rel="stylesheet"/>
    <style>
        .containernou{width:960px;margin: auto;}
        thead select{border: 1px solid #ffffff;width:100%;}
    </style>
</head>
<body >
<center>
<h3>Filtrare Candidati</h3>

    <div class="containernou">
        <table id="mytablee" class="w3-table-all">
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
                $stmt = $conn->prepare("select cod,nume_candidati,prenume_candidati,clasa_candidati,scoala_candidati,judet_candidati,localitate_candidati from candidati");
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
        $('#mytablee').ddTableFilter();
    </script>
    </center>
</body>
</html>