<?php  
    class Pmodel extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        public function get_post($post_id = FALSE) {
            $this->db->select('*');
            if ($post_id === FALSE) {
                $this->db->order_by('post_id desc');
                $query = $this->db->get('posts');
                return $query->result();
            } else {
                $this->db->where('post_id',$post_id);
                $query = $this->db->get('posts');
                return $query->result();
            }
        }

        public function insert_post() {
            $data=array(
                'post_title' => $this->input->post('title'),
                'post_artist' => $this->input->post('artist'),
                'post_content' => $this->input->post('content')
                );
            return $this->db->insert('posts',$data);
        }

        public function delete_post($post_id) {
            $this->load->helper('url');
            return $this->db->delete('posts',array('post_id'=>$post_id));
        }

        public function get_admin($username = FALSE) {
            if ($username = FALSE) {
                return false;
            }
            $query = $this->db->get_where('admin',array('username'=>$username));
            return $query->row();
        }
    }
 ?>