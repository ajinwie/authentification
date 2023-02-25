<?php
    include_once "db.php";
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
?>