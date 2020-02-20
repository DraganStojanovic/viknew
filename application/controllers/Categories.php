<?php
	class Categories extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Category_model');
			
			$this->load->helper('url_helper');
		}

		public function index(){
			$data['title'] = 'Categories';

			$data['categories'] = $this->Category_model->get_categories();

			$this->load->view('templatess/header');
			$this->load->view('categories/index', $data);
			$this->load->view('templatess/footer');
		}

		public function create(){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			
			$data['title'] = 'Create Category';

			$this->form_validation->set_rules('name', 'Name', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templatess/header');
				$this->load->view('categories/create', $data);
				$this->load->view('templatess/footer');
			} else {
				$this->Category_model->create_category();

				// Set message
				$this->session->set_flashdata('category_created', 'Your category has been created');

				redirect('categories');
			}
		}

		public function posts($id){
			$data['title'] = $this->Category_model->get_category($id)->name;

			$data['posts'] = $this->Posts_model->get_posts_by_category($id);

			$this->load->view('templatess/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templatess/footer');
		}

		public function delete($id){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->Category_model->delete_category($id);

			// Set message
			$this->session->set_flashdata('category_deleted', 'Your category has been deleted');

			redirect('categories');
		}
	}