<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bilten extends Frontend_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->Model("Report");
      $this->load->Model("News");
  }

  public function index($id = null) {
    $data['title'] = "Билтен";
          $data['kategorije'] = $this->Report->dohvatiKategorijuBilten();
    if($id) {
      $this->Report->report_category = $id;
      $data['imeKategorije'] = $this->Report->dohvatiImeKategorijebilten()[0]->name;
      $data['reports'] = $this->Report->dohvatiBilten();
    }
    $data['news'] = $this->News->dohvatiPoslednjuVest();
    $data["pages"] = array('bilten');
    $this->load_views($data);
    }

     public function dodaj()
    {
      $data['title'] = "Dodavanje novog biltena";
      $data['pages'] = array('upload_bilten');
      $data['kategorije'] = $this->Report->dohvatiKategorijuBilten();
      $this->load_views($data);
    }


    public function dodajKategorijuBilten()
    {
       if (isset($_REQUEST['catSubmit'])) {
           $catName = $_REQUEST['catName'];
           if($catName) {
               if ($this->Report->dodajKategorijuBilten($catName)) {
                 $this->session->set_flashdata("success", "Kategorija uspesno dodata.");
                 redirect($_SERVER['HTTP_REFERER']);
               } else {
                 $this->session->set_flashdata("error", "Greska pri unosu.");
                 redirect($_SERVER['HTTP_REFERER']);
               }
           } else {
              $this->session->set_flashdata("error", "Kategorija ne sme biti prazna.");
              redirect($_SERVER['HTTP_REFERER']);
           }
       } else {
           redirect(base_url());
       }
    }

    public function dodajBilten()
    {     
       $strtotime = strtotime("now");
        if (isset($_REQUEST['bilSubmit'])) {
          if($_REQUEST['bilCategory']){
            if($_REQUEST['bilText'] != ''){
              if($filename = $strtotime.$_FILES['bilFile']['name']){
              	$config['file_name'] = $filename;
                $config['upload_path']          = './podaci/';
                $config['allowed_types']        = 'pdf|jpg|xls|doc|docx|docxx';
                $config['max_size'] = 100000;
                $config['remove_spaces'] = FALSE;
                $config['encrypt_name'] = FALSE;
                $config['overwrite'] = FALSE;
                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('bilFile')) {
                   $this->session->set_flashdata('uploadErrors',array('error' => $this->upload->display_errors()));
                   redirect($_SERVER['HTTP_REFERER']);
                } else {
                  $this->Report->pdf = $strtotime.$_FILES['bilFile']['name'];
                  $this->Report->title = $_REQUEST['bilText'];
                  $this->Report->report_category = $_REQUEST['bilCategory'];


                  if ($this->Report->dodajBilten()) {
                    $this->session->set_flashdata('navSuccess', 'Nabavka uspesno dodata!');
                    redirect($_SERVER['HTTP_REFERER']);
                  } else {
                    $this->session->set_flashdata('navError', 'Problem pri upisu u bazu!');
                    redirect($_SERVER['HTTP_REFERER']);
                  }

                }

              }else{
                $this->session->set_flashdata('navError', 'Niste izabrali file za upload!');
                redirect($_SERVER['HTTP_REFERER']);
              }
            }else{
              $this->session->set_flashdata("navError", "Ime Fajla ne sma biti prazno.");
              redirect($_SERVER['HTTP_REFERER']);
            }
          }else{
            $this->session->set_flashdata('navError', 'Morate da odaberete Kategoriju');
            redirect($_SERVER['HTTP_REFERER']);
          }
        }else{
          redirect(base_url());
        }
    }
}
