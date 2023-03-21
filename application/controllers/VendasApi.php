<?php
/*
APLICATIVO TESTE - RAMON MOURA (MANYMINDS)
------------------------------
By: Ramon Felipe de Moura santos
E-mail: ramonmoura2012@gmail.com
Todos os direitos reservados
*/
defined('BASEPATH') OR exit('Ação não permitida');

class VendasApi extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->model('Vendas_model', 'VendasModel');
      $this->load->helper('response');
  }

  public function get_vendas()
  {
    try {
    
      // Get all order
      $vendas = $this->VendasModel->get_all();
      foreach ($vendas as $i =>$venda) {
      $vendas[$i]->itens[] = $this->VendasModel->get_itens_venda($venda->venda_id);

      }      
      echo response(200, [
        'return' => true,
        'mensagem' => 'sucesso',
        'dados' => $vendas
      ]);

    } catch (\Throwable $th) {
      echo response(500, [
        'return' => false,
        'mensagem' => 'Ocorreu um erro inesperado'
      ]);

    }
     
  }

}
