<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto</title>
    </head>
    <body>
         <?php echo $this->session->userdata('logado')->nomeUsuario; ?>
         | <a class="btn btn-primary" href="<?php echo base_url(); ?>login/sair">Sair</a>
        <h1>Home</h1>
        <p>Olá mundo!</p>
        <a href="<?php echo base_url() . 'pessoa'; ?>">Cadastro Pessoas</a> |    
        <a href="<?php echo base_url() . 'usuarioControl'; ?>">Cadastro Usuário</a> |    
        <a href="<?php echo base_url() . 'carroControl'; ?>">Cadastro Carros</a>  
        
    </body>
</html>
