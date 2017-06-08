<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContaController extends Controller
{
  public function __construct(){

  parent::__construct();

 //var_dump($this->session->all_userdata());
}

public function entrar(){

  $alerta = array();
  if ($this->input->post('entrar') === "entrar") {

    if($this->input->post('captcha')) redirect('ContaController');

    // regras de validação dos campos
    $this->form_validation->set_rules('saram', 'SARAM', 'required');
    $this->form_validation->set_rules('senha', 'SENHA', 'required|min_length[6]|max_length[12]');

    //verificando se as regras foram atendidas
    if($this->form_validation->run() === TRUE){
      // formulario validado com sucesso
      $email = $this->input->post('saram');
      $senha = $this->input->post('senha');

      $this->load->model('usuarios_model');

      $login_existe = $this->usuarios_model->check_login($email, $senha);

      if ($login_existe) {
        # login valido e autorizado --- iniciar session
        $usuario = $login_existe;

        //iniciar sessão redirecionar para o dashboard
        $session = array(
            'nome'	=>	$usuario['pesnguerra'],
            'posto_grad' => $usuario['pespostograd'],
            'email' => $usuario['pesemail'],
            'nome_completo' => $usuario['pesncompleto'],
            'identidade' => $usuario['pesidentidade'],
            'om' => $usuario['pesom'],
            'cpf' => $usuario['pescpf'],
            'telefone' => $usuario['pesfone1'],
            'data_nascimento' => $usuario['pesdn'],
                'saram'  => $usuario['pescodigo'],
                'peslocaltrabalho' => $usuario['peslocaltrabalho'],
                'logado' => TRUE
        );
        // inicializando a sessão
        $this->session->set_userdata($session);

        redirect('dashboard');

      }else{
        # login invalido
        $alerta = array(
        "class" => "danger",
        "mensagem" => "Atenção! Login inválido. <br>"
        );
      }

    }else{
      // Houveram erros no formulário
      $alerta = array(
        "class" => "danger",
        "mensagem" => "Atenção! Falha na validação do formulário. <br>".validation_errors()
        );
    }

  }

  $dados = array(
    "alerta" => $alerta
    );


  $this->load->view('conta/entrar', $dados);
}

public function sair(){
  $this->session->sess_destroy();

  $alerta = array(
        "class" => "success",
        "mensagem" => "Logout realizado com sucesso. <br>"
        );

  $dados = array(
    "alerta" => $alerta
    );

  redirect('conta/entrar', $dados);
}
}
