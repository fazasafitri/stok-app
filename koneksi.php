<?php
class Koneksi {
    private $server = "localhost";
    private $username = "id5514893_stokapp";//root
    private $password = "082325955855";//""
    private $db = "id5514893_stokapp";

    function getKoneksi(){
        return new mysqli($this->server, $this->username,$this->password, $this->db);
    }
}
?>