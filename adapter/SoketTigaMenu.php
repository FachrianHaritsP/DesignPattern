<?php

require_once('TigaMenu.php'); 

class SoketTigaMenu implements TigaMenu
{
    public function one()
    {
        echo "paket satu.\n";
    }

    public function two()
    {
        echo "paket dua.\n";
    }

    public function three()
    {
        echo "paket tiga.\n";
    }
}