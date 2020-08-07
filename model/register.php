<?php
    try {
        $pdo = new PDO("pgsql:dbname=postgres;host=127.0.0.1", "postgres", "admin");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
    $user = (object) [
        'name' => $_POST["fullName"],
        'email' => $_POST["email"],
        'gender' => $_POST["gender"],
        'cpf' => $_POST["cpf"],
        'phone' => $_POST["phone"],
        'photo' => $_FILES["photo"]["name"]
    ];
    move_uploaded_file($_FILES["photo"]["tmp_name"], "./images/{$user->photo}");
    echo "Usuario cadastrado com sucesso, voltar a <a href='http://localhost/Thread/index.html'>página inicial</a>";

    
    $stmt = $pdo->prepare('INSERT INTO users (full_name, email, gender, cpf, phone, photo) VALUES(:full_name, :email, :gender, :cpf, :phone, :photo)');
    $stmt->execute(array(
        ':full_name' => $user->name,
        ':email' => $user->email,
        ':gender' => $user->gender,
        ':cpf' => $user->cpf,
        ':phone' => $user->phone,
        ':photo' => $user->photo
    ));
?>