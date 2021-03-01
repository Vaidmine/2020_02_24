

/*
Sukurkite du puslapius pink.php ir rose.php. Nuspalvinkite juos atitinkamo spalvom. Į
pink.php puslapį įdėkite formą su POST metodu ir mygtuku “GO TO ROSE”. Formą
nukreipkite, kad ji atsidarinėtų rose.php puslapyje. Padarykite taip, kad surinkus
naršyklėje tiesiogiai adresą į rose.php puslapį, naršyklė būtų peradresuojama į pink.php
puslapį.
*/
<?php
    _d($_SERVER['REQUEST_METHOD']);
    
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: http://localhost/2020_02_24/nr8/pink.php');
   die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PINK & ROSE / this is rose </title>
</head>
<body style="background-color: darkviolet">

</body>
</html>