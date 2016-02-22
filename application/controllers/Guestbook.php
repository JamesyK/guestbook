<?php
class Guestbook extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('guestbook_model');
		$this->load->helper('url_helper');
		$this->load->helper('form');
    $this->load->library('form_validation');
	}

	public function index()
	{
		$data['posts'] = $this->guestbook_model->get_posts();
		$data['title'] = 'Guestbook';

		$this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('comment', 'Comment', 'required');

    if ($this->form_validation->run() === FALSE)
    {
			$this->load->view('templates/header', $data);
			$this->load->view('guestbook/form', $data);
			$this->load->view('guestbook/index', $data);
			$this->load->view('templates/footer', $data);			
    }
    else
    {
      $this->guestbook_model->add_post();
   		redirect($_SERVER['HTTP_REFERER']); 
    }
	}

	public function delete_post()
	{
		$id = $this->input->get('id');

  	$this->guestbook_model->delete_post($id);
   	redirect($_SERVER['HTTP_REFERER']);  
	}
}
