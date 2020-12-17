<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MarekMozdzierz">GitHub</a>
    <h1>👑Marek Moździerz nr.21</h1>
<div class="nav">
    <a href="index.php">menu</a>
    <a href="pracownnicyiorganizacja.php">Organizacja Pracownicy</a>
    <a href="funkAgregujaca.php">Funkcje Agregujące</a>
    <a href="DataiCzas.php">Data i czas</a>
    <a href="formularz.html">Formularz</a>
    <a href="DaneDoBazy.php">Dodawanie pracowników</a>
    <a href="ksiazki.php">książki</a>

</div>
</body>
</html>


<?php
require_once("connect.php");

echo("<br>Zad. 1 <br>");
$sql = "SELECT * from pracownicy where dzial=2";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dział</th><th>Imie</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['dzial'].'</td><td>'.$row['imie'].'</td>');
        echo('</tr>');
    }
   echo('</table>');


//---------


echo("<br>Zad. 2 <br>");
$sql = "SELECT * from pracownicy where (dzial=2 or dzial=3)";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dział</th><th>Imie</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['dzial'].'</td><td>'.$row['imie'].'</td>');
        echo('</tr>');
    }
   echo('</table>');

echo("<br>Zad. 3 <br>");
$sql = "SELECT * from pracownicy where zarobki<30";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dział</th><th>Imie</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['dzial'].'</td><td>'.$row['imie'].'</td>');
        echo('</tr>');
    }
   echo('</table>');
   ?>
