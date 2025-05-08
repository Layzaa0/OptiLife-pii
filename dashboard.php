
<link rel="stylesheet" href="dashboard.css">
<style>
  a{
    padding:20px
  }
</style>
<?php
// Incluindo a conexão
include("conexao.php");

// fazendo a busca no banco
$sql = "SELECT * FROM usuarios";
//Variável result responsável por trazer os dados do banco para
// Interface do usuário
$result = mysqli_query($conexao, $sql);
?>

<div class="container">
    <h2>Lista de Usuários</h2>
    <table>
      <tr>
        <th>ID</th>
        <th>Nome do Usuário</th>
        <th>E-mail</th>
        <th>Senha</th>
        <th>Telefone</th>
      
      </tr>
      <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $row['id_usuario']; ?></td>
          <td><?php echo $row['nome']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['senha']; ?></td>
          <td><?php echo $row['telefone']; ?></td>
                  <a href="deletar.php? id=<?php echo $row['id_usuario'];?>" >Deletar</a>
                  <a href="editar_cadastro.php? id=<?php echo $row['id_usuario'];?>" >Editar</a>
        </td>
        </td>

        </tr>
      <?php } ?>
    </table>
  </div>