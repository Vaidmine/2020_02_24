//* action tas pats kas a tahe href'as
// jei paliktas tuscias veda 5 ta pati puslapi
?? po dvieju klaustuku - default reiksme
*/ 


<?php 

$x = (float) ($_GET['x'] ?? 0);
$y = (float) ($_GET['y'] ?? 0);

$suma = $x + $y; 


?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkuliatorius</title>
</head>
<body>


<h1>SUMATORIUS</h1>
<h3>REZULTATAS: <?= $suma ?> </h3>
<form action="http://localhost/2020_02_24/calc.php" method="get"></form>
<input type="text" name="x">
<input type="text" name="y">
<button type="submit">SUMUOTI</button>


    
</body>
</html>



