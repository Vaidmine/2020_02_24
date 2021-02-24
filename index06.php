/*
Padarykite puslapį su dviem mygtukais. <br>
Mygtukus įdėkite į dvi skairtingas formas- <br>
vieną GET ir kitą POST.<br>
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
    <title>Document</title>

    <style>
    a {
        text-decoration: none;
        font-size: 25px;
    }
    </style>
</head>

<body
    
<?php

if (isset($_POST['postas'])) {
    echo "yellow";
}
if (isset($_GET['getas'])) {
    echo "green";
}
?>
>
<form action="" method="getas">
<button type="submit"><a href=">green="> GET METODAS</a></button>
</form>

<form action="" method="post" value="">
<button type="submit"><a href=">yellow="> POST METODAS</a></button>
</form>


</body>
</html>