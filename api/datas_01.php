<div class="titulo">Datas #01</div>

<?php
echo time() . "<br>";
echo date('D, d \d\e M \d\e Y H:i A') . '<br>';

echo strftime('%A, %d de %B de %Y', time()) . '<br>';
//Não funciona
setlocale(LC_TIME, "pt_BR", "pt_BR.utf-8");
//Funciona
setlocale(LC_TIME, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese"); 
echo strftime('%A, %d de %B de %Y', time()) . '<br>';

$amanha = time() + (24*60*60);
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

$proximaSemana = strtotime("+1 week");
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

$dataFixa = mktime(8, 40, 00, 9, 24, 1991);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa) . '<br>';

?>