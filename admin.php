<?php

include 'database.php';

  $msg = '';
  if(isset($_POST['submit'])){

    $fieldnames = ['username', 'password'];
    $error = false;

    foreach($fieldnames as $fieldname){
        if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
            $error = true; 
            $msg = 'error';
        }

    }

    if(!$error){
        $obj = new database();
        $obj->loginmedewerker($_POST['username'], $_POST['password']);
        //nigger
    }else{
        //prr
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
    
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


img {
  border-radius: 15%;
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

<div class="topnav">
  <a href="index.php"><img src="afbeelding2.png" width="170" height="100"></a>
  <a href="activiteiten.php">ACTIVITEITEN</a>
  <a href="reserveren.php">RESERVEREN</a>
  <a href="admin.php">ADMIN</a>
</div>
<br>

<div class="container">
  <form method="POST">

    <font size="4" color="white" face=""> Naam </font>
    <input type="text" id="naam" name="username" placeholder="uw naam.."required>

<br>

<font size="4" color="white" face=""> Wachtwoord </font>
    <input type="password" id="password" name="password" placeholder="uw wachtwoord.."required>

<br>

    <button type="submit" name="submit" class="btn">SUBMIT</button>
  </form>

</body>
</html>
