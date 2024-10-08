<?php
    class functions{
    private $db;
    private $sql;
    private $result;

    //constructor
    function __construct(){
        require_once 'DbConnection.php';
        //create an instance/object of class DbConnection
        $this->db = new DbConnection();
         //establishing connection with the database
        $this->db->connect();
        //calling the method: connection() of class DbConnection 
    }
    //destructor
    function __destruct(){
        $this->db->connect()->close();

    }
    //methods
    public function insert_data($tablename, $field, $value){


    }
}



?>