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

<div class="container">
  <form action="index.php">
    <font size="4" color="white" face=""> Naam </font>
    <input type="text" id="naam" name="naam" placeholder="uw naam.."required>

    <font size="4" color="white" face=""> Achternaam </font>
    <input type="text" id="achternaam" name="achternaam" placeholder="uw achternaam.."required>

    <font size="4" color="white" face=""> Adres </font>
    <input type="text" id="adres" name="adres" placeholder="uw adres.."required>

<br>
<font size="4" color="white" face=""> Verblijf </font><br>
  
    <select id="verbljf" name="verblijf">
      <option value="australia">TENT</option>
      <option value="canada">CARAVAN</option>
    </select>

    <font size="4" color="white" face=""> Aantal personen </font>
    <input type="text" id="aantal" name="aantal" placeholder="aantal personen.."required>
    
    <br>
    
    <font size="4" color="white" face=""> Activiteit </font>
    <select id="Activity" name="Activity">
      <option value="australia">MOUNTAIN BIKEN</option>
      <option value="canada">KNUTSELEN</option>
      <option value="usa">JEU DE BOELE</option>
      <option value="usa">WATER ACROBATICS</option>
    </select>

    <br>

    <font size="4" color="white" face=""> Dag </font>
    
    <br>

    <label class="container"><font size="2" color="white" face=""> Maandag </font>
  <input type="checkbox">
  <span class="checkmark"></span>
</label>



<label class="container"><font size="2" color="white" face=""> Dinsdag </font>
  <input type="checkbox">
  <span class="checkmark"></span>
</label>



<label class="container"><font size="2" color="white" face=""> Woensdag </font>
  <input type="checkbox">
  <span class="checkmark"></span>
</label>



<label class="container"><font size="2" color="white" face=""> Donderdag </font>
  <input type="checkbox">
  <span class="checkmark"></span>
</label>



<label class="container"><font size="2" color="white" face=""> Vrijdag </font>
  <input type="checkbox">
  <span class="checkmark"></span>
</label>



<label class="container"><font size="2" color="white" face=""> Zaterdag </font>
  <input type="checkbox">
  <span class="checkmark"></span>
</label>



<label class="container"><font size="2" color="white" face=""> Zondag </font>
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<br>
<br>
<br>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

