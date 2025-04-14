<?php $this->load->view('layout/header'); ?>

<h3>Tanggapi Pengaduan ID #<?= $pengaduan->id ?></h3>

<form method="post" action="<?= base_url('admin/tanggapi/'.$pengaduan->id); ?>">
    <p><strong>Isi:</strong> <?= $pengaduan->isi_laporan ?></p>
    
    <label>Status:</label>
    <select name="status" required>
        <option value="diproses" <?= $pengaduan->status == 'diproses' ? 'selected' : '' ?>>Diproses</option>
        <option value="selesai" <?= $pengaduan->status == 'selesai' ? 'selected' : '' ?>>Selesai</option>
    </select><br><br>
    
    <label>Tanggapan:</label><br>
    <textarea name="tanggapan" required><?= $pengaduan->tanggapan ?></textarea><br><br>
    
    <button type="submit">Kirim</button>
</form>

<?php $this->load->view('layout/footer'); ?>


