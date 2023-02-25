<?php

$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="authentification_system";
 
$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

if(!$conn){
    echo "Not Connected";
}else{
    echo "Connected";
}

?>