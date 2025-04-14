<?php
class Pengaduan_model extends CI_Model {
    public function insert($data) {
        return $this->db->insert('pengaduan', $data);
    }

    public function get_by_user($user_id) {
        return $this->db->get_where('pengaduan', ['user_id' => $user_id])->result();
    }

    public function get_all() {
        return $this->db->get('pengaduan')->result();
    }

    public function update($id, $data) {
        return $this->db->where('id', $id)->update('pengaduan', $data);
    }

    public function get($id) {
        return $this->db->get_where('pengaduan', ['id' => $id])->row();
    }
}
?>
