<?php

namespace App\Service;

use App\Entity\RemoteServer;

class FileTransferer {
    
    private ?RemoteServer $sender;
    private ?RemoteServer $receiver;

    public function __construct() {
        $this->sender = null;
        $this->receiver = null;
    }

    public function setSender(string $host, string $user, string $pass) : void
    {
        $this->sender = new RemoteServer($host, $user, $pass);
    }

    public function setReceiver(string $host, string $user, string $pass) : void
    {
        $this->receiver = new RemoteServer($host, $user, $pass);
    }

    public function test()
    {
        var_dump($this->sender->getClient());
    }
}