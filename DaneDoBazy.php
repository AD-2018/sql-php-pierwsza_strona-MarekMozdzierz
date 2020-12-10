<!DOCTYPE html>
<html>
<head>
  <title>Dodaj pracownika</title>
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dane do Bazy</title>
</head>
<body>
<h1>Marek Moździerz nr.21</h1>
    <nav>
    <ul>
    <li><a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MarekMozdzierz">GitHub</a></li> 
    <li><a href="index.php">Strona Główna</a></li>
		<li><a href="pracownicy_organizacja.php">Pracownicy i Organizacja</a></li>
</ul>
</nav>
	                Dodawanie Pracownika<br>
	                <form action="insert.php" method="POST">
			Imię<br>
			<input type="text" name="imie"><br>
			Dział<br>
			<input type="number" name="dzial"></br>
			Zarobki<br>
			<input type="number" name="zarobki"></br>
			Data Urodzenia<br>
			<input type="date" name="data_urodzenia"></br>
			<input type="submit" value="Dodaj Pracownika"><br>
