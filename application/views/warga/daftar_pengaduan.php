<?php $this->load->view('layout/header'); ?>

<h3>Daftar Pengaduan Saya</h3>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Isi Laporan</th>
        <th>Status</th>
        <th>Tanggapan</th>
        <th>Waktu</th>
    </tr>
    <?php foreach ($pengaduan as $p): ?>
        <tr>
            <td><?= $p->id ?></td>
            <td><?= $p->isi_laporan ?></td>
            <td><?= $p->status ?></td>
            <td><?= $p->tanggapan ?: '-' ?></td>
            <td><?= $p->created_at ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $this->load->view('layout/footer'); ?>
