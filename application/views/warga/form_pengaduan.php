<?php $this->load->view('layout/header'); ?>

<h3>Buat Pengaduan</h3>
<?= $this->session->flashdata('success'); ?>
<form method="post" action="<?= base_url('pengaduan/kirim'); ?>">
    <textarea name="isi_laporan" placeholder="Tuliskan laporan Anda..." required></textarea><br><br>
    <button type="submit">Kirim</button>
</form>

<?php $this->load->view('layout/footer'); ?>
