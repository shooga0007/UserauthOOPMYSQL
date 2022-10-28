<?php
class Dbh{

    private $hostname;
    private $username;
    private $pasword;
    private $dbname;

    public function connect(){
        $this->hostname = "127.0.0.1";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "zuriphp";

        $conn = new mysqli($this->hostname, $this->username,$this->passsword, $this->dbname);
        return $conn;

    }
}


