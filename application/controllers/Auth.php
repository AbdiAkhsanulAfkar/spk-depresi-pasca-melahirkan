<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('/Auth_model', 'Auth');
        $this->load->model('ModelLogin');
    }

    /*
    This is simple authentication.
    */

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('username', 'username', 'trim|required|max_length[80]|xss_clean|strip_tags');
            $this->form_validation->set_rules('password', 'password', 'required|xss_clean|strip_tags');

            if ($this->form_validation->run() == FALSE) {
                echo validation_errors();
                return;
            }
            if ($row = $this->Auth->login($this->input->post('username'))) {
                if (password_verify($this->input->post('password'), $row->password)) {
                    
                    $hasil = $this->db->get_where('user', array('username' => $this->input->post('username')));
                    foreach ($hasil->result() as $sess) {
                        $sess_data['logged_in'] = 'Sudah Loggin';
                        $sess_data['username'] = $sess->username;
                        $sess_data['usia'] = $sess->usia;
                        $sess_data['alamat'] = $sess->alamat;
                        $sess_data['role_id'] = $sess->role_id;
                        $this->session->set_userdata($sess_data);
                    }
                    if ($this->session->userdata('role_id') == '1') {
                        redirect('admin/home');
                    }else{
                        redirect('/');
                    }   
            } else {
                echo 'Unauthorized';
                return;
            }
        }
    }
    }


    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('username', 'username', 'trim|required|max_length[80]|xss_clean|strip_tags');
            $this->form_validation->set_rules('nama', 'nama', 'required|max_length[50]|xss_clean|strip_tags');
            $this->form_validation->set_rules('alamat', 'alamat', 'required|max_length[50]|xss_clean|strip_tags');
            $this->form_validation->set_rules('usia', 'usia', 'required|max_length[50]|xss_clean|strip_tags');
            $this->form_validation->set_rules('password', 'password', 'required|max_length[50]|xss_clean|strip_tags');
            $this->form_validation->set_rules('role', 'role_id', 'required|max_length[50]|xss_clean|strip_tags');

            if ($this->form_validation->run() == FALSE) {
                echo validation_errors();
                return;
            }
            if ($this->Auth->register(
                $this->input->post('username'), 
                $this->input->post('nama'), 
                $this->input->post('alamat'),
                $this->input->post('usia'),
                password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                $this->input->post('role')
                
                )) {
                $this->session->set_flashdata('flash', 'Akun sukses dibuat, silakan login');
                redirect('login');
                return;
            } else {
                echo 'Cannot create your account';
                return;
            }
        }

        //If request method is other than POST
        echo 'Method Not Allowed';
        return;
    }
}


/* End of file Auth.php and path \application\controllers\Auth.php  */
