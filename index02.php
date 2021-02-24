/* 
Sukurti puslapį panašų į 1 uždavinį, <br>
tiktai antro linko su perduodamu kintamuoju nedarykite, <br>
o vietoj to padarykite, URL eilutėje ranka įvedus <br>
GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) <br>
puslapio fono spalva pasidarytų tokios spalvos.
*/


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB MECH UZD 2</title>
</head>
<body

<?php

_d($_GET);
if (isset($_GET['color'])) {
    // $color = $GET['color'];
    echo "style='background-color: #". $_GET['color'].";'";
} else {
    echo "aaaaaa";
}

?>
>
<!-- <a href="http://localhost/2020_02_24_рhp_nd_web_mech/index.php?color=1">HOME</a> -->
 
 
    
</body>
</html>