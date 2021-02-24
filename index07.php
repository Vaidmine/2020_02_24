/*
Pakartokite 6 uždavinį. <br>
Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų <br>
tuo pačiu adresu (t.y. į patį save) jau GET metodu.
*/ <br><br>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST & GET w redirect</title>

    <style>
   p {
        text-decoration: none;
        font-size: 20px;
    }
    </style>
</head>


<body
    
<?php


if (isset($_POST['postas'])) {
    echo 'style="background-color: gold;"';
    $redirect = header("Location:http://localhost/2020_02_24/index07.php");
}
if (isset($_GET['getas'])) {
    echo 'style="background-color: seagreen;"';
}
_d($_GET);
_d($_POST);
?>
>
<form action="" method="getas">
<button type="submit" name="getas"><p> GET METODAS - GREEN</p></button>
</form>

<br><br>
<form action="" method="postas">
<button type="submit" name="postas"><p> POST METODAS - YELLOW </p></button>
</form>


</body>
</html>