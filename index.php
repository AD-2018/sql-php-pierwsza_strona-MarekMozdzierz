<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<?php
$servername = "mysql-marek.alwaysdata.net";
$username = "marek";
$password = "riko2002";
$dbname = "marek";
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
$sql= "SELECT * FROM pracownicy";
echo("<h3>zadanie </h3>");
echo("<li>".$sql."<br><br>");
$result = mysqli_query($conn, $sql);
echo('<table border="1" class="tabelka_moja">');
while($row = mysqli_fetch_assoc($result) ) {
   echo('<tr>');
   echo("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");
   echo('</tr>');
}
echo('</table>');
?>
</html>
