<?php 
$temcurso = false; /*Mostrar ou ocultar a página de cursos*/

$this->load->view('includes/header');
$this->load->view('includes/menu');
$this->load->view('includes/home');
$this->load->view('includes/sobre');
$this->load->view('includes/portfolio');
$this->load->view('includes/servicos');
if ($temcurso){
	$this->load->view('includes/cursos');
}
$this->load->view('includes/contato');
?>