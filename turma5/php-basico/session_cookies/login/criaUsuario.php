<?php

require __DIR__ . '/../../form/conn.php';

$secret = "XahsjsAAA374745SSDD";

$insert = $conn->prepare("
    INSERT INTO users(
        name,
        email,
        password,
        created_at,
        updated_at
    ) VALUES(:name, :email, :password, now(), now())");

    $insert->bindValue(':name', "Nanderson");
    $insert->bindValue(':email', "nandokstro@gmail.com");
    $insert->bindValue(':password', sha1("123456" . $secret));
    
    $insert->execute();