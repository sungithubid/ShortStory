<?php 
    class User extends CI_Controller {

        public function __construct() {
            parent::__construct();
        }

        public function login() {
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->library('form_validation');
            $this->load->model('pmodel');

            if($this->session->userdata('logged_in')) {
                redirect('/');
            }
            //通过获取session判断是否已经登陆

            $this->form_validation->set_rules('username','Username','trim|required');
            $this->form_validation->set_rules('password','Password','md5');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('header');
                $this->load->view('admin/login');
                $this->load->view('footer');
            } else {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $result = $this->pmodel->get_admin($username);

                if ($result && $password == $result->password) {
                    $this->load->view('admin/create');

                    //设置session
                    $this->session->set_userdata('username',$result->username);
                    $this->session->set_userdata('logged_in',TRUE);
                    redirect('/');
                } else {
                    $this->form_validation->set_message('username or password error');
                    $this->load->view('header');
                    $this->load->view('admin/login');
                    $this->load->view('footer');
                }
                
            }
        }

        function logout() {
            $this->session->unset_userdata('username');
            $this->session->set_userdata('logged_in',FALSE);
            redirect('/');
        }

    }
 ?>