<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

    <a href="<?php echo base_url() . 'carroControl'; ?>">Voltar</a>
    <h1>Editar Carro</h1>
    <?php echo form_open('carroControl/atualizar'); ?>
    <input type="hidden" required value="<?php echo $carro[0]->idcarro; ?>" name="idcarro"/>
    <input type="text" required value="<?php echo $carro[0]->marca; ?>" name="marca"/>
    <br><br>
    <input type="text" required value="<?php echo $carro[0]->modelo; ?>" name="modelo"/>
    <br><br>
    <input type="number" required value="<?php echo $carro[0]->portas; ?>" name="portas"/>
    <br><br>
    <input type="color" required value="<?php echo $carro[0]->cor; ?>" name="cor"/>
    <br><br>
    <input type="text" required value="<?php echo $carro[0]->placa; ?>" name="placa"/>
    <br><br>
    <select name="idPessoa">
        <option value="">Proprietário</option>
        <?php foreach ($pessoas as $pes): ?>
            <option <?php if ($pes->idPessoa == $carro[0]->idPessoa) {
            echo 'selected';
        } ?> value="<?php echo $pes->idPessoa; ?>">
            <?php echo $pes->nome; ?>
            </option>
<?php endforeach; ?>
    </select>

    <input type="submit" value="Salvar" name="salvar">

<?php echo form_close(); ?>


</html>
