<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM cadastro WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Editar Membros Apse</title>		
	</head>
	<body>
		<a href="index.php">voltar</a><br>
		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_usuario.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nome']; ?>"><br><br>
			
			<label>mae: </label>
			<input type="text" name="mae" placeholder="Digite o nome da sua Mãe" value="<?php echo $row_usuario['mae']; ?>"><br><br>

			<label>pai: </label>
			<input type="text" name="pai" placeholder="Digite o nome do seu Pai" value="<?php echo $row_usuario['pai']; ?>"><br><br>

			<label>cpf: </label>
			<input type="" name="cpf" placeholder="Digite o seu Cpf" value="<?php echo $row_usuario['cpf']; ?>"><br><br>

			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_usuario['email']; ?>"><br><br>

			<label>rg: </label>
			<input type="" name="rg" placeholder="Digite o seu Rg" value="<?php echo $row_usuario['rg']; ?>"><br><br>

			<label>Data de Nascimento: </label>
			<input type="" name="dtnasc" placeholder="Data de Nascimento" value="<?php echo $row_usuario['dtnasc']; ?>"><br><br>

			<label>Telefone, : </label>
			<input type="" name="telefone" placeholder="Digite o seu Telefone" value="<?php echo $row_usuario['telefone']; ?>"><br><br>

			<label>Whatsapp: </label>
			<input type="" name="zap" placeholder="Digite o wHATSAPP" value="<?php echo $row_usuario['zap']; ?>"><br><br>

			<label>rua: </label>
			<input type="" name="rua" placeholder="Digite A rua" value="<?php echo $row_usuario['rua']; ?>"><br><br>

			<label>numero: </label>
			<input type="" name="numero" placeholder="Numero Numero" value="<?php echo $row_usuario['numero']; ?>"><br><br>

			<label>bairro: </label>
			<input type="" name="bairro" placeholder="Digite o bairro" value="<?php echo $row_usuario['bairro']; ?>"><br><br>

			<label>cidade: </label>
			<input type="" name="cidade" placeholder="Digite a cidade" value="<?php echo $row_usuario['cidade']; ?>"><br><br>

			<label>estado: </label>
			<input type="" name="estado" placeholder="Digite o estado value= "<?php echo $row_usuario['estado']; ?>"><br><br>

			<label>indicacao: </label>
			<input type="" name="indicacao" placeholder="Digite a indicacao" value="<?php echo $row_usuario['indicacao']; ?>"><br><br>

			<label>cep: </label>
			<input type="" name="cep" placeholder="Digite o cep" value="<?php echo $row_usuario['cep']; ?>"><br><br>
			
			
			<input type="submit" value="Editar/Salvar">
		</form>
	</body>
</html>