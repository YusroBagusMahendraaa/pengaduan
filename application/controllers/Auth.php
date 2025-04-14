<?php
class Auth extends CI_Controller {
    public function login() {
        if ($this->input->post()) {
            $user = $this->User_model->get_user(
                $this->input->post('email'),
                $this->input->post('password')
            );
            if ($user) {
                $this->session->set_userdata([
                    'user_id' => $user->id,
                    'role' => $user->role,
                    'logged_in' => TRUE
                ]);
                redirect($user->role == 'admin' ? 'admin' : 'pengaduan');
            } else {
                $this->session->set_flashdata('error', 'Email atau password salah!');
            }
        }
        $this->load->view('auth/login');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
?>
