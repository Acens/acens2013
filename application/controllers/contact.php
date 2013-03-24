<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->config('contact', TRUE);
		
		$this->lang->load('contact');

		$this->load->helper(array('url'));

		substr(CI_VERSION, 0, 1) == '3' ? $this->load->driver('session') : $this->load->library('session');

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters($this->config->item('start_delimiter', 'contact'), $this->config->item('end_delimiter', 'contact'));
	}

	public function index()
	{
		$this->form_validation->set_rules('subject', lang('subject_label'), 'required|trim|xss_clean');
		$this->form_validation->set_rules('message', lang('message_label'), 'required|trim|xss_clean');
		$this->form_validation->set_rules('name', lang('name_label'), 'required|trim|xss_clean');
		$this->form_validation->set_rules('email', lang('email_label'), 'required|valid_email|trim|xss_clean');
		$this->form_validation->set_rules('email_confirm', '', 'max_length[0]'); // honeypot must be empty

		if ($this->form_validation->run())
		{
			$this->load->library('email', $this->config->item('email_config', 'contact'));
			$this->email->from($this->input->post('email'), $this->input->post('name'));
			$this->email->to($this->config->item('recipients', 'contact'));
			$this->email->subject($this->input->post('subject'));
			$this->email->message($this->input->post('message'));

			if ($this->email->send())
			{
				$this->session->set_flashdata('msg', lang('success_message'));
			}
			else
			{
				$this->session->set_flashdata('msg', lang('error_message'));
			}

			redirect('index.php/principal');
		}
		else
		{
			$this->data['msg'] = $this->session->flashdata('msg');

			$this->load->view('includes/contato', $this->data);
		}
	}
}