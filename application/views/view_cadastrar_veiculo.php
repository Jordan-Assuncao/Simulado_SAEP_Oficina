<div class="container">
    <div class="row mt-5">
        <h1>Cadastro de Veiculo</h1>
    </div>
    <div class="row mt-5">    
    <form action="salvar_novo_veiculo" method="post">
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo" aria-describedby="emailHelp" required>
        
        </div>
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" required>
        </div>
        <div class="mb-3">
            <label for="placa" class="form-label">Placa</label>
            <input type="text" class="form-control" id="placa" name="placa" required>
        </div>
        <input type="hidden" id="cliente_idcliente" name="cliente_idcliente" value="<?php echo $user_id; ?>">
        <button type="submit" class="btn btn-primary">Cadastrar!</button>
        </form>
    </div>
</div>