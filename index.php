<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php

$sql= "SELECT * FROM pracownicy";
echo("<h1>zadanie 1</h1>");
echo("<li>".$sql."<br><br>");
$result = mysqli_query($conn, $sql);
echo('<table border="1" class="tabelkamoja">');
while($row = mysqli_fetch_assoc($result) ) {
   echo('<tr>');
   echo("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");
   echo('</tr>');
}
echo('</table>');
  
?>
