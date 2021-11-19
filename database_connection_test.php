<?php  
//Esther Dzifa mensah
require __DIR__ ."/database_credentials.php";

    //Creating a connection 
    $conn = new mysqli(servername,username,password,dbname);
    //Cheking to see if connection worked or failed 
    if($conn->connect_error){
        die("Connection fa
        iled: ".$conn->connect_error);
        echo "Connection failed";
    }
    else{
        echo "Connection successful";
    }

?>