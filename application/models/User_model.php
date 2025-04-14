<?php
class User_model extends CI_Model {
    public function get_user($email, $password) {
        return $this->db->get_where('users', [
            'email' => $email,
            'password' => md5($password)
        ])->row();
    }

    public function insert($data) {
        return $this->db->insert('users', $data);
    }
}
?>
