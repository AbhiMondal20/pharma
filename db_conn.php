<?php
    $_host = "localhost";
    $_user = "root";
    $_pass = "";
    $_db = "pharma";

    $conn = new mysqli($_host, $_user, $_pass, $_db);
   
    if($conn->connect_error){
        die("Connection Failed". $conn->connect_error);
    }
    
?>