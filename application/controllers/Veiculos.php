<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Veiculos extends CI_Controller {

	public function index()
	{
		$this->listar();
	}

	public function cadastrar_veiculo(){
        $this->load->library('session');
        $data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('view_topo');
		$this->load->view('view_cadastrar_veiculo', $data);
		$this->load->view('view_rodape');
	}

	public function salvar_novo_veiculo(){
		$this->load->library('session');
        // Carregar modelo para acessar os carros do cliente
        $this->load->model('Clientes_model');
    
        $user_id = $this->session->userdata('user_id');
		//Carregando o Model Clientes
		$this->load->model('Veiculos_model');

		//Chamando o método insert do Model passando os dados do form
		$this->Veiculos_model->insert($this->input->post());
		$carros_cliente = $this->Clientes_model->get_veiculo_cliente($user_id);

        // Passar os carros para a view
        $data['carros_cliente'] = $carros_cliente;

        $this->load->view('view_topo');
        $this->load->view('view_logado', $data);
        $this->load->view('view_rodape');
	}

	
}