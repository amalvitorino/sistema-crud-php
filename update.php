<?php
include 'includs/header.php';
require 'vendor/autoload.php';

$pdao = new \App\Model\ProdutoDao();

if(isset($_GET['id'])){
  $resultado = $pdao->getProduto($_GET['id']);
  $p1 = new \App\Model\Produto();
  foreach($resultado as $r){
    $p1->setId($r['id']);
    $p1->setNome($r['nome']);
    $p1->setDescricao($r['descricao']);
    $p1->setPreco($r['preco']);
  }
}

if(isset($_GET['btn'])){
  $p = new \App\Model\Produto();
  $p = new \App\Model\Produto();
  $p->setId($_GET['id']);
  $p->setNome($_GET['nome']);
  $p->setDescricao($_GET['descricao']);
  $p->setPreco($_GET['preco']);


  if($pdao->update($p)){
    header('location: index.php');
  }

}

?>

<h1 class="mt-4">Create New Produt</h1>
<!--Create-->
<form class="row g-3 needs-validation" action="" method="get" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" id="validationCustom01" value="<?php echo $p1->getNome() ?>" required>
    <div class="invalid-feedback">
      porfavor digite um nome!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Descricao</label>
    <input type="text" name="descricao" class="form-control" id="validationCustom02" value="<?php echo $p1->getDescricao() ?>" required>
    <div class="invalid-feedback">
      porfavor digite uma descricao!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Preco</label>
    <input type="text" name="preco" class="form-control" id="validationCustom03" value="<?php echo $p1->getPreco() ?>" required>
    <div class="invalid-feedback">
      porfavor digite um prco!
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" name="categoria" id="validationCustom04" required>
      <option disabled value="">Categoria</option>
      <option selected>Fruta</option>
      <option>Vegetal</option>
      <option>Sereal</option>
      <option>outra</option>
    </select>
    <div class="invalid-feedback">
      porfavor selecione uma categoria!
    </div>
  </div>
  <input type="hidden" name="id" value="<?php echo $p1->getId(); ?>">
  <div class="col-12">
    <button name="btn" class="btn btn-primary" type="submit">Editar</button>
  </div>
</form>



<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
  })()
</script>
<?php include 'includs/footer.php' ?>