<?php
class Clientes_model extends CI_Model {

    /*public function get_clientes(){
        $query = $this->db->get('clientes');
        return $query->result();
    }*/

    //Insere um novo registro
    //$cliente é contem os dados do form
    public function insert($cliente){
        $this->db->insert('cliente', $cliente);
    }

    public function login($email, $senha) {
        // Query to fetch user by email and password
        $this->db->where('email', $email);
        $this->db->where('senha', $senha); // Directly comparing the password
        $query = $this->db->get('cliente');

        if ($query->num_rows() == 1) {
            return $query->row(); // Return the user object
        } else {
            // No user found or password mismatch
            return false;
        }
    }


    public function get_veiculo_cliente($cliente_id) {
        // Consulta para recuperar os carros do cliente
        $this->db->select('*');
        $this->db->from('veiculo');
        $this->db->where('cliente_idcliente', $cliente_id);
        $query = $this->db->get();

        // Verificar se há resultados
        if ($query->num_rows() > 0) {
            // Retornar os resultados como um array de objetos
            return $query->result();
        } else {
            // Se não houver carros associados a esse cliente, retornar um array vazio
            return array();
        }
    }
}

?>