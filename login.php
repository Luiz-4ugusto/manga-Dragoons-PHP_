
<?php
session_start(); 
include('conectar.php');


if (isset($_POST['username'], $_POST['password'])) {
    $usuario = trim($_POST['username']);
    $pass = trim($_POST['password']); 

    $sql = "SELECT * FROM usuarios WHERE username = ?";
    $conection = $conn->prepare($sql);
    $conection->bind_param("s", $usuario);
    $conection->execute();
    $resultado = $conection->get_result();

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    if (password_verify($pass, $row['senha'])) {
        $_SESSION['user_id'] = $row['id']; 
        echo "<script> window.location.href='./produtos02.html';</script>";
    } else {
        echo "<script>alert('Senha incorreta!');</script>";
    }
} else {
    echo "<script>alert('Usuário não encontrado!');</script>";
}

    $conection->close(); 
} else {
    echo "faltou dados";
}

$conn->close(); 
?>