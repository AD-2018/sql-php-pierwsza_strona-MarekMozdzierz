<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MarekMozdzierz
">github</a>
    <h1>👑Marek Moździerz nr.21</h1>
    
    <div class = "nav">
	    <li><a href="grid/index.php">Grid</a></li>
	    <br>
        <a href="index.php">Strona Główna</a> 
         <br>        
         <a href="/pracownicy/pracownicy.php">Pracownicy</a>
         <br>
         <a href="/pracownicy/pracownicy_organizacja.php">Pracownicy i Organizacja</a>   
         <br>
         <a href="/pracownicy/funkcje_agregujace.php">Funkcje Agregujace</a>  
         <br>
         <a href="/pracownicy/data_czas.php">Data i Czas</a>
         <br>
         <a href="/pracownicy/nieobecnosci.php">Nieobecności Pracowników</a>
         <br>
         <a href="/pracownicy/strona.php">Strona</a>
         <br>
         <a href="/pracownicy/DaneBaza.html">Dane Do Bazy</a>
         <br>
	 <a href="/pracownicy/insert.php">insert.php</a>
	    <br>
	    <a href="/biblioteka/biblioteka.php">biblioteka</a>
    </div>
<?php
$servername = "mysql-kcz.alwaysdata.net";
$username = "kcz";
$password = "zaq1@WSX";
$dbname = "kcz_20";

$conn = new mysqli($servername, $username, $password, $dbname);
    echo("<h3> PIERWOWZÓR </h3>");
$sql = "SELECT * FROM pracownicy";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>imie</th><th>zarobki</th><th>data_urodzenia</th><th>dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["imie"].'</td><td>'.$row["zarobki"].'</td><td>'.$row["data_urodzenia"].'</td><td>'.$row["dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');

    
     echo("<h3> ZAD 1 </h3>");
$sql = "SELECT * FROM pracownicy where dzial =2";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>imie</th><th>zarobki</th><th>data_urodzenia</th><th>dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["imie"].'</td><td>'.$row["zarobki"].'</td><td>'.$row["data_urodzenia"].'</td><td>'.$row["dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    
       echo("<h3> ZAD 2 </h3>");
$sql = "SELECT * FROM pracownicy where (dzial = 2 or dzial = 3)";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>imie</th><th>zarobki</th><th>data_urodzenia</th><th>dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["imie"].'</td><td>'.$row["zarobki"].'</td><td>'.$row["data_urodzenia"].'</td><td>'.$row["dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    
       echo("<h3> ZAD 3 </h3>");
$sql = "SELECT * FROM pracownicy where zarobki<30";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>imie</th><th>zarobki</th><th>data_urodzenia</th><th>dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["imie"].'</td><td>'.$row["zarobki"].'</td><td>'.$row["data_urodzenia"].'</td><td>'.$row["dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    ?>
    </body>
</html>
