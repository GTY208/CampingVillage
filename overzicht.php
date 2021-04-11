<?php

include 'database.php';

$DB = new database();

$activiteiten = $DB->getAllActivities();
$reservering = $DB->getAllReseveringen();


?>


<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Overzicht</title>
    




<div class="topnav">
  <a href="index.php"><img src="afbeelding2.png" width="170" height="100"></a>
  <a href="activiteiten.php">ACTIVITEITEN</a>
  <a href="reserveren.php">RESERVEREN</a>
  <a href="admin.php">ADMIN</a>
</div>
<br>

<h3>ACTIVITEITEN</h3>

<table class="table_activiteiten">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Activiteit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($activiteiten as $activiteit):?>
                        <tr>
                            <th scope="row"><?php echo $activiteit["ID"];?></th>
                            <td><?php echo $activiteit["naam"];?></td>
                            <td><?php echo $activiteit["keuzeactiviteit"];?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
</table>



                
<br>

<h3>RESERVERINGEN</h3>
<table class="table_reservering">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Adres</th>
                        <th scope="col">Datum</th>
                        <th scope="col">Duur(Dagen)</th>
                        <th scope="col">Verblijf</th>
                        <th scope="col">Aantal personen</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach($reservering as $reserveren):?>
                        <tr>
                            <th scope="row"><?php echo $reserveren["ID"];?></th>
                            <td><?php echo $reserveren["naam"];?></td>
                            <td><?php echo $reserveren["adres"];?></td>
                            <td><?php echo $reserveren["datum"];?></td>
                            <td><?php echo $reserveren["duur"];?></td>
                            <td><?php echo $reserveren["keuze_verblijf"];?></td>
                            <td><?php echo $reserveren["aantal_personen"];?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

</table>



</html>
