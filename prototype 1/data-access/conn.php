<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "brief1";

    $conn = new mysqli($server,$user,$pass,$db);

    class Conn{
        private $server = "localhost";
        private $user = "root";
        private $pass = "";
        private $db = "brief1";
        private $conn;
        function conn(){
            return $this->conn = new mysqli($this->server,$this->user,$this->pass,$this->db);
        }
    }
?>