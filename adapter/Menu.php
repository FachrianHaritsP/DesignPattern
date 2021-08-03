<?php

require_once('TigaMenu.php'); 


class Menu
{
    private $socket;

    public function __construct(TigaMenu $socket) 
    {
        $this->socket = $socket;
    }

    public function verifyForBooking() {
        $this->socket->one();
        $this->socket->two();
        $this->socket->three();
    }
}