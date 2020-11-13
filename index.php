<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MarekMozdzierz">Github</a>
    <a href="index.php">Pracownicy</a>
    <a href="Pracownicyorganizacja.php">Organizacja Pracownicy</a>
    <a href="funkcjeAgregujace.php">Funkcje Agregujace</a>
    <a href="DataiCzas.php">Data i Czas</a>
    

<?php
require_once("lib.php");
echo("<h1>Michael Musiol nr.8</h1>");

echo("<h3>Zad.1</h3>");
$sql = "SELECT * FROM pracownicy where dzial=2";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>id</th><th>imie</th><th>zarobki</th><th>dzial</th><th>data urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td><td>'.$row['data_urodzenia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

    echo("<br/><h3>Zad.2</h3><br/>");
    $sql = "SELECT * FROM pracownicy where dzial=2 or dzial=3";
    echo($sql);
    
    $result = mysqli_query($conn, $sql);
    if ( $result) {
            echo("<li>ok<br/>");
        } else {
          echo("Error: ".$sql."<br/>". mysqli_error($conn));
        }
    
    echo('<table border="1">');
        echo('<th>id</th><th>imie</th><th>zarobki</th><th>dzial</th><th>data urodzenia</th>');
    
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td><td>'.$row['data_urodzenia'].'</td>');
            echo('</tr>');
        }
    
        echo('</table>');


        echo("<br/><h3>Zad.3</h3><br/>");
        $sql = "SELECT * FROM pracownicy where zarobki<30";
        echo($sql);
        
        $result = mysqli_query($conn, $sql);
        if ( $result) {
                echo("<li>ok");
            } else {
              echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
            }
        
        echo('<table border="1">');
            echo('<th>id</th><th>imie</th><th>zarobki</th><th>dzial</th><th>data urodzenia</th>');
        
            while($row=mysqli_fetch_assoc($result)){
                echo('<tr>');
                echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td><td>'.$row['data_urodzenia'].'</td>');
                echo('</tr>');
            }
        
            echo('</table>');
        ?>

</body>
</html>
