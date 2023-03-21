<?php
/*
APLICATIVO TESTE - RAMON MOURA (MANYMINDS)
------------------------------
By: Ramon Felipe de Moura santos
E-mail: ramonmoura2012@gmail.com
Todos os direitos reservados
*/
defined('BASEPATH') OR exit('Ação não permitida');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index() {

        $data = array(
            'titulo' => 'Login',
        );

        $this->load->view('layout/header', $data);
        $this->load->view('login/index');
        $this->load->view('layout/footer');
    }

    public function auth() {

        $identity = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $remember = FALSE; // remember the user
        
        if ($this->ion_auth->login($identity, $password, $remember)) {
            redirect('/');
            
        } else {
            
            $this->session->set_flashdata('error', 'Verifique seu e-mail ou senha, caso você errar a senha mais de 3 vezes o seu login será bloqueado por 60 segundos');
            redirect('login');
        }

        if ($this->ion_auth->is_max_login_attempts_exceeded($password)) 
            {
            $this->session->set_flashdata('error', 'Você ultrapassou o limete de tentativa de login');
             redirect('login');  
            } else {

            } 
    }

    public function logout() {

        $this->ion_auth->logout();
        redirect('login');
    }
 

}
