<?php

class User{
    public $dbcon;
    function __construct(){
        $this->dbcon = new Mysqli('localhost','root','','stage2');
    }
    function addtodb($name,$email,$message){
        $sql="INSERT INTO formentry(name, email, message) VALUES('$name', '$email','$message')";
        $outcome=$this->dbcon->query($sql);
        return true;
    }
    function readfromdb(){
        $sql="SELECT * FROM formentry";
        $outcome=$this->dbcon->query($sql);
        while($row= $outcome->fetch_assoc()){
            echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['message']."</td></tr>";
        }

    }

}




?>