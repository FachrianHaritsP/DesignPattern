<?php

require_once('TigaMenu.php'); 
require_once('DuaMenu.php'); 


class TigaMenuAdapter implements TigaMenu
{
    private $socket;

 
    public function __construct(DuaMenu $socket)
    {
        $this->socket = $socket;
    }

    public function one()
    {
        $this->socket->one();
    }

    public function two()
    {
        $this->socket->two();
    }

    public function three()
    {
        echo "paket ketiga tidak tersedia.\n";
    }
}