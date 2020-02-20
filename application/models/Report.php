<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Model{

    public $id;
    public $title;
    public $date_created;
    public $pdf;
    public $excell;
    public $summary;
    public $report_category;

    public function dohvatiImeKategorije() {
      $query = "SELECT name from report_nabavke WHERE id = $this->report_category;";
      return $this->db->query($query)->result();
    }

    public function dodajKategorijuNabavke($name)
    {
        $query = "INSERT INTO report_nabavke (name) VALUES('$name');";
          return $this->db->query($query);
    }

    public function dodajNabavku()
    {
     $query = "INSERT INTO report (title,pdf, date_created,report_category) values('$this->title',
                 '$this->pdf','" . date('Y-m-d H:i:s') . "', $this->report_category);";
       return $this->db->query($query);
    }

    public function dohvatiKategorijeNabavke()
    {
        $query = "SELECT * FROM report_nabavke ORDER BY id DESC;";
        return $this->db->query($query)->result();
    }



    public function dohvatiImeKategorijeizvestaji() {
        $query = "SELECT name from report_izvestaji WHERE id = $this->report_category;";
        return $this->db->query($query)->result();
      }
  
      public function dodajKategorijuIzvestaji($name)
      {
          $query = "INSERT INTO report_izvestaji (name) VALUES('$name');";
            return $this->db->query($query);
      }
  
      public function dodajIzvestaj()
      {
       $query = "INSERT INTO report (title,pdf, date_created,report_category) values('$this->title',
                   '$this->pdf','" . date('Y-m-d H:i:s') . "', $this->report_category);";
         return $this->db->query($query);
      }
  
      public function dohvatiKategorijuIzvestaji()
      {
          $query = "SELECT * FROM report_izvestaji ORDER BY id DESC;";
          return $this->db->query($query)->result();
      }




      public function dohvatiImeKategorijebilten() {
        $query = "SELECT name from report_bilten WHERE id = $this->report_category;";
        return $this->db->query($query)->result();
      }
  
      public function dodajKategorijuBilten($name)
      {
          $query = "INSERT INTO report_bilten (name) VALUES('$name');";
            return $this->db->query($query);
      }
  
      public function dodajBilten()
      {
       $query = "INSERT INTO report (title,pdf, date_created,report_category) values('$this->title',
                   '$this->pdf','" . date('Y-m-d H:i:s') . "', $this->report_category);";
         return $this->db->query($query);
      }
  
      public function dohvatiKategorijuBilten()
      {
          $query = "SELECT * FROM report_bilten ORDER BY id DESC;";
          return $this->db->query($query)->result();
      }






    public function dohvatiObicneIzvestaje()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 1;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajedva()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 6 ORDER BY date_created DESC;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajetri()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 7;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajecetiri()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 8;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajepet()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 9;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajesest()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 10;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajesedam()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 11;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajeosam()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 12;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajedevet()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 16 ORDER BY date_created DESC;";
        return $this->db->query($query)->result();
    }

        public function dohvatiObicneIzvestajedeset()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 17;";
        return $this->db->query($query)->result();
    }

        public function dohvatiObicneIzvestajejedanest()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 18;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajedvanest()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 19;";
        return $this->db->query($query)->result();
    }

public function dohvatiObicneIzvestajecetrnest()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 20;";
        return $this->db->query($query)->result();
    }

public function dohvatiObicneIzvestajepetnest()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 21;";
        return $this->db->query($query)->result();
    }

public function dohvatiObicneIzvestajesesnest()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 23;";
        return $this->db->query($query)->result();
    }

public function dohvatiObicneIzvestajesedamnest()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 24;";
        return $this->db->query($query)->result();
    }

public function dohvatiObicneIzvestajeosamnest()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 25;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajedevetnest()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 26;";
        return $this->db->query($query)->result();
    }

public function dohvatiObicneIzvestajedvadeset()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 27;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajedvadesetjedan()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 28;";
        return $this->db->query($query)->result();
    }

    public function dohvatiOglase()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 14 ORDER BY id DESC;";
        return $this->db->query($query)->result();
    }

    public function dohvatiBilten()
    {
        $query = "SELECT * FROM report WHERE report.report_category = $this->report_category;";
        return $this->db->query($query)->result();
    }

  /*  public function dohvatiFIzvestaje()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 2;";
        return $this->db->query($query)->result();
    } */

    public function dohvatiNabavke()
    {
        $query = "SELECT * FROM report WHERE report.report_category = $this->report_category;";
        return $this->db->query($query)->result();
    }

    public function dohvatiIzvestaje()
    {
        $query = "SELECT * FROM report WHERE report.report_category = $this->report_category;";
        return $this->db->query($query)->result();
    }

    public function dohvatiPropise()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 4 ORDER BY id DESC;";
        return $this->db->query($query)->result();
    }

    public function dohvatiCenovnike()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 5 ORDER BY date_created DESC;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObavestenja()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 22 ORDER BY date_created DESC;";
        return $this->db->query($query)->result();
    }

}
