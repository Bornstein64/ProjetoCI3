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
    <body>
        <a href="<?php echo base_url() . 'home'; ?>">Voltar</a>
        <h1>Cadastro Carros</h1>
        <?php echo form_open('carroControl/inserir'); ?>
        <input type="text" required placeholder="Marca aqui..." name="marca"/>
        <br><br>
        <input type="text" required placeholder="Modelo aqui..." name="modelo"/>
        <br><br>
        <input type="number" required placeholder="Nº Portas aqui..." name="portas"/>
        <br><br>
        <input type="color" required placeholder="Cor aqui..." name="cor"/>
        <br><br>
        <input type="text" required placeholder="Placa aqui..." name="placa"/>
        <br><br>
        <input type="text" required placeholder="Propritário aqui..." name="idPessoa"/>
        <br><br>
        
        <input type="submit" value="Salvar" name="salvarPF">
        <input type="reset" value="Limpar" name="limpar">

        <?php echo form_close(); ?>

        <h2>Lista Carros</h2>
        <table>
            <thead>
                <tr>
                    <th>Marca</th><th>Modelo</th><th>Placa</th><th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carros as $cars): ?>
                    <tr>
                        <td><?php echo $cars->marca; ?></td>
                        <td><?php echo $cars->modelo; ?></td>
                        <td><?php echo $cars->placa; ?></td>
                        <td>
                            <a href="<?php echo base_url() . 'carroControl/editar/' . $cars->idcarro; ?>" >Editar</a> | 
                            <a href="<?php echo base_url() . 'carroControl/excluir/' . $cars->idcarro; ?>" >Deletar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>       
    </body>
</html>