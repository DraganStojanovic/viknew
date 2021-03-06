<?php
	class Comments extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Posts_model');
			$this->load->model('Comment_model');
			
			$this->load->helper('url_helper');
		}

		public function create($post_id){
			$slug = $this->input->post('slug');
			$data['posts'] = $this->Posts_model->get_posts($slug);

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');

			$this->form_validation->set_rules('body', 'Body', 'required');


			if($this->form_validation->run() === FALSE){
				$this->load->view('templatess/header');
				$this->load->view('posts/view', $data);
				$this->load->view('templatess/footer');
			} else {
				$this->Comment_model->create_comment($post_id);
				redirect('posts/'.$slug);
			}
		}
	}