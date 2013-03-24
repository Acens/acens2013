<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Newsletter extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('newsletter_model');
	}	
	function index()
	{			
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[60]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('includes/contato');
		}
		else 
		{
			
			$form_data = array(
					       	'email' => set_value('email')
						);
		
			if ($this->newsletter_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('index.php/newsletter/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'Ocorreu um erro ao salvar suas informações. Por favor, tente novamente mais tarde.';

			}
		}
	}
	function success()
	{
			echo 'E-mail adicionado com sucesso!';
	}
}
?>