<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MS3TI Conversor de Planilhas</title>

<style>
h1 {
	font-family:Verdana;
}
fieldset {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:Verdana;
	font-size:12px;
}
</style>

</head>
<body>


<table width="850" align="center" valign="middle">
	<tr>
		<td colspan="2" align="center">
			<img src="ms3ti_logo.png">
			<h1 style="font:Verdana">Conversor de Planilhas</h1>
		</td>
	</tr>
	<tr>
		<td align="center">
			<img src="ferramentas.jpg" border="0">
		</td>
		<td align="center">
			<form action="_saida.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Converter Arquivos do Excel</legend>
					<label>
						Arquivo do Excel (.xls): 
						<input type="file" name="upfile" />
					</label>
					<br>
					<label>
						Formato de Saída: 
						<select disabled>
							<option value="CSV">CSV</option>
						</select>
					</label>
					<label>
						Codificação de Caracteres: 
						<select disabled>
							<option value="UTF-8">UTF-8</option>
						</select>
					</label>
					<br>
					<input type="submit" value="Converter" />
				</fieldset>
			</form>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<font face="Verdana" size="1">Powered by <a href="http://www.ms3ti.com.br">MS3TI Tecnologia da Informação</a>.</font>
		</td>
	</tr>
</table>
</body>
</html>