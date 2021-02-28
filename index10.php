/*
Padarykite juodą puslapį,  kuriame būtų POST forma, <br>
mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… <br>
Padarykite taip, kad paspaudus mygtuką, <br>
fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, <br>
rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek). 
Pakartokite 9 uždavinį. <br>
Padarykite taip, kad atsirastų du skaičiai. <br>
Vienas rodytų kiek buvo pažymėta, o kitas kiek iš vis buvo jų sugeneruota.

*/ <br><br>

<?php

session_start();
if(isset($_SESSION['Rez'])) {
    $rez = $_SESSION['Rez'];
    unset($_SESSION['Rez']);
}
$color = 'DarkSlateGray';
if (isset($_POST['btn'])) {
    _d($_POST['letter']);
    if (empty($_POST['letter'])) {
        echo 'You didn\'t pick a one! Get over yourself and make a choice!';
        $color = 'white';
        die;
    } else {
        $choosenLetters = $_POST['letter'];
        $summ = 0;
        foreach ($choosenLetters as $letter) {
            $summ++;
        }
        $color = 'white';
        echo "You have chose $summ answers from $rez";
        die;
    }
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
<body style='background:<?php echo $color ?>; color:white'>
<p>YOUR CHOICE:</p>

<form action="" method="post">
<?php
$rand = rand(3, 10);
$letters = 'ABCDEFGHIJ';
$count = 0;
echo '<p style="color:white">';
for ($i = 0; $i < $rand; $i++) {
    echo $letters[$i] . '<input type="checkbox" name="letter[]" value="1">';
    $count++;
}
echo '</p>';
//setcookie('Rez', $count);
$_SESSION['Rez'] = $count;

?>
<br>
<input type="hidden" name="count" value = $count>
<input type="submit" name="btn" value="PUSH THE BUTTON">
</form>

</body>
</html>