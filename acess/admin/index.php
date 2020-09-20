<?php
   // Conexão
   require_once 'db_connect.php';
   
   // Sessão
   session_start();
   
   // Botão enviar
   if(isset($_POST['btn-entrar'])):
   	$erros = array();
   	$login = mysqli_escape_string($connect, $_POST['login']);
   	$senha = mysqli_escape_string($connect, $_POST['senha']);
   
   	if(isset($_POST['lembrar-senha'])):
   
   		setcookie('login', $login, time()+3600);
   		setcookie('senha', md5($senha), time()+3600);
   	endif;
   
   	if(empty($login) or empty($senha)):
   		$erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
   	else:
   		// 105 OR 1=1 
   	    // 1; DROP TABLE teste
   
   		$sql = "SELECT login FROM usuarios_admin WHERE login = '$login'";
   		$resultado = mysqli_query($connect, $sql);		
   
   		if(mysqli_num_rows($resultado) > 0):
   		$senha = md5($senha);       
   		$sql = "SELECT * FROM usuarios_admin WHERE login = '$login' AND senha = '$senha'";
   
   
   
   		$resultado = mysqli_query($connect, $sql);
   
   			if(mysqli_num_rows($resultado) == 1):
   				$dados = mysqli_fetch_array($resultado);
   				mysqli_close($connect);
   				$_SESSION['logado'] = true;
   				$_SESSION['id_usuario'] = $dados['id'];
   				header('Location: painel/index.php');
   			else:
   				$erros[] = "<li> Usuário e senha não conferem </li>";
   			endif;
   
   		else:
   			$erros[] = "<li> Usuário inexistente </li>";
   		endif;
   
   	endif;
   
   endif;
   ?>
<html>
   <head>
      <title>Login</title>
      <meta charset="utf-8">
      <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
      <title>Login - Apse</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="wrapper fadeInDown">
         <div id="formContent">
            <!-- Tabs Titles -->
            <!-- Icon -->
            <div class="fadeIn first">
               <img src="css/img/logo_apse.png"  alt="User Icon" height="128" width="128" />
            </div>
            <?php 
               if(!empty($erros)):
               	foreach($erros as $erro):
               		echo $erro;
               	endforeach;
               endif;
               ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
               <input type="text" placeholder="Login" id="login" name="login" class="fadeIn second" value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>"><br>
               <input type="password" placeholder="Senha"  id="password" class="fadeIn third" name="senha" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>"><br>
               Lembrar senha: <input type="checkbox" name="lembrar-senha">
               <button type="submit" value="Log In" class="fadeIn fourth" name="btn-entrar"> Entrar </button>
            </form>
            <!-- Remind Passowrd -->
            <div id="formFooter">
               <a class="underlineHover" href="#">Esqueceu a senha?</a>
            </div>
         </div>
      </div>
      </div>
   </body>
</html>