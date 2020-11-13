<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MarekMozdzierz">Github</a>
    <a href="index.php">Pracownicy</a>
    <a href="pracownicyiorganizacja.php">Organizacja Pracownicy</a>
    <a href="funkaAgregujaca.php">Funkcje Agregujace</a>
    <a href="DataiCzas.php">Data i Czas</a>
    

<?php
require_once("connect.php");
echo("<h1>Marek Moździerz</h1>");

echo("<h3>Zad.1</h3>");
$sql = "select * ,year(curdate())-year(data_urodzenia) as wiek from pracownicy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>id</th><th>imie</th><th>wiek</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['wiek'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    

    echo("<h3>Zad.2</h3>");
$sql = "select * ,year(curdate())-year(data_urodzenia) as wiek,dzial,nazwa_dzial from pracownicy, organizacja where id_org=dzial and nazwa_dzial='serwis'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>id</th><th>imie</th><th>dzial</th><th>nazwa_dzial</th><th>wiek</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['dzial'].'</td><td>'.$row['nazwa_dzial'].'</td><td>'.$row['wiek'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
 echo("<h3>Zad.3</h3>");
$sql = "select sum(year(curdate()) - year(data_urodzenia)) as SumaLat from pracownicy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma lat</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['SumaLat'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
 echo("<h3>Zad.4</h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja WHERE id_org=dzial and nazwa_dzial='handel'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma lat</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['Suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
 echo("<h3>Zad.5</h3>");
$sql = "select sum(year(curdate()) - year(data_urodzenia)) as SumaLatKobiet from pracownicy where imie like '%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma lat kobiet</th><th>imie</th><th>zarobki</th><th>dzial</th><th>data urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['SumaLatKobiet'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
 echo("<h3>Zad.6</h3>");
$sql = "select sum(year(curdate()) - year(data_urodzenia)) as SumaLatMezczyzn from pracownicy where imie not like '%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma lat mezczyzn</th><th>imie</th><th>zarobki</th><th>dzial</th><th>data urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['SumaLatMezczyzn'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
 echo("<h3>Zad.7</h3>");
$sql = "select avg(year(curdate()) - year(data_urodzenia)) as SredniaWieku, nazwa_dzial from pracownicy,organizacja where id_org=dzial group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Srednia wieku</th><th>nazwa dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['SredniaWieku'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

    
 echo("<h3>Zad.8</h3>");
$sql = "select sum(year(curdate()) - year(data_urodzenia)) as SumaLat, nazwa_dzial from pracownicy,organizacja where id_org=dzial group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma Lat</th><th>nazwa dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['SumaLat'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
 echo("<h3>Zad.9</h3>");
$sql = "select sum(year(curdate()) - year(data_urodzenia)) as Sumalat, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma lat</th><th>nazwa dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['Sumalat'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
 echo("<h3>Zad.10</h3>");
$sql = "select sum(year(curdate()) - year(data_urodzenia)) as SumaLat, nazwa_dzial from pracownicy,organizacja where id_org=dzial group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma lat</th><th>nazwa dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['SumaLat'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
 echo("<h3>Zad.11</h3>");
$sql = "select sum(year(curdate()) - year(data_urodzenia)) as SumaWieku, nazwa_dzial from pracownicy,organizacja where id_org=dzial group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma wieku</th><th>nazwa dzial</th><th>zarobki</th><th>dzial</th><th>data urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['SumaWieku'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
  echo("<h3>Zad.12</h3>");
$sql = "select sum(year(curdate()) - year(data_urodzenia)) as SumaWieku, nazwa_dzial from pracownicy,organizacja where id_org=dzial GROUP BY dzial";
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
    
    
 echo("<h3>Zad.13</h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaWieku, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
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
    
    echo("<h2>Formatowanie dat</h2>");

    
 echo("<h3>Zad.1</h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaWieku, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
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
echo("<h3>Zad.2</h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaWieku, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
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
    
echo("<h3>Zad.3</h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaWieku, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
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
    
    
echo("<h3>Zad.4</h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaWieku, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
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
    
    
echo("<h3>Zad.5</h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaWieku, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
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
    
    
echo("<h3>Zad.6</h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaWieku, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
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
    
    
echo("<h3>Zad.7</h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaWieku, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
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
    
    
echo("<h3>Zad.8</h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaWieku, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
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
    
    
echo("<h3>Zad.9</h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaWieku, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
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
    
    
echo("<h3>Zad.10</h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaWieku, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial";
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
