<?php

class User{
    public $dbcon;
    function __construct(){
        $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $cleardb_server = $cleardb_url["host"];
        $cleardb_username = $cleardb_url["user"];
        $cleardb_password = $cleardb_url["pass"];
        $cleardb_db = substr($cleardb_url["path"],1);
        $active_group = 'default';
        $query_builder = TRUE;
        // Connect to DB
        // $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
        $this->dbcon = new Mysqli($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
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