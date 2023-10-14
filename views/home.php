<div style="text-align: center;">
    <h2>Seja bem-vindo(a)!</h2>
    <h3>Pronto para organizar o seu amigo secreto?</h3>
</div>

<div class="d-flex justify-content-center align-items-center mt-4 mb-4" style="height: 100%;">

    <div class="card" style="width: 40rem;">
        <div class="card-body">
            <h5 class="card-title"><i class="fas fa-user"></i> Participantes</h5>
            <ul class="list-group list-group-flush">
                <?php if (empty($this->dataUsers)) {
                    echo "Registre os participantes do seu amigo secreto";
                } else { ?>
                    <?php foreach ($this->dataUsers as $data) : ?>
                        <li class="list-group-item">

                            <?php
                            echo $data['nome'];
                            echo "<br>";
                            echo $data['email'];
                            ?>

                            <form action="http://localhost/mvc/edit" method="post" style="display: inline;">
                                <input type="hidden" name="user_id" value="<?= $data['user_id'] ?>">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                            </form>

                            <a href="#deleteModal" class="btn btn-danger" role="button" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                <i class="fas fa-trash"></i>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php } ?>
            </ul>

            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <a href="register" class="btn btn-primary mt-2">Novo Participante</a>
                <a href="sorteio" class="btn btn-success mt-2">Sortear</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmação de Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza de que deseja remover este participante?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form action="http://localhost/mvc/home/deleteUser" method="post" style="display: inline;">
                    <input type="hidden" name="user_id" value="<?= $data['user_id'] ?>">
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>