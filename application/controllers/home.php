<?php 
    class Home extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->helper('url');
        }

        public function index($post_id = FALSE) {
            
            $this->load->model('pmodel');
            $data['posts'] = $this->pmodel->get_post();
            $this->load->view('post/index',$data);
            $this->load->view('footer');

        }

        public function article($post_id = FALSE) {

            if ($post_id === FALSE) {
                redirect('/');
            }

            $this->load->model('pmodel');
            $data['posts'] = $this->pmodel->get_post($post_id);
            $this->load->view('header');
            $this->load->view('post/article',$data);
            $this->load->view('footer');
        }

        public function create() {
            $this->load->model('pmodel');
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->library('form_validation');

            if(!$this->session->userdata('logged_in')) {
                redirect('/');
            } 

            $this->form_validation->set_rules('title','Title','required');
            $this->form_validation->set_rules('artist','Artist','required');
            $this->form_validation->set_rules('content','Content','required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('header');
                $this->load->view('admin/create');
                $this->load->view('footer');
            } else {
                $this->pmodel->insert_post();
                redirect('/');
            }
        }

        public function about() {
            $this->load->view('header');
            $this->load->view('about');
            $this->load->view('footer');
        }
    }
 ?>