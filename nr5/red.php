Sukurkite du atskirus puslapius blue.php ir red.php <br>
Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!).  <br>
Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų,  <br>
 o PHP kodas (ne tiesiogiai html tagas!)  <br>
 naršyklę peradresuotų į kitą puslapį (iš raudono į mėlyną ir atvirkščiai).

 <?php

if (isset($_GET['yyyy'])) {
    header('Location: http://localhost/2020_02_24/nr5/blue.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NR 5 RED</title>
</head>
<body style="background-color: salmon">

<h1><a href="http://localhost/2020_02_24/nr5/red.php?yyyy">SALMON RED COLOR</a></h1>
    
</body>
</html>