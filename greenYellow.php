<?php
$b = #fff;

if ($_SERVER['REQUEST_METHOD'] =='POST' ) {
 $b = '#fee227';
}
else {
    $b = '#3cb043';
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:<?= $b?>; >"

>
    







    <form action="" method="get"></form>
    <button type="submit">GET</button>

    <form action="" method="post"></form>
    <button type="submit">POST</button>
</body>
</html>