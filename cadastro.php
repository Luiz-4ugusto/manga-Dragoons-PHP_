<?php
include('conectar.php');

if (isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['cpf'], $_POST['dob'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $senha = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
    $cpf = trim($_POST['cpf']);
    $date = trim($_POST['dob']);

    $conection = $conn->prepare("SELECT * FROM usuarios WHERE username = ? OR cpf = ?");
    $conection->bind_param("ss", $username, $cpf);
    $conection->execute();
    $resultado = $conection->get_result();

    if ($resultado->num_rows > 0) {
        echo "<script>alert('Login ou CPF já cadastrados!');</script>";
    } else {
        $conection = $conn->prepare("INSERT INTO usuarios (username, email, cpf, senha, datanasc) VALUES (?, ?, ?, ?, ?)");
        $conection->bind_param("sssss", $username, $email, $cpf, $senha, $date);        

        if ($conection->execute()) {
            header("Location: ./login.html");
            exit();
        } else {
            echo "<script>alert('Erro ao cadastrar usuário.');</script>";
        }
    }
}
?>