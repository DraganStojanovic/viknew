<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alert_Model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_alert($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('alert');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('alert', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_alert_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('alert');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('alert', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_alert($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );
        
        if ($id == 0) {
            return $this->db->insert('alert', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('alert', $data);
        }
    }
    
    public function delete_alert($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('alert');
    }
}