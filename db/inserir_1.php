<div class="titulo">Inserir Registro #01</div>

<?php
require_once "conexao.php";

$sql = "INSERT INTO cadastro
    (nome, nascimento, email, site, filhos, salario)
    VALUES (
        'Eduardo',
        '1989-04-13',
        'eduardo@hotmail.com',
        'https://facebook.com/eduardo',
        0,
        1500
    )";

    $conexao = novaConexao();
    $resultado = $conexao->query($sql);

    if ($resultado) {
        echo "Sucesso :)";
    } else {
        echo "Erro: " . $conexao->error;
    }

    $conexao->close();

?>