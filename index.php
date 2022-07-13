<?php 

// definice tridy connectDB

class connectDB {

    //konstanty
    public $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=127.0.0.1;dbname=ogame;charset=utf8','root');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function __destruct()
    {

    }

    public function query($sql){

        return $this->db->query($sql)->fetchAll();

    }
}

    $database = new connectDB();
    $data = $database->query("SELECT * FROM test;");



?>
