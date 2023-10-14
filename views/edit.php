<div class="container mt-5">
    <h2>Editar Usuário</h2>
    <?php foreach($this->dataUsers as $data){ ?>

        <form action="http://localhost/mvc/edit/editDataUser" method="post">

            <input type="hidden" name="user_id" value='<?= $data["user_id"] ?>'>
            

            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" value="<?= $data['nome'] ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="<?= $data['email'] ?>" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
        
    <?php }?>
</div>