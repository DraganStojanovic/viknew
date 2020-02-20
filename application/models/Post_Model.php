<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_Model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_post($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('post');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('post', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_post_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('post');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('post', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_post($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );
        
        if ($id == 0) {
            return $this->db->insert('post', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('post', $data);
        }
    }
    
    public function delete_post($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('post');
    }
}