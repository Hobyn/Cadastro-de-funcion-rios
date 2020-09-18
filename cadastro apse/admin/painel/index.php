<?php
   session_start();
   include_once('conexao.php');
   ?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>
         $(document).ready(function(){
         
         
         
         $('#todos').click(function(){
          var val = this.checked;
          
          $('.text-center').each(function(){
            $(this).prop('checked',val);
         
          });
         
         });
         });
      </script>
      <meta charset="utf-8">
      <title>Contato</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <head>
   <body>
      <?php
         if(isset($_POST['pesquisa'])) {
              $pesquisar = $_POST['pesquisa'] ;
              $sql = "SELECT * FROM cadastro
               WHERE nome LIKE '%$pesquisar%' OR bairro LIKE '%$pesquisar%' OR indicacao LIKE '%$pesquisar%' OR dtnasc LIKE '%$pesquisar%'";
         }else{
            $sql = "SELECT * FROM cadastro";
         }
         
         
         //Verificar se esta sendo passado na URL a página atual, senão é atribuido a pagina
         $pagina=(isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
         				
         //Selecionar todos os itens da tabela 
         $result_msg_contato = $sql;
         $resultado_msg_contatos = mysqli_query($conn , $result_msg_contato);
         
         //Contar o total de itens
         $total_msg_contatos = mysqli_num_rows($resultado_msg_contatos);
         
         //Seta a quantidade de itens por página
         $quantidade_pg = 100;
         
         //calcular o número de páginas 
         $num_pagina = ceil($total_msg_contatos/$quantidade_pg);
         
         //calcular o inicio da visualizao	
         $inicio = ($quantidade_pg*$pagina)-$quantidade_pg;
         
         //Selecionar  os itens da página
         $result_msg_contatos = $sql." LIMIT $inicio, $quantidade_pg";
         $resultado_msg_contatos = mysqli_query($conn , $result_msg_contatos);
         $total_msg_contatos = mysqli_num_rows($resultado_msg_contatos);
         
                
                  ?>
      <div class="container theme-showcase" role="main">
         <div class="page-header">
            <h1>Lista de Cadastro</h1>
         </div>
         <form class="form-horizontal" method="POST" action="">
            <div class="form-group">
               <label class="col-sm-2 control-label">Nome</label>
               <div class="col-sm-8">
                  <input type="text"  name="pesquisa"   class="form-control"  placeholder="Nome dos Usuários" value="">
               </div>
               <div class="col-sm-2">
                  <button type="submit" class="btn btn-info">Pesquisar</button>
               </div>
            </div>
         </form>
         <hr>
         <form method="POST" action="gerar_planilha_especifica.php">
            <div class="row espaco">
               <div class="pull-right">					
                  <a href="index.php"><button type='button' class='btn btn-sm btn-primary'>Inicio Painel</button></a>
                  <a href="../../index.php"><button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>

                  <a href="gerar_planilha.php"><button type='button' class='btn btn-sm btn-danger'>Toda Base Relatório</button></a>
                  <input type="submit" value="Relatório Especifico" class='btn btn-sm btn-warning'>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <table class="table">
                     <thead>
                        <tr>
                           <th class="text-center">Id</th>
                           <th class="text-center">Nome </th>
                           <th class="text-center">Nome da mãe</th>
                           <th class="text-center">Nome do Pai</th>
                           <th class="text-center">cpf</th>
                           <th class="text-center">rg</th>
                           <th class="text-center">email</th>
                           <th class="text-center">Data Nasc</th>
                           <th class="text-center">telefone</th>
                           <th class="text-center">Whatsapp</th>
                           <th class="text-center">rua</th>
                           <th class="text-center">numero</th>
                           <th class="text-center">bairro</th>
                           <th class="text-center">cidade</th>
                           <th class="text-center">estado</th>
                           <th class="text-center">indicacao</th>
                           <th class="text-center">cep</th>
                        </tr>
                     </thead>
                     <div><input id="todos" type="checkbox" name="nameAll" /> Marcar / desmarcar todos </div>
                     <tbody>
                        <?php while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){?>
                        <tr>
                           <?php $id = $row_msg_contatos["id"]; ?>
                           <td class="text-center">
                              <?php echo "<input type='checkbox' name='msg_contato[$id]' value='1'" ?>
                           <td class="text-center"><?php echo $row_msg_contatos["id"]; ?></td>
                           <td class="text-center"><?php echo $row_msg_contatos["nome"]; ?></td>
                           <td class="text-center"><?php echo $row_msg_contatos["mae"]; ?></td>
                           <td class="text-center"><?php echo $row_msg_contatos["pai"]; ?></td>
                           <td class="text-center"><?php echo $row_msg_contatos["cpf"]; ?></td>
                           <td class="text-center"><?php echo $row_msg_contatos["rg"]; ?></td>
                           <td class="text-center"><?php echo $row_msg_contatos["email"]; ?></td>
                           <td class="text-center"><?php echo $row_msg_contatos["dtnasc"]; ?></td>
                           <td class="text-center"><?php echo $row_msg_contatos["telefone"]; ?></td>
                           <td class="text-center"><?php echo $row_msg_contatos["zap"]; ?></td>
                           <td class="text-center"><?php echo $row_msg_contatos["rua"]; ?></td>
                           <td class="text-center"><?php echo $row_msg_contatos["numero"]; ?></td>
                           <td class="text-center"><?php echo $row_msg_contatos["bairro"]; ?></td>
                           <td class="text-center"><?php echo $row_msg_contatos["cidade"]; ?></td>
                           <td class="text-center"><?php echo $row_msg_contatos["estado"]; ?></td>
                           <td class="text-center"><?php echo $row_msg_contatos["indicacao"]; ?></td>
                           <td class="text-center"><?php echo $row_msg_contatos["cep"]; ?></td>
                           <td class="text-center">
                           <?php	
                           echo "<a href='edit_usuario.php?id=" . $row_msg_contatos['id'] . "'>Editar</a><br><hr>";
                           ?>
                              <?php 
                                 echo"<a href='proc_apagar_usuario.php?id=" . $row_msg_contatos['id'] . "'>Apagar</a><br><hr>";
                                
                                 
                                 ?>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </form>
         <?php
            if(!isset($_POST['pesquisa'])){
            //Verificar pagina anterior e posterior
            $pagina_anterior = $pagina - 1;
            $pagina_posterior = $pagina + 1;
            ?>
         <nav class="text-center">
            <ul class="pagination">
               <li>
                  <?php 
                     if($pagina_anterior != 0){
                     	?><a href="index.php?link=50&pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  </a><?php
                     }else{
                     	?><span aria-hidden="true">&laquo;</span><?php
                     }
                     ?>
               </li>
               <?php
                  //Apresentar a paginação
                  for($i = 1; $i < $num_pagina + 1; $i++){
                  	?>
               <li><a href="index.php?link=50&pagina=<?php echo $i; ?>">
                  <?php echo $i; ?>
                  </a>
               </li>
               <?php
                  }
                  ?>
               <li>
                  <?php 
                     if($pagina_posterior <= $num_pagina){
                     	?><a href="index.php?link=50&pagina=<?php echo $pagina_posterior; ?>" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  </a><?php
                     }else{
                     	?><span aria-hidden="true">&raquo;</span><?php
                     }
                     ?>
               </li>
            </ul>
         </nav>
         <?php } ?>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>