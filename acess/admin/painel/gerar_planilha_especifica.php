
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
         if(isset($_POST['msg_contato'])){
         	// Definimos o nome do arquivo que será exportado
         	$arquivo = 'Lista_de_contato_apse.xls';
         	
         	// Criamos uma tabela HTML com o formato da planilha
         	$html = '';
         	$html .= '<table border="1">';
         	$html .= '<tr>';
         	$html .= '<td colspan="2">Planilhas de Contatos</tr>';
         	$html .= '</tr>';
         	
         	
         	$html .= '<tr>';
         
         	$html .= '<td><b>Nome Associado</b></td>';
                   $html .= '<td><b>Telefone</b></td>';
         
         
         	$html .= '</tr>';
         	
         	foreach($_POST['msg_contato'] as $id => $msg_contato){
         		//echo "ID do item: $id <br>";
         		//Selecionar todos os itens da tabela 
         		$result_msg_contatos = "SELECT * FROM cadastro WHERE id = $id LIMIT 100";
         		$resultado_msg_contatos = mysqli_query($conn , $result_msg_contatos);
         		
         		while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){
         			$html .= '<tr>';
         			$html .= '<td>'.$row_msg_contatos["nome"].'</td>';
         			$html .= '<td>'.$row_msg_contatos["zap"].'</td>';
         
         			$html .= '</tr>';
         			;
         		}
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
         	exit;
         }else{
         	echo "Nenhum item selecionado";
         }
         
         ?>
   </body>
</html>