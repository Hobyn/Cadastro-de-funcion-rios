<?php
   session_start();
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
      <title>CADASTRO - APSE</title>
      <script src="js.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
      <script>
         $(document).ready(function(){
         $('#zap').mask('55 00 00000-0000');
         });
      </script>
   </head>
   <body>
      <!DOCTYPE html>
      <head>
      </head>
      <body>
         <form method="POST"class="form-horizontal" action="processa.php">
            <fieldset>
               <div class="panel panel-primary">
                  <div class="panel-heading">Cadastro APSE</div>
                  <?php
                     if(isset($_SESSION['msg'])){
                     	echo $_SESSION['msg'];
                     	unset($_SESSION['msg']);
                     }
                     ?>
                  <div class="panel-body">
                     <div class="form-group">
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
                           <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                        </div>
                     </div>
                     <!-- Text input-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           Filiação PAI 
                           <h11>*</h11>
                        </label>
                        <div class="col-md-8">
                           <input id="pai" name="pai" placeholder="" class="form-control input-md" required="" type="text">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           MÃE
                           <h11>*</h11>
                        </label>
                        <div class="col-md-8">
                           <input id="mae" name="mae" placeholder="" class="form-control input-md" required="" type="text">
                        </div>
                     </div>
                     <!-- Text input-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           CPF 
                           <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                           <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
                        </div>
                        <label class="col-md-1 control-label" for="Nome">
                           RG 
                           <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                           <input id="rg" name="rg" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
                        </div>
                        <label class="col-md-1 control-label" for="Nome">
                           Nascimento
                           <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                           <input id="dtnasc" name="dtnasc" placeholder="AAAA/MM/DD" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('####-##-##', this)" onBlur="showhide()">
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
                                 OnKeyPress="formatar('## #####-####', this)">
                           </div>
                        </div>
                        <label class="col-md-1 control-label" for="prependedtext">Telefone Whatsapp</label>
                        <div class="col-md-2">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                              <input id="zap" name="zap" class="form-control" placeholder="55 81 XXXXX-XXXX" type="text" maxlength="13"  >
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
                              <input id="email" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
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
                           <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
                        </div>
                        <div class="col-md-2">
                           <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                        </div>
                     </div>
                     <!-- Prepended text-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
                        <div class="col-md-4">
                           <div class="input-group">
                              <span class="input-group-addon">Rua</span>
                              <input id="rua" name="rua" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="input-group">
                              <span class="input-group-addon">
                                 Nº 
                                 <h11>*</h11>
                              </span>
                              <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="input-group">
                              <span class="input-group-addon">
                              Complemento 
                              </span>
                              <input id="comp" name="comp" placeholder="Complemento" class="form-control input-md" required="" type="text">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext"></label>
                        <div class="col-md-3">
                           <div class="input-group">
                              <span class="input-group-addon">Bairro</span>
                              <input id="bairro" name="bairro" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="input-group">
                              <span class="input-group-addon">Cidade</span>
                              <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="input-group">
                              <span class="input-group-addon">Estado</span>
                              <input id="estado" name="estado" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-2 control-label" for="Nome">
                        Responsavel Pela Indicação 
                        <h11>*</h11>
                     </label>
                     <div class="col-md-8">
                        <input id="indicacao" name="indicacao" placeholder="" class="form-control input-md" required="" type="text">
                     </div>
                  </div>
               </div>
               <!-- Button (Double) -->
               <div class="form-group">
               <label class="col-md-2 control-label" for="Cadastrar"></label>
               <div class="col-md-8">
                  <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                  <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
               </div>
               <div class="form-group">
                  <div>
                  </div>
               </div>
            </fieldset>
         </form>
         <form action="../admin/painel/index.php">
            <input type="submit"  class="btn btn-danger" style="   
               color: #fff;
               background-color: #E6C972!important;
               border-color: #E6C972;!important" value="Painel Administrativo"/>
         </form>
   </body>
</html>
<?php