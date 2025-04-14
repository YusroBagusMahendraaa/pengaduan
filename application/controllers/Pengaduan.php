<?php
class Pengaduan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('role') != 'warga') redirect('auth/login');
    }

    public function index() {
        $data['pengaduan'] = $this->Pengaduan_model->get_by_user($this->session->userdata('user_id'));
        $this->load->view('pengaduan/index', $data);
    }

    public function tambah() {
        $this->form_validation->set_rules('isi_laporan', 'Isi Laporan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pengaduan/tambah');
        } else {
            $data = [
                'user_id' => $this->session->userdata('user_id'),
                'isi_laporan' => $this->input->post('isi_laporan'),
                'status' => 'dikirim'
            ];
            $this->Pengaduan_model->insert($data);
            $this->session->set_flashdata('success', 'Laporan berhasil dikirim!');
            redirect('pengaduan');
        }
    }
}
?>
