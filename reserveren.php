<?php

include 'database.php';

$msg = '';
if(isset($_POST['submit'])){

    $fieldnames = ['username', 'adres', 'date', 'duur', 'keuze_verblijf', 'aantal_personen'];
    $error = false;

    foreach($fieldnames as $fieldname){
        if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
            $error = true; 
            $msg = 'error';
        }

    }

    if(!$error){
        $obj = new database();
        $obj->insertreservering($_POST['username'], $_POST['adres'], $_POST['date'], $_POST['duur'], $_POST['keuze_verblijf'], $_POST['aantal_personen']);
        //yurr
    }else{
        //do something
    }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reserveren</title>
    


    

<div class="topnav">
  <a href="index.php"><img src="afbeelding2.png" width="170" height="100"></a>
  <a href="activiteiten.php">ACTIVITEITEN</a>
  <a href="reserveren.php">RESERVEREN</a>
  <a href="admin.php">ADMIN</a>
</div>
<br>

    <style>
body {
  font-family: Arial;
}

input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #5d46e2;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #00008b;
}


</style>
<body>

<font size="15" color="white" face="">
reservering
</font>

<br>
<br>

<form class="reserveren_form" method="post" action="reserveren.php">
                <input type="text" name="username" placeholder="Naam" required/><br>
                <input type="text" name="adres" placeholder="Adres" required/><br>
                <input type="date" name="date" placeholder="Datum voor reservering" required/><br>
                <input type="number" name="duur" placeholder="Duur vakantie" required/><br>
                <select id="keuze_verblijf" name="keuze_verblijf" required>
                  <option value="">Kies verblijf</option>
                  <option value="Caravan">Caravan</option>
                  <option value="Tent">Tent</option>
                </select>
                <input type="number" name="aantal_personen" placeholder="Aantal personen" required/><br>
                <button type="submit" name="submit" class="btn">Reserveer</button><br>
        </form>
    <br>
    
    <br>

    

</body>
</html>

