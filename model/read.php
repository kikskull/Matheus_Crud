<?php
    try {
        $pdo = new PDO("pgsql:dbname=postgres;host=127.0.0.1", "postgres", "admin");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

    $stmt = $pdo->prepare('SELECT * FROM users');
    $stmt->execute();
    $result = $stmt->fetchAll();
    echo json_encode($result)
?>