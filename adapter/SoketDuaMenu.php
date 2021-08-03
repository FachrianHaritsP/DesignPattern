<?php

require_once('DuaMenu.php'); 

 
class SoketDuaMenu implements DuaMenu
{
    public function one()
    {
        echo "paket satu.\n";
    }

    public function two()
    {
        echo "paket dua.\n";
    }
}