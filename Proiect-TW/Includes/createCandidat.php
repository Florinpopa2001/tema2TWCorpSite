<?php

    if(isset($_POST["submitBurger"])) {

        $nume = $_POST["nume"];
        $telefon = $_POST["telefon"];
        $email = $_POST["email"];
        $detalii = $_POST["detalii"];

        require_once 'connection.php';
        require_once 'functions.php';
        
        createCandidatBurger($conn, $nume, $telefon, $email, $detalii);
    
    }
    else{
        header("location: ../index.php");
        exit();
    }


