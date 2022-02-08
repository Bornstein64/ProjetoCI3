<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CarroControl
 *
 * @author Stein
 */
class carroControl extends CI_Controller {

    //put your code here

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('estou_logado')) {
            redirect('Login');
        }   
        $this->load->model('Carro_model', 'carro');
        //'carro' é um alias/apelido para 'Carro_model'
    }

    public function index() {
        $dados['carros'] = $this->carro->listar();
        $this->load->view('carroCadastro', $dados);
    }

    public function inserir() {
        //este lado do BD = Este lado da View/Form
        $dados['marca'] = $this->input->post('marca');
        $dados['modelo'] = $this->input->post('modelo');
        $dados['portas'] = $this->input->post('portas');
        $dados['cor'] = $this->input->post('cor');
        $dados['placa'] = $this->input->post('placa');
        $dados['idPessoa'] = $this->input->post('idPessoa');
       
        $result = $this->carro->inserir($dados);
        if ($result == true) {
            redirect('carroControl');
        } else {
            redirect('carroControl');
        }
    }

    public function excluir($id) {
        $result = $this->carro->deletar($id); //carro é o alias do Carro_model
        if ($result == true) {
            //msg true
            redirect('carroControl');
        } else {
            //msg err
            redirect('carroControl');
        }
    }

    public function editar($id) {
        $dados['carro'] = $this->carro->editar($id);
        $this->load->view('carroEditar', $dados);
    }

    public function atualizar() {
        //este lado do BD = Este lado da View/Form
        $dados['idcarro'] = $this->input->post('idcarro');
        $dados['marca'] = $this->input->post('marca');
        $dados['modelo'] = $this->input->post('modelo');
        $dados['portas'] = $this->input->post('portas');
        $dados['cor'] = $this->input->post('cor');
        $dados['placa'] = $this->input->post('placa');
        $dados['idPessoa'] = $this->input->post('idPessoa');
        
        if ($this->carro->atualizar($dados) == true) {
            //msg true
            redirect('carroControl');
        } else {
            //msg err
            redirect('carroControl');
        }
    }

}
