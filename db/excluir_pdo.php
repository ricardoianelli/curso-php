<div class="titulo">PDO: Excluir</div>

<?php
require_once "conexao_pdo.php";
$conexao = novaConexao();

$sql = "DELETE FROM cadastro WHERE id > :id";
$stmt = $conexao->prepare($sql);

//$stmt->bindValue(":id", 13);
//if ($stmt->execute()) {
    
if ($stmt->execute([":id" => 12])) {
    echo "Sucesso :)";
} else {
    echo "Erro :(";
    print_r($stmt->errorInfo());
}


?>