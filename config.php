<?php
    $servername = 'localhost';
    $username = 'root';
    $password = "";
    $dbname = "testapi";


    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if($conn){
        echo "Connection Successfully !";
    }else{
        die("Connection failed : " . mysqli_connect_error());
    }
        

?>