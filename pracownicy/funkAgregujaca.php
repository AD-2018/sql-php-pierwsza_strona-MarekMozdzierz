<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stylee.css">
</head>
<body>
    
    
 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
        <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-spruspatryk">GitHub</a>
<div class="nav">
    <a href="index.php">menu</a>
    <a href="pracownnicyiorganizacja.php">Organizacja Pracownicy</a>
    <a href="funkAgregujaca.php">Funkcje Agregujące</a>
    <a href="DataiCzas.php">Data i czas</a>
</div>
</body>
</html>
<?php
require_once("connect.php");

echo("<br>Zad. 1 <br>");
$sql = "SELECT sum(zarobki) as suma_zarobków FROM pracownicy, organizacja where id_org=dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>suma zarobków</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma_zarobków'].'</td>');
        echo('</tr>');
    }
   echo('</table>');

 //------------------------------------------------------------------------------------------------------------------------------------------------------------

echo("<br>Zad. 2 <br>");
$sql = "SELECT sum(zarobki) as suma_zarobków FROM pracownicy, organizacja where id_org=dzial and imie like '%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>suma zarobków</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma_zarobków'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

 //------------------------------------------------------------------------------------------------------------------------------------------------------------

echo("<br>Zad. 3<br>");
$sql = "SELECT sum(zarobki) as suma_zarobków FROM pracownicy, organizacja where id_org=dzial and (dzial=2 or dzial=3) and imie not like '%a'";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>suma zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma_zarobków'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

//------------------------------------------------------------------------------------------------------------------------------------------------------------


echo("<br>Zad. 4<br>");
$sql = "SELECT avg(zarobki) as średnia_zarobków FROM pracownicy, organizacja where id_org=dzial and imie not like '%a'";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>średnia zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['średnia_zarobków'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
//------------------------------------------------------------------------------------------------------------------------------------------------------------



echo("<br>Zad 5<br>");
$sql = "SELECT avg(zarobki) as średnia_zarobków FROM pracownicy, organizacja where id_org=dzial and dzial=4";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>średnia zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['średnia_zarobków'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

//------------------------------------------------------------------------------------------------------------------------------------------------------------


echo("<br>Zad. 6<br>");
$sql ="SELECT avg(zarobki) as średnia_zarobków from pracownicy where imie not like '%a' and (dzial=1 or dzial=2)"; 
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>średnia zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['średnia_zarobków'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

//------------------------------------------------------------------------------------------------------------------------------------------------------------


echo("<br>Zad. 7<br>");
$sql ="SELECT count(imie) as ilość_pracowników from pracownicy";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>ilość pracowników</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['ilość_pracowników'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

//------------------------------------------------------------------------------------------------------------------------------------------------------------


echo("<h2> Group by </h2>");

echo("<br>Zad. 9<br>");
$sql = "SELECT nazwa_dzial,sum(zarobki) as suma_zarobków FROM pracownicy, organizacja where id_org=dzial group by dzial";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Nazwa działu</th><th>suma zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td><td>'.$row['suma_zarobków'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

//------------------------------------------------------------------------------------------------------------------------------------------------------------

echo("<br>Zad. 10<br>");
$sql = "SELECT nazwa_dzial,count(imie) as ilość_pracowników FROM pracownicy, organizacja where id_org=dzial group by dzial";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Nazwa działu</th><th>ilość pracowników</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td><td>'.$row['ilość_pracowników'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

//------------------------------------------------------------------------------------------------------------------------------------------------------------


echo("<br>Zad. 11<br>");
$sql = "SELECT nazwa_dzial,avg(zarobki) as średnia_zarobków FROM pracownicy, organizacja where id_org=dzial group by dzial";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Nazwa działu</th><th>średnia zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td><td>'.$row['średnia_zarobków'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

//------------------------------------------------------------------------------------------------------------------------------------------------------------




echo("<br>Zad. 12<br>");
$sql = "SELECT if(imie like '%a', 'kobiety', 'mezczyzni') as 'plec', sum(zarobki) from pracownicy,organizacja where dzial=id_org group by plec";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>płeć</th><th>suma zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['plec'].'</td><td>'.$row['sum(zarobki)'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

//------------------------------------------------------------------------------------------------------------------------------------------------------------

echo("<br>Zad. 13<br>");
$sql = "SELECT if(imie like '%a', 'kobiety', 'mezczyzni') as 'plec', avg(zarobki) from pracownicy,organizacja where dzial=id_org group by plec";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>płeć</th><th>średnia zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['plec'].'</td><td>'.$row['avg(zarobki)'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

//------------------------------------------------------------------------------------------------------------------------------------------------------------


echo("<h2>Having</h2>");

echo("<br>Zad. 14<br>");
$sql = "SELECT nazwa_dzial,sum(zarobki) as suma_zarobków FROM pracownicy, organizacja where id_org=dzial group by dzial";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Nazwa działu</th><th>suma zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td><td>'.$row['suma_zarobków'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
//------------------------------------------------------------------------------------------------------------------------------------------------------------
echo("<br>Zad. 15</br>");
$sql ="SELECT nazwa_dzial, sum(zarobki) as suma_zarobków from pracownicy,organizacja where dzial=id_org group by nazwa_dzial having Sum(zarobki)<28"; 
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Suma Zarobkow mniejsza od 28</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['suma_zarobków)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 


//------------------------------------------------------------------------------------------------------------------------------------------------------------

echo("<br>Zad. 16</br>");
$sql ="SELECT nazwa_dzial, avg(zarobki) as średnia_zarobków from pracownicy,organizacja where dzial=id_org group by nazwa_dzial having avg(zarobki)>30"; 
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Średnia zarobków mężczyzn większa od 30</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['średnia_zarobków']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 


//------------------------------------------------------------------------------------------------------------------------------------------------------------

echo("<br>Zad. 17</br>");
$sql ="SELECT nazwa_dzial, count(imie) as ilość_pracowników from pracownicy,organizacja where dzial=id_org group by nazwa_dzial having count(imie)>3"; 
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Ilość pracowników w poszczególnych działach większa od 3 </th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['ilość_pracowników']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 


?>
