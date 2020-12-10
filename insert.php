<?php
echo("Witaj w insert.php");
echo "<li>".$_POST['imie'];
echo "<li>".$_POST['dzial'];
echo "<li>".$_POST['darobki'];
echo "<li>".$_POST['data_urodzenia'];

$servername = "mysql-kcz.alwaysdata.net";
$username = "kcz";
$password = "zaq1@WSX";
$dbname = "kcz_20";

$conn = new mysqli ($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null, '".$_POST['imie']."', '".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_urodzenia']."')";
echo("<br>");
if ($conn->query($sql) === TRUE) {
  header ('Location:https://https://app-marek.herokuapp.com/danedobazy.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
