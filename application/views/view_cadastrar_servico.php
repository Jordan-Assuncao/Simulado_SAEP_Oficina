<div class="container">
    <div class="row mt-5">
        <h1>CADASTRAR SERVICO</h1>
<br>
    </div>
    <div>
    <?php if (empty($carros_cliente)): ?>
        <p>O cliente não possui carros cadastrados.</p>
    <?php else: ?>
        <form action="<?php echo base_url('Servicos/salvar_novo_servico'); ?>" method="post">
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição do Serviço</label>
                <input type="text" class="form-control" id="descricao" name="descricao" required>
            </div>
            <div class="mb-3">
                <label for="veiculo_idveiculo" class="form-label">Selecione o Veículo</label>
                <select class="form-control" id="veiculo_idveiculo" name="veiculo_idveiculo" required>
                    <?php foreach ($carros_cliente as $carro): ?>
                        <option value="<?php echo $carro->idveiculo; ?>">
                            Modelo: <?php echo $carro->modelo; ?>, Marca: <?php echo $carro->marca; ?>, Placa: <?php echo $carro->placa; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Solicitar Serviço!</button>
        </form>
    <?php endif; ?>
    </div>


</div>