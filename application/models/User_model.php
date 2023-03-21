<?php
/*
APLICATIVO TESTE - RAMON MOURA (MANYMINDS)
------------------------------
By: Ramon Felipe de Moura Santos
E-mail: ramonmoura2012@gmail.com
Todos os direitos reservados
*/
defined('BASEPATH') OR exit('Ação não permitida');

class User_model extends CI_Model {


  public function __construct() {
    $this->load->database();
}
  public function get_usuario()
  {
    $query = $this->db->query("SELECT * FROM users");
    return $query->result();
  
  }

}