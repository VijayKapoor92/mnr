<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vijay
 * Date: 19/09/17
 * Time: 19:07
 */

function conectar(){
    $db_hostname = "localhost";
    $db_username = "root";
    $db_password = "root";
    $db_database = "MnR";

    $conn = mysqli_connect($db_hostname,$db_username,$db_password);
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_select_db($conn,$db_database);


    return $conn;

}


?>