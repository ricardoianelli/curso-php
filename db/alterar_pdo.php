<div class="titulo">PDO: Alterar</div>

<?php
require_once "conexao_pdo.php";
$conexao = novaConexao();

$sql = "UPDATE cadastro SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ? WHERE id = ?";
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    "Toninho",
    "1978-3-3",
    "toninhoguardanotas@hotmail.com",
    "https://toninho.com.br",
    0,
    78000,
    13,
]);

if ($resultado) {
    echo "Sucesso! :)";
} else {
    print_r($stmt->errorInfo());
}
?>