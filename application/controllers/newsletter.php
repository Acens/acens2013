<?php ob_start() ?>
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
			$this->load->view('mensagens/erro_newsletter');
		}
		else 
		{
			
			$form_data = array(
					       	'email' => set_value('email')
						);
		
			if ($this->newsletter_model->SaveForm($form_data) == TRUE) 
			{
				$this->load->view('mensagens/sucesso_newsletter');   // or whatever logic needs to occur
			}
			else
			{
			$this->load->view('mensagens/erro_newsletter');

			}
		}
	}
}
?>