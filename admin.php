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
  <form action="overzicht.php">

    <font size="4" color="white" face=""> Naam </font>
    <input type="text" id="naam" name="naam" placeholder="uw naam.."required>
<br>
    <font size="4" color="white" face=""> Achternaam </font>
    <input type="text" id="achternaam" name="achternaam" placeholder="uw achternaam.."required>
<br>
<font size="4" color="white" face=""> Wachtwoord </font>
    <input type="password" id="password" name="password" placeholder="uw wachtwoord.."required>
<br>
    <input type="submit" value="Submit">
  </form>

</body>
</html>
