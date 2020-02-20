<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->Model("News");
        $this->load->Model('Post_Model');
        $this->load->Model('Posts_model');
        $this->load->Model('Alert_Model');
        $this->load->helper('url');
        $this->load->helper('text');
        $this->load->library('table');

    }

    public function index() {
    $data['title'] = "Почетна";
    
    $data['post'] = $this->Post_Model->get_post();
    $data['posts'] = $this->Posts_model->get_posts();
    $data['alert'] = $this->Alert_Model->get_alert();
    $data['news'] = $this->News->dohvatiSveVesti();

    $data["pages"] = array('header','menu');
    $this->load_views($data);

    }



   public function vest($id = null)
    {
        $data['title'] = "Vest";
        $this->News->id = $id;

        $data['vest'] = $this->News->dohvatiJednuVest();
        $data['news'] = $this->News->dohvatiPoslednjuVest();
        //var_dump($data['insert_model']);

        if($data['vest']) {
          $data["pages"] = array('stranica');
          $this->load_views($data);
        } else {
            redirect(base_url());
        }

    }
}
