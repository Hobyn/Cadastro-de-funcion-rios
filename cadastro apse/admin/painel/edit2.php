<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM cadastro WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
      <title>Editar Usuario - APSE</title>
      <script src="js.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
   </head>
   <body>
      <!DOCTYPE html>
      <head>
      </head>
      <body>
         <form method="POST"class="form-horizontal" action="proc_edit_usuario.php">
            <fieldset>
               <div class="panel panel-primary">
                  <div class="panel-heading">Editar Usuario <?php echo $row_usuario['nome']; ?></div>
                  <?php
                     if(isset($_SESSION['msg'])){
                     	echo $_SESSION['msg'];
                     	unset($_SESSION['msg']);
                     }
                     ?>
                  <div class="panel-body">
                     <div class="form-group">
                     <input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
                        <!--
                           <div class="form-group">   
                           <div class="col-md-4 control-label">
                               <img id="logo" src="http://blogdoporao.com.br/wp-content/uploads/2016/12/Faculdade-pitagoras.png"/>
                           </div>
                           <div class="col-md-4 control-label">
                               <h1>Cadastro de Cliente</h1>
                               
                           </div>
                           </div>
                               -->
                        <div class="col-md-11 control-label">
                           <p class="help-block">
                              <h11>*</h11>
                              Campo Obrigatório 
                           </p>
                        </div>
                     </div>
                     <!-- Text input-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           Nome 
                           <h11>*</h11>
                        </label>
                        <div class="col-md-8">
                           <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text" value="<?php echo $row_usuario['nome']; ?>">
                        </div>
                     </div>
                     <!-- Text input-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           Filiação PAI 
                           <h11>*</h11>
                        </label>
                        <div class="col-md-8">
                           <input id="pai" name="pai" placeholder="" class="form-control input-md" required="" type="text"value="<?php echo $row_usuario['pai']; ?>" >
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           MÃE
                           <h11>*</h11>
                        </label>
                        <div class="col-md-8">
                           <input id="mae" name="mae" placeholder="" class="form-control input-md" required="" type="text" value="<?php echo $row_usuario['mae']; ?>">
                        </div>
                     </div>
                     <!-- Text input-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           CPF 
                           <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                           <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" value="<?php echo $row_usuario['cpf']; ?>" >
                        </div>
                        <label class="col-md-1 control-label" for="Nome">
                           RG 
                           <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                           <input id="rg" name="rg" placeholder="Apenas números" class="form-control input-md" required="" type="text"  value="<?php echo $row_usuario['rg']; ?>">
                        </div>
                        <label class="col-md-1 control-label" for="Nome">
                           Nascimento
                           <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                           <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()" value="<?php echo $row_usuario['dtnasc']; ?>">
                        </div>
                     </div>
                     <!-- Prepended text-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext">
                           Telefone 
                           <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                              <input id="telefone" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                 OnKeyPress="formatar('## #####-####', this)" value="<?php echo $row_usuario['telefone']; ?>">
                           </div>
                        </div>
                        <label class="col-md-1 control-label" for="prependedtext">Telefone Whatsapp</label>
                        <div class="col-md-2">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                              <input id="zap" name="zap" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13"  pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                 OnKeyPress="formatar('## #####-####', this)"value="<?php echo $row_usuario['zap']; ?>">
                           </div>
                        </div>
                     </div>
                     <!-- Prepended text-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext">
                           Email 
                           <h11>*</h11>
                        </label>
                        <div class="col-md-5">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                              <input id="email" name="email" class="form-control" placeholder="email@email.com" required="" type="text"  value="<?php echo $row_usuario['email']; ?>">
                           </div>
                        </div>
                     </div>
                     <!-- Search input-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="CEP">
                           CEP 
                           <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                           <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required=""  maxlength="8" pattern="[0-9]+$" value="<?php echo $row_usuario['cep']; ?>">
                        </div>

                     </div>
                     <!-- Prepended text-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
                        <div class="col-md-4">
                           <div class="input-group">
                              <span class="input-group-addon">Rua</span>
                              <input id="rua" name="rua" class="form-control" placeholder="" required=""  type="text"value="<?php echo $row_usuario['rua']; ?>">
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="input-group">
                              <span class="input-group-addon">
                                 Nº 
                                 <h11>*</h11>
                              </span>
                              <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text" value="<?php echo $row_usuario['numero']; ?>">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="input-group">
                              <span class="input-group-addon">Bairro</span>
                              <input id="bairro" name="bairro" class="form-control" placeholder="" required=""  type="text" value="<?php echo $row_usuario['bairro']; ?>">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext"></label>
                        <div class="col-md-4">
                           <div class="input-group">
                              <span class="input-group-addon">Cidade</span>
                              <input id="cidade" name="cidade" class="form-control" placeholder="" required=""   type="text" value="<?php echo $row_usuario['cidade']; ?>">
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="input-group">
                              <span class="input-group-addon">Estado</span>
                              <input id="estado" name="estado" class="form-control" placeholder="" required=""   type="text" value= "<?php echo $row_usuario['estado']; ?>" >
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           Responsavel Pela Indicação 
                           <h11>*</h11>
                        </label>
                        <div class="col-md-8">
                           <input id="indicacao" name="indicacao" placeholder="" class="form-control input-md" required="" type="text" value="<?php echo $row_usuario['indicacao']; ?>">
                        </div>
                     </div>
                  </div>
                  <!-- Button (Double) -->
                  <div class="form-group">
                     <label class="col-md-2 control-label" for="salvar"></label>
                    
                     <input class="btn btn-success" type="submit" value="Editar/Salvar">
                  </div>

                  <div class="form-group">
                 

                  <div>
               </div>
               </div>
            </fieldset>
            
         </form>
         <form action="index.php">
            <input type="submit"  class="btn btn-danger" style="   
               color: #fff;
               background-color: #E6C972!important;
               border-color: #E6C972;!important" value="Painel Administrativo"/>
         </form>

   </body>
</html>
<?php