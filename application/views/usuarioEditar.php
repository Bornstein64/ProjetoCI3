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

    <a href="<?php echo base_url() . 'usuarioControl'; ?>" >Voltar</a>
    <h1>Editar Usuário</h1>
    <?php echo form_open('usuarioControl/atualizar'); ?>
    <input type="hidden" required value="<?php echo $user[0]->idusuario; ?>" name= "idusuario"/>
    <input type="text" required value="<?php echo $user[0]->nomeUsuario; ?>" name= "nomeUsuario"/>
    <br><br>
    <input type="text" required value="<?php echo $user[0]->user; ?>"name= "user"/>
    <br><br>
    <input type="radio" required value="admin"
    <?php
    if ($user[0]->perfilAcesso == 'admin') {
        echo'checked';
    }
    ?> name="perfilAcesso"/>Administrador
    <input type="radio" required value="user"
           <?php
           if ($user[0]->perfilAcesso == 'user') {
               echo'checked';
           }
           ?> name="perfilAcesso"/>Usuário
    <br><br>
    <input type="submit" value="Salvar" name="salvarPF">

<?php echo form_close(); ?>


</html>