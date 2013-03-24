<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Promocao extends CI_Controller {

	public function index() {
		$this -> load -> view('externas/promocao');
	}
}
?>