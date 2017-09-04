<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ViewModel');
		$this->load->model('My_model');
	}


	public function index()
	{
		$data['slider'] = $this->ViewModel->get_data('slider'); //print_r($data); exit;
		$data['about'] = $this->ViewModel->get_data('about_us');
		$data['services'] = $this->ViewModel->get_data('services');
		$data['testimonials'] = $this->ViewModel->get_data('testimonials');//print_r($data['testimonials']); exit;
		$data['portfolio'] = $this->ViewModel->get_portfolio(); //
		$data['team'] = $this->ViewModel->get_team();
		$this->load->view('include/header');
		$this->load->view('include/slider',$data);
		$this->load->view('main',$data);
		$this->load->view('include/footer');
	}
	//////////////// email ////////////////
	public  function mailto()
	{
		extract($_POST); //print_r($_POST);
		redirect(base_url());
		/*
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'gamrani01@gmail.com',
			'smtp_pass' => 'baryaleykhan',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
	);

		$message = '';
		$this->load->library('email', $config);
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from($email);
		$this->email->to('gamrani01@gmail.com');
		$this->email->subject('Your Subject');
		$this->email->message($message);
		if($this->email->send())
		{
			echo 'Email sent.';
		}
		else
		{
			show_error($this->email->print_debugger());
		} */

	}
	///////////////////////////////////////////////
	function portfolio_details($id)
	{
		$data['portfolio']= $this->My_model->get_works_single($id); //print_r($data); exit;
		$this->load->view('include/header');
		$this->load->view('portfolio',$data);
		$this->load->view('include/footer');
	}
}
