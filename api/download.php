<div class="titulo">Download</div>

<?php
session_start();
$arquivos = $_SESSION["arquivos"] ?? [];

$pastaUpload = __DIR__ . "/../files/";
$nomeArquivo = $_FILES["arquivo"]["name"];
$destinoArquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES["arquivo"]["tmp_name"];
if (move_uploaded_file($tmp, $destinoArquivo)) {
    echo "<br>Upload feito com sucesso!";
    $arquivos[] = $nomeArquivo;
    $_SESSION["arquivos"] = $arquivos;
} else {
    echo "<br>Erro no upload do arquivo!";
}

?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Upload</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?>
    <li>
        <a href="../files/<?= $arquivo ?>">
            <?= $arquivo ?>
        </a>
    </li>
    <?php endforeach ?>
</ul>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>