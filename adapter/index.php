<?php

require_once('SoketTigaMenu.php'); 
require_once('SoketDuaMenu.php'); 

require_once('TigaMenuAdapter.php'); 

require_once('Menu.php'); 

$TigaMenu = new SoketTigaMenu();
$DuaMenu = new TigaMenuAdapter(new SoketDuaMenu());

$menu1 = new Menu($TigaMenu);
$menu2 = new Menu($DuaMenu);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adapter Pattern</title>
</head>
<body>
    <h1>Booking Menu</h1>
    <span>Objek menu pertama: </span>
    <?php
    $menu1->verifyForBooking();
    ?>
    <br>
    <span>Objek menu kedua: </span>
    <?php
    $menu2->verifyForBooking();
    ?>
</body>
</html>