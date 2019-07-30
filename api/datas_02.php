<div class="titulo">Datas #02</div>

<?php 
$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();

/* print_r($agora);
echo "<br>"; */

echo $agora->format($formatoData1) . "<br>";

//Assim não funciona
setlocale(LC_TIME, 'pt_BR');

//Assim funciona
setlocale(LC_TIME, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese"); 

echo strftime($formatoData2, $agora->getTimeStamp()) . "<br>";

$dataFixa = new DateTime("1975-01-25 15:30:50");
echo strftime($formatoDataHora, $dataFixa->getTimeStamp()) . "<br>";

$amanha = new DateTime("+2 week");
echo strftime($formatoData2, $amanha->getTimeStamp()) . "<br>";

$amanha->modify("+1 day");
echo strftime($formatoData2, $amanha->getTimeStamp()) . "<br>";

$amanha->setDate(2000, 5, 20);
echo strftime($formatoData2, $amanha->getTimeStamp()) . "<br>";

$dataPassada = new DateTime("2000-05-17");
$dataFutura = new DateTime("2030-11-26");
$outraData = new DateTime("2030-11-26");
echo ($amanha > $dataPassada ? "Maior" : "Menor") . "<br>";
echo ($amanha > $dataFutura ? "Maior" : "Menor") . "<br>";
echo ($outraData == $dataFutura ? "Igual" : "Diferente") . "<br>";

echo "<br>";
$tz = new DateTimeZone("America/Sao_Paulo");
$agora = new DateTime(null, $tz);
echo $agora->format("d/M/Y H:i:s");

?>