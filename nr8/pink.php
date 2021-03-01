/*
Sukurkite du puslapius pink.php ir rose.php. <br> 
Nuspalvinkite juos atitinkamo spalvom. <br> 
Į pink.php puslapį įdėkite formą su POST metodu ir mygtuku “GO TO ROSE”. <br> 
Formą nukreipkite, kad ji atsidarinėtų rose.php puslapyje. <br> 
Padarykite taip, kad surinkus naršyklėje tiesiogiai adresą į rose.php puslapį, <br> 
naršyklė būtų peradresuojama į pink.php puslapį. 
*/
<?php
_d($_SERVER['REQUEST_METHOD']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Location: http://localhost/2020_02_24/nr8/rose.php');
die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PINK & ROSE / this is Pink</title>
</head>

<body style="background-color: pink">
    <form action="http://localhost/2020_02_24/nr8/rose.php" method="post" >
        <button type="submit">GO TO ROSE</button>
    </form>
</body>

</html>