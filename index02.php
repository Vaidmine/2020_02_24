/* 
Sukurti puslapį panašų į 1 uždavinį, <br>
tiktai antro linko su perduodamu kintamuoju nedarykite, <br>
o vietoj to padarykite, URL eilutėje ranka įvedus <br>
GET kintamąjį color su RGB spalvos kodu (pvz ?color=ff1234) <br>
puslapio fono spalva pasidarytų tokios spalvos.
*/
<?php

_d($_GET);
$color = isset($_GET['color'])? '#' . $_GET['color'] : 'darkgrey';

?>
>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND2</title>
</head>
<body style="background:<?= $color ?>;">
<a href="http://localhost/2020_02_24/index02.php">Dark Grey</a>
</body>
</html>


 
 