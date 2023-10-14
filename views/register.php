<div class="container mt-5">
    <h2>Inserir Nome e Email</h2>
    <form action="http://localhost/mvc/register/saveAllDataUsers" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>