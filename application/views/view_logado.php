<div class="container">
    <div class="row mt-5">
        <h1>BEM VINDO A OFICINA</h1>
    </div>
    <div class="row mt-5">
    
    <form action="<?php echo base_url('Veiculos/cadastrar_veiculo'); ?>" method="post">
        <button type="submit" class="btn btn-primary">Cadastrar Veiculo!</button>
        </form>
    </div>
</div>
<br>
<div class="container">
    <div class="row mt-5">
        <h1>Sua lista de veículos</h1>
        <br>
        <?php if (empty($carros_cliente)): ?>
            <p>O cliente não possui carros cadastrados.</p>
        <?php else: ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Modelo</th>
                        <th>Marca</th>
                        <th>Placa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($carros_cliente as $carro): ?>
                        <tr>
                            <td><?php echo $carro->modelo; ?></td>
                            <td><?php echo $carro->marca; ?></td>
                            <td><?php echo $carro->placa; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>
<br>
<div class="container">
    <div class="mb-3">
        <form action="<?php echo base_url('Servicos/cadastrar_servico'); ?>" method="post">
            <button type="submit" class="btn btn-warning">Solicitar Serviço!</button>
        </form>
    </div>
</div>
<br>
<div class="container">
    <div class="mb-3">
        <form action="<?php echo base_url('Clientes/logout'); ?>" method="post">
            <button type="submit" class="btn btn-danger">Logout!</button>
        </form>
    </div>
</div>
</div>