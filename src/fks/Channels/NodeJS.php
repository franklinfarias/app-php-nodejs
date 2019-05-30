<?php

namespace FKS\Channels;

class NodeJS
{
    private $host='localhost';
    private $port='1771';
    private $socket;

    private function connect()
    {
        if (($this->socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP))){
            return socket_connect($this->socket,$this->host,$this->port);
        }else
            return false;
    }

    private function write($socket, $buffer)
    {
        return socket_write($socket, $buffer, strlen($buffer));
    }

    private function close($socket)
    {
        return socket_close($socket);
    }

    public function send($buffer)
    {
        try{
            if ($this->connect()){
                if ($this->write($this->socket, $buffer)){
                    $this->close($this->socket);
                    return true;
                } else {
                    return false;
                }
            }
        } catch(Exception $e){
            // Include PSR-3 to Logging
            return false;
        }
    }
}