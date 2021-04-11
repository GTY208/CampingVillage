<?php

include 'database.php';

$msg = '';
if(isset($_POST['submit'])){

    $fieldnames = ['username', 'keuze'];
    $error = false;

    foreach($fieldnames as $fieldname){
        if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
            $error = true; 
            $msg = 'error';
        }

    }

    if(!$error){
        $obj = new database();
        $obj->insertActiviteit($_POST['username'], $_POST['keuze']);
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
    <title>Activiteiten</title>


<div class="topnav">
  <a href="index.php"><img src="afbeelding2.png" width="170" height="100"></a>
  <a href="activiteiten.php">ACTIVITEITEN</a>
  <a href="reserveren.php">RESERVEREN</a>
  <a href="admin.php">ADMIN</a>
</div>
<br>

   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<body>
      <img src="mountainbike.jpg" alt="knutselen" width="250"
         height="200">
   </body>

   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

   <body>
      <img src="knutselen.jpg" alt="mountainbike" width="250"
         height="200" border-radius="50">
   </body>

   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

   <body>
      <img src="boule.jpg" alt="boule" width="250"
         height="200">
   </body>

   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

   <body>
      <img src="water.jpeg" alt="water" width="250"
         height="200">
   </body>
<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<font size="4" color="white" face=""> MOUNTAINBIKE </font>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<font size="4" color="white" face=""> KNUTSELEN </font>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<font size="4" color="white" face=""> JEU DE BOELE </font>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<font size="4" color="white" face=""> WATER ACROBATICS </font>

<br>
<br>
<br>
<br>
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

<font size="15" color="white" face="">
selecteer uw activiteit
</font>

<br>
<br>

<form class= "form" method="POST" action="activiteiten.php">
  <div>

<br>
<br>
<br>
    <label for="username"> &nbsp; NAAM:</label> 
    <input type="text" name="username" placeholder="name" required
        minlength="2" maxlength="255" size="30">
             <p>KIES JE ACTIVITEIT</p>
              <select id="kiesActiviteit" name="keuze" required>
              <option value="" disabled selected>Kies uw activiteit</option>
              <option value="Mountainbiken">MOUNTANBIKEN</option>
              <option value="Knutselen">KNUTSELEN</option>
              <option value="Jeu de Boele wedstrijd">JEU DE BOELE</option>
              <option value="Water Aerobics">WATER ACROBATICS</option>
            </select>
<br>
<br>
        <button type="submit" name="submit" class="btn">SUBMIT</button>
</form>

<br> 
<br> 
<br> 
<br> 
<br> 
<br>



</body>
</html>


