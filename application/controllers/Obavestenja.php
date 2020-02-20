<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obavestenja extends Frontend_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->Model("Report");
      $this->load->Model("News");
  }

    public function index() {
    $data['title'] = "Обавештења";
    $data['reports'] = $this->Report->dohvatiObavestenja();
    $data['news'] = $this->News->dohvatiPoslednjuVest();
    $data["pages"] = array('obavestenjе');
    $this->load_views($data);
    }
}
