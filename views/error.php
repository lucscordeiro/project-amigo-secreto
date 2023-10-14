<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">

      <div class="card border-danger mb-3">
        <div class="card-header bg-danger text-white">Erro</div>
        <div class="card-body">
          <?php
          echo '<p class="card-text">' . $this->dataUsers['error'] . '</p>';
          ?>
        </div>
      </div>

      <a href=" http://localhost/mvc/home" class="btn btn-primary">Retornar</a>

    </div>
  </div>
</div>