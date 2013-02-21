<?php 

class Cadastro_newsletter extends CI_Model {
	
	function gravar_email($data) {
		$this->db->insert('newsletter', $data);
	}
}

?>