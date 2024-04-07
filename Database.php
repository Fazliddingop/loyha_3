<?php

    class Database{

        public $hostName = "localhost";
        public $userName = "root";
        public $password = "";
        public $dbName = "opi";
        public $tableName = "";
        public $con= null;


        public function  __construct($tableName) {
            $this->con = new mysqli($this->hostName , $this->userName, $this->password, $this->dbName);
            $this->tableName = $tableName;
        }
       
        public function  Select(){
           
            $table = $this->tableName;
            $sql = "SELECT * FROM $table WHERE 'id'>0";
            $result = $this->con->query($sql);
            return $result;

        }

        public function create($data){
            $table=$this->tableName;
            $Last=$data['Last'];
            $Frist=$data['Frist'];
            $sql="INSERT INTO `$table`( `Frist`, `Last`) VALUES ('$Frist','$Last')";
            $result = $this->con->query($sql);
            return $result;
            
    
        }
       
        public function update($id,$data){
            $table=$this->tableName;
            $Last=$data['Last'];
            $Frist=$data['Frist'];
            $sql= "UPDATE `users` SET `Frist`='$Frist',`Last`='$Last' WHERE `id`='$id'";
            $result = $this->con->query($sql);
            return $result;
            
    
        }



    };

    // $users = new database('users');
    // $allUsers = $users->Select();

    // while($row = $allUsers->fetch_assoc() ){

    //    print_r($row);

    // }

//    $teacher = new Database('teachers');
//    $allteacher = $teacher->Select();
//
//    while($row = $allteacher->fetch_assoc() ){
//
//        print_r($row);
//
//    }




