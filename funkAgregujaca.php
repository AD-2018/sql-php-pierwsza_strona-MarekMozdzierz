<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MarekMozdzierz">•Github</a>
    <a href="index.php">•Pracownicy</a>
    <a href="pracownnicyiorganizacja.php">•Organizacja Pracownicy</a>
    <a href="funkAgregujaca.php">•Funkcje Agregujace</a>
    
<?php
require_once("connect.php");
echo("<h1>👑Marek Moździerz nr.21</h1>");

echo("<h3>Zad.1</h3><br/>");
$sql = "SELECT sum(zarobki) as suma FROM pracownicy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma zarobkow</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
echo("<h3>Zad.2</h3><br/>");
$sql = "SELECT sum(zarobki) as suma FROM pracownicy where imie like'%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma zarobkow kobiet</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    

echo("<h3>Zad.3</h3><br/>");
$sql = "SELECT sum(zarobki) as suma FROM pracownicy where imie not like'%a' and (dzial=2 or dzial=3)";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma zarobkow mezczyzn</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
    
echo("<h3>Zad.4</h3><br/>");
$sql = "SELECT avg(zarobki) as srednia FROM pracownicy where imie not like'%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Srednia zarobkow mezczyzn</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['srednia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
    
echo("<h3>Zad.5</h3><br/>");
$sql = "SELECT avg(zarobki) as srednia FROM pracownicy where dzial=4";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Srednia zarobkow</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['srednia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
    
echo("<h3>Zad.6</h3><br/>");
$sql = "SELECT avg(zarobki) as srednia FROM pracownicy where imie not like '%a' and (dzial=1 or dzial=2)";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Srednia_zarobkow</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['srednia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<h3>Zad.7</h3><br/>");
$sql = "SELECT count(imie) as liczba FROM pracownicy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Ilosc_pracownikow</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['liczba'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
    
echo("<h3>Zad.8</h3><br/>");
$sql = "SELECT count(imie) as liczba FROM pracownicy where imie like'%a' and (dzial=1 or dzial=3)";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Ilosc_kobiet_w_dzialach_1_3</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['liczba'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo('<h2>Group by</h2>');
echo("<h3>Zad.1</h3><br/>");
    $sql = "SELECT sum(zarobki) as suma, dzial , nazwa_dzial FROM pracownicy,organizacja where dzial=id_org group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma_zarobkow</th><th>dzial</th><th>nazwa dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma'].'</td><td>'.$row['dzial'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
echo("<h3>Zad.2</h3><br/>");
    $sql = "select count(imie) as liczba, dzial , nazwa_dzial from pracownicy,organizacja where dzial=id_org group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma_pracownikow</th><th>dzial</th><th>nazwa dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['liczba'].'</td><td>'.$row['dzial'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
echo("<h3>Zad.3</h3><br/>");
    $sql = "SELECT avg(zarobki) as srednia, dzial , nazwa_dzial FROM pracownicy,organizacja where dzial=id_org group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Srednia_zarobkow</th><th>dzial</th><th>nazwa dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['srednia'].'</td><td>'.$row['dzial'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
echo("<h3>Zad.4</h3><br/>");
    $sql = "SELECT sum(zarobki) as SumaZarobki, if( (imie LIKE '%a'), 'Kobiety','Mężczyźni') as 'plec' from pracownicy group by plec";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma_zarobkow</th><th>plec</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['SumaZarobki'].'</td><td>'.$row['plec'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

    
echo("<h3>Zad.5</h3><br/>");
    $sql = "SELECT avg(zarobki) as SredniaZarobki, if( (imie LIKE '%a'), 'Kobiety','Mężczyźni') as 'plec' from pracownicy group by plec";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Srednia_zarobkow</th><th>plec</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['SredniaZarobki'].'</td><td>'.$row['plec'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<h2>klauzula having</h2><br/>");
       
echo("<h3>Zad.1</h3><br/>");
    $sql = "select sum(zarobki) as Suma_Zarobkow, dzial , nazwa_dzial from pracownicy, organizacja group by dzial having Suma_Zarobkow < 28 ";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma_Zarobkow</th><th>dzial</th><th>nazwa dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['Suma_Zarobkow'].'</td><td>'.$row['dzial'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
echo("<h3>Zad.2</h3><br/>");
    $sql = "select avg(zarobki) as srednia,dzial,nazwa_dzial from pracownicy, organizacja where imie not like '%a' group by dzial having srednia > 30 ";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Srednia_zarobkow</th><th>dzial</th><th>nazwa dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['srednia'].'</td><td>'.$row['dzial'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
echo("<h3>Zad.3</h3><br/>");
    $sql = "SELECT count(id_pracownicy) as ilosc,dzial,nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial having ilosc > 3 ";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Ilosc pracownikow</th><th>dzial</th><th>nazwa dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['ilosc'].'</td><td>'.$row['dzial'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>')
    
?>
</body>
</html>
