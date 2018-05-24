<?php
ini_set('display_errors',0);
error_reporting(E_ALL);
set_time_limit(0);

require 'Excel/reader.php';

$data = new Spreadsheet_Excel_Reader();
$data->setOutputEncoding('UTF-8');


//echo "<pre>";
$nomearquivo = explode('.',implode(explode(' ',$_FILES['upfile']['name'])));
$nomearquivo = $nomearquivo[0];

//print_r($nomearquivo); die();


if(!empty($_FILES['upfile']) && ($_FILES['upfile']['type'] == "application/vnd.ms-excel" || $_FILES['upfile']['type'] == "application/x-msexcel")) {
	$data->read($_FILES['upfile']['tmp_name']);
}
else {
	//$data->read('test.xls');
	//echo "<pre>";
	//print_r($_FILES);
	echo "Arquivo Inválido!<br><br>Aceito somente formato: <b>Pasta de Trabalho do Excel 97-2003 (*.xls)</b>"; die();
}

header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/csv");
header ("Content-Type: text/html; charset=utf-8");
header ("Content-Disposition: attachment; filename=".$arquivo."" );
header ("Content-Disposition: attachment; filename=".$nomearquivo.".csv");

$arq_saida = '';
	for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
			for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
				$celldata = utf8_encode((!empty($data->sheets[0]['cells'][$i][$j])) ? $data->sheets[0]['cells'][$i][$j] : "&nbsp;");
				//$arq_saida .= "'".trim($celldata)."',";
				if($j != 1)
				{
					echo ",";
				}
				echo "\"".trim(str_replace("&nbsp;", " ", str_replace(chr(13), " ", str_replace(chr(10), " ", str_replace("\"", "'", $celldata)))))."\"";
			}
			echo "
";
	}

//echo $arq_saida;
//header('Content-Disposition: attachment; filename=example.csv');


/*
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename='.$nomearquivo.'.csv');
header('Content-Type: text/html; charset=utf-8');
header('Pragma: no-cache');
*/

?>