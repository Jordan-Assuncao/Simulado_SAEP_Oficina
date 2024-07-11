<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicos extends CI_Controller {

	public function index()
	{
		$this->listar();
	}

	public function cadastrar_servico(){
        $this->load->library('session');
        // Carregar modelo para acessar os carros do cliente
        $this->load->model('Clientes_model');
    
        $user_id = $this->session->userdata('user_id');

        $carros_cliente = $this->Clientes_model->get_veiculo_cliente($user_id);

        // Passar os carros para a view
        $data['carros_cliente'] = $carros_cliente;
		$this->load->view('view_topo');
		$this->load->view('view_cadastrar_servico', $data);
		$this->load->view('view_rodape');
	}

	public function salvar_novo_servico(){
		$this->load->library('session');
        // Carregar modelo para acessar os carros do cliente
        $this->load->model('Clientes_model');
    
        $user_id = $this->session->userdata('user_id');

		//Carregando o Model Clientes
		$this->load->model('Servicos_model');
		$carros_cliente = $this->Clientes_model->get_veiculo_cliente($user_id);

        // Passar os carros para a view
        $data['carros_cliente'] = $carros_cliente;

		//Chamando o método insert do Model passando os dados do form
		$this->Servicos_model->insert($this->input->post());
        
        $this->load->view('view_topo');
        $this->load->view('view_logado', $data);
        $this->load->view('view_rodape');
	}
}
?>