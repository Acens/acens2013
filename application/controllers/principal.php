<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index() {
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
	
	public function cadastrar_email(){
		$this->form_validation->set_rules('email', 'EMAIL', 'trim|required|max_length[70]|valid_email');
	}
	
	public function popup() {
		$this -> load -> view('popups/teste');
	}

}
?>