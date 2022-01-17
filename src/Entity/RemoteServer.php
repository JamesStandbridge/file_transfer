<?php

namespace App\Entity;

class RemoteServer {

    private FtpClient $client;

    public function __construct(string $host, string $user, string $pass)
    {
    }

    public function getClient() : FtpClient
    {
        return $this->client;
    }
}