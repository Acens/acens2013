<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index() {
		$temcurso = array('curso' => 'false');

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

	public function popup() {
		$this -> load -> view('popups/teste');
	}

}
?>