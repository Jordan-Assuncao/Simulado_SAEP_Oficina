<div class="container">
    <div class="row mt-5">
        <h1>Cadastro de cliente</h1>
    <div class="row mt-5">
    
    <form action="salvar_novo_cliente" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
        
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar!</button>
        </form>
    </div>
    <br>
    <form action="../Clientes/index" method="post">
        <div>
            <br>
        <button type="submit" class="btn btn-danger">Voltar!</button>
        </div>
        </form>
    </div>
</div>