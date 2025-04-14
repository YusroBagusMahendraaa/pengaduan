<?php
class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('role') != 'admin') redirect('auth/login');
    }

    public function index() {
        $data['pengaduan'] = $this->Pengaduan_model->get_all();
        $this->load->view('admin/index', $data);
    }

    public function tanggapi($id) {
        if ($this->input->post()) {
            $data = [
                'tanggapan' => $this->input->post('tanggapan'),
                'status' => $this->input->post('status')
            ];
            $this->Pengaduan_model->update($id, $data);
            $this->session->set_flashdata('success', 'Laporan berhasil ditanggapi.');
            redirect('admin');
        } else {
            $data['pengaduan'] = $this->Pengaduan_model->get($id);
            $this->load->view('admin/tanggapi', $data);
        }
    }
}
?>
