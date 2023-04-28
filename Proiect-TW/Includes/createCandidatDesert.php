<?php

    if(isset($_POST["submitDesert"])) {

        $numeD = $_POST["numeD"];
        $telefonD = $_POST["telefonD"];
        $emailD = $_POST["emailD"];
        $detaliiD = $_POST["detaliiD"];

        require_once 'connection.php';
        require_once 'functions.php';

        createCandidatDesert($conn, $numeD, $telefonD, $emailD, $detaliiD);

    }
    else{
        header("location: ../index.php");
        exit();
    }