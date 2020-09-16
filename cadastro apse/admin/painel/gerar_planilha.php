
 <?php
	session_start();
	include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'Listadecontatos.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5">Planilha sde Contatos</tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>id</b></td>';
		$html .= '<td><b>Nome Associado</b></td>';
		$html .= '<td><b>Nome Mãe</b></td>';
		$html .= '<td><b>Nome Pai</b></td>';
		$html .= '<td><b>cpf</b></td>';
		$html .= '<td><b>rg</b></td>';
		$html .= '<td><b>email</b></td>';
		$html .= '<td><b>Data de nascimento</b></td>';
		$html .= '<td><b>telefone</b></td>';
		$html .= '<td><b>Whatsapp</b></td>';
		$html .= '<td><b>rua</b></td>';
		$html .= '<td><b>numero</b></td>';
		$html .= '<td><b>bairro</b></td>';
		$html .= '<td><b>cidade</b></td>';
		$html .= '<td><b>estado</b></td>';
		$html .= '<td><b>cep</b></td>';


		$html .= '</tr>';
		
		//Selecionar todos os itens da tabela 
		$result_msg_contatos = "SELECT * FROM cadastro";
		$resultado_msg_contatos = mysqli_query($conn , $result_msg_contatos);
		
		while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){
			$html .= '<tr>';
			$html .= '<td>'.$row_msg_contatos["id"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nome"].'</td>';
			$html .= '<td>'.$row_msg_contatos["pai"].'</td>';
			$html .= '<td>'.$row_msg_contatos["mae"].'</td>';
			$html .= '<td>'.$row_msg_contatos["cpf"].'</td>';
			$html .= '<td>'.$row_msg_contatos["rg"].'</td>';
			$html .= '<td>'.$row_msg_contatos["email"].'</td>';
			$html .= '<td>'.$row_msg_contatos["dtnasc"].'</td>';
			$html .= '<td>'.$row_msg_contatos["telefone"].'</td>';
			$html .= '<td>'.$row_msg_contatos["zap"].'</td>';
			$html .= '<td>'.$row_msg_contatos["rua"].'</td>';
			$html .= '<td>'.$row_msg_contatos["numero"].'</td>';
			$html .= '<td>'.$row_msg_contatos["bairro"].'</td>';
			$html .= '<td>'.$row_msg_contatos["cidade"].'</td>';
			$html .= '<td>'.$row_msg_contatos["estado"].'</td>';
			$html .= '<td>'.$row_msg_contatos["cep"].'</td>';
			$html .= '</tr>';
			;
		}
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>