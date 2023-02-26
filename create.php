<?php
include 'includs/header.php';
require 'vendor/autoload.php';

if(isset($_GET['btn'])){

  $p = new \App\Model\Produto();
  $p->setNome($_GET['nome']);
  $p->setDescricao($_GET['descricao']);
  $p->setPreco($_GET['preco']);

  $pdao = new \App\Model\ProdutoDao();
  if($pdao->create($p)){
    header('location: index.php');
  }

}

?>

<h1 class="mt-4">Create New Produt</h1>
<!--Create-->
<form class="row g-3 needs-validation" action="" method="get" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" id="validationCustom01" required>
    <div class="invalid-feedback">
      porfavor digite um nome!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Descricao</label>
    <input type="text" name="descricao" class="form-control" id="validationCustom02" required>
    <div class="invalid-feedback">
      porfavor digite uma descricao!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Preco</label>
    <input type="text" name="preco" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      porfavor digite um prco!
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" name="categoria" id="validationCustom04" required>
      <option selected disabled value="">Categoria</option>
      <option>Fruta</option>
      <option>Vegetal</option>
      <option>Sereal</option>
      <option>outra</option>
    </select>
    <div class="invalid-feedback">
      porfavor selecione uma categoria!
    </div>
  </div>
  <div class="col-12">
    <button name="btn" class="btn btn-primary" type="submit">Registar</button>
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