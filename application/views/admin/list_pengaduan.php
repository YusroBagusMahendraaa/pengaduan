<?php $this->load->view('layout/header'); ?>

<h3>Daftar Semua Pengaduan</h3>
<?= $this->session->flashdata('success'); ?>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>User ID</th>
        <th>Isi</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($pengaduan as $p): ?>
        <tr>
            <td><?= $p->id ?></td>
            <td><?= $p->user_id ?></td>
            <td><?= $p->isi_laporan ?></td>
            <td><?= $p->status ?></td>
            <td>
                <a href="<?= base_url('admin/tanggapi/'.$p->id) ?>">Tanggapi</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $this->load->view('layout/footer'); ?>
