<?php
class Formulario extends CI_Controller {

	function index() {

		$this->form_validation->set_rules('mensagem', 'Mensagem', 'xss_clean');
		
		$code = $this->input->post('code');
		$captcha = $this->input->post('captcha');
		
		if ($code == $captcha) {
			$this->load->library('email');

			$this->email->from('nightwalkerk@gmail.com', 'Joao Dantas');
			$this->email->to('nightwalkerk@gmail.com');
			
			$this->email->subject('Email Test');
			$this->email->message($this->input->post('mensagem'));

			$this->email->send();
			echo $this->email->print_debugger();
			
			$this->load->view('obrigado');
		} else {
			$temcurso = array('curso' => 'true'); //'true' (mostra a pagina cursos) 
			//'false' (o contrario :P - e mostra o aviso no menu)

			$this -> load -> view('includes/header');
			$this -> load -> view('includes/menu', $temcurso);
			$this -> load -> view('includes/home');
			$this -> load -> view('includes/sobre');
			$this -> load -> view('includes/portfolio');
			$this -> load -> view('includes/servicos');
			if ($temcurso['curso'] == "true") {
				$this -> load -> view('includes/cursos');
			}
			$this -> load -> view('includes/contato');
			}
	}

}
?>