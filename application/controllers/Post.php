<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_Model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['post'] = $this->Post_Model->get_post();
        $data['title'] = 'Post archive';

        $this->load->view('templates/header', $data);
        $this->load->view('post/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL)
    {
        $data['post_item'] = $this->Post_Model->get_post($slug);

        if (empty($data['post_item']))
        {
            show_404();
        }

        $data['title'] = $data['post_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('post/view', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a post item';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('post/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->Post_Model->set_post();
            $this->load->view('templates/header', $data);
            $this->load->view('post/success');
            $this->load->view('templates/footer');
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);

        if (empty($id))
        {
            show_404();
        }

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Edit a post item';
        $data['post_item'] = $this->Post_Model->get_post_by_id($id);

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('post/edit', $data);
            $this->load->view('templates/footer');

        }
        else
        {
            $this->Post_Model->set_post($id);
            //$this->load->view('news/success');
            redirect( base_url() . 'index.php/post');
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        if (empty($id))
        {
            show_404();
        }

        $post_item = $this->Post_Model->get_post_by_id($id);

        $this->Post_Model->delete_post($id);
        redirect( base_url() . 'index.php/post');
    }
}
