<?php

function createCandidatBurger($conn, $nume, $telefon, $email, $detalii){
    $sql = "INSERT INTO concursburger (candidatNume, telefon, email, detalii) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?error=stmtFailed");
    }
    mysqli_stmt_bind_param($stmt, "ssss", $nume, $telefon, $email, $detalii);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php");
    exit();
}

function createCandidatDesert($conn, $numeD, $telefonD, $emailD, $detaliiD){
    $sql2 = "INSERT INTO concursdesert (candidatNume, telefon, email, detalii) VALUES (?, ?, ?, ?);";
    $stmt2 = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt2, $sql2)){
        header("location: ../index.php?error=stmtFailed");
    }
    mysqli_stmt_bind_param($stmt2, "ssss", $numeD, $telefonD, $emailD, $detaliiD);
    mysqli_stmt_execute($stmt2);
    mysqli_stmt_close($stmt2);
    header("location: ../index.php");
    exit();
}



