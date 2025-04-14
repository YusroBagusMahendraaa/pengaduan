<!DOCTYPE html>
<html>
<head>
    <title>Login Warga/Admin</title>
</head>
<body>
    <h2>Form Login</h2>
    <?php if ($this->session->flashdata('error')): ?>
        <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>
    <form action="<?php echo site_url('auth/login'); ?>" method="post">
        <label>Email</label><br>
        <input type="text" name="email"><br><br>

        <label>Password</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>

