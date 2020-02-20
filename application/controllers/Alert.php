
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alert extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Alert_Model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['alert'] = $this->Alert_Model->get_alert();
        $data['title'] = 'Alert archive';

        $this->load->view('template/header', $data);
        $this->load->view('alert/index', $data);
        $this->load->view('template/footer');
    }

    public function view($slug = NULL)
    {
        $data['alert_item'] = $this->Alert_Model->get_alert($slug);

        if (empty($data['alert_item']))
        {
            show_404();
        }

        $data['title'] = $data['alert_item']['title'];

        $this->load->view('template/header', $data);
        $this->load->view('alert/view', $data);
        $this->load->view('template/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a alert item';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('template/header', $data);
            $this->load->view('alert/create');
            $this->load->view('template/footer');

        }
        else
        {
            $this->Alert_Model->set_alert();
            $this->load->view('template/header', $data);
            $this->load->view('alert/success');
            $this->load->view('template/footer');
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

        $data['title'] = 'Edit a alert item';
        $data['alert_item'] = $this->Alert_Model->get_alert_by_id($id);

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('template/header', $data);
            $this->load->view('alert/edit', $data);
            $this->load->view('template/footer');

        }
        else
        {
            $this->Alert_Model->set_alert($id);
            //$this->load->view('alert/success');
            redirect( base_url() . 'index.php/alert');
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        if (empty($id))
        {
            show_404();
        }

        $alert_item = $this->Alert_Model->get_alert_by_id($id);

        $this->Alert_Model->delete_alert($id);
        redirect( base_url() . 'index.php/alert');
    }
}
