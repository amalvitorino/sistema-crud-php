<?php

include 'includs/header.php';
require 'vendor/autoload.php';

$pdo = new \App\Model\ProdutoDao();
?>

<h1 class="mt-4">List of produts</h1>
<a href="create.php" class="btn btn-success">Create</a>
<table class="table table-bordered mt-2">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">Option</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pdo->read() as $p) :  ?>
      <tr>
        <th scope="row">1</th>
        <td><?php echo $p['nome'] ?></td>
        <td><?php echo $p['descricao'] ?></td>
        <td><?php echo $p['preco'] ?></td>
        <td>
          <a href="" class="btn btn-danger ">Eliminar</a>
        </td>
        <td>
          <a href="" class="btn btn-primary">Editar</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php
if ($pdo->read() == null) { ?>
  <div class="alert alert-warning text-center" role="alert">
    Nenhum registo foi encotrado!
  </div>
<?php } ?>

<?php include 'includs/footer.php' ?>