<?php
    class DbConnection{
        // data members or members variables
        private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "mydatabase";
        //method 
        public function connect(){
            try{
                $conn = new mysqli(
                    $this->hostname,
                    $this->username,
                    $this->password,
                    $this->dbname
                );
            }catch(\Exception $ex){
                echo "Connection failed: ". $ex->getMessage();
            }

        }

    }



?>
