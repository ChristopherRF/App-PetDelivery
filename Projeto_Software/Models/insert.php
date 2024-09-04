<?php
require ('Conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $nome = $_POST["USER_NAME"] . '<br>';
    echo $email = $_POST["EMAIL"];
    $senha = $_POST["PASSWORD"];
    echo "<hr>";

    // Função para inserir um novo registro no banco de dados
    function inserirRegistro($pdo, $nome, $email, $senha) {
        $sql = "INSERT INTO usuarios (USER_NAME, EMAIL, PASSWORD) VALUES (:USER_NAME, :EMAIL, :PASSWORD)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':USER_NAME', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':EMAIL', $email, PDO::PARAM_STR);
        $stmt->bindParam(':PASSWORD', $senha, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
if (inserirRegistro($pdo, $nome, $email, $senha)) {
    echo "Cadastro realizado com sucesso!<br>" . "<a href='menu.php'>HOME</a>";
} else {
    echo 'Erro ao fazer Cadastro.';
}
?>