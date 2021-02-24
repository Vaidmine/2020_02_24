/*
Padarykite puslapį su dviem mygtukais. <br>
Mygtukus įdėkite į dvi skirtingas formas - vieną GET ir kitą POST.<br>
Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, <br>
o tik tikrindami pačius masyvus, <br>
nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos <br> 
ir geltonai - kai iš POST.
*/ <br><br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST & GET</title>

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
    echo 'style="background-color: gold";';
}
if (isset($_GET['getas'])) {
    echo 'style="background-color: seagreen";';
}
_d($_GET);
_d($_POST);
?>
>
<form action="" method="get">
<button type="submit" name="getas"><p> GET METODAS - GREEN</p></button>
</form>

<br><br>
<form action="" method="post">
<button type="submit" name="postas"><p> POST METODAS - YELLOW </p></button>
</form>


</body>
</html>