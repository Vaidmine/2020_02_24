
/*
Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį <br>
ir ją išsiųsti mygtuku GET metodu formoje.
*/

<?php
_d($_GET);
if (isset($_GET['color'])) {
    $color = $_GET['color'];
    echo "style='background-color: #". $color.";'";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UZD 3</title>
</head>
<body style='background-color:#<?= $color ?>;'

>

    <form action="" method="get" style="display: flex; justify-content: center;">
        <input type="text" name="color" value="">
        <button type="submit">SPAUSTI/ PAKEISTI SPALVA</button>

</form>
</body>
</html>

 