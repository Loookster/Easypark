<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/registerdes.css'); ?>">
        <style>
.success {
    color: green;
    font-weight: bold;
    text-align: center;
    margin-top: 10px;
    padding: 10px;
    border: 2px solid green;
    border-radius: 5px;
    background-color: lightgreen;
}

    </style>
</head>

<body>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <form method="post" action="<?= base_url('public/LoginController/register') ?>">
            <div style="text-align: center;">
                <img src="<?php echo base_url('public/EASYPARK.png'); ?>" alt="Logo" width="300">
            </div>
            <input type="text" name="username" placeholder="Username">
            <?php if (isset($validation) && $validation->getError('username')): ?>
                <span class="error"><?= $validation->getError('username') ?></span>
            <?php endif; ?>

            <input type="text" name="email" placeholder="Email">
            <?php if (isset($validation) && $validation->getError('email')): ?>
                <span class="error"><?= $validation->getError('email') ?></span>
            <?php endif; ?>

            <input type="password" name="password" placeholder="Password">
            <?php if (isset($validation) && $validation->getError('password')): ?>
                <span class="error"><?= $validation->getError('password') ?></span>
            <?php endif; ?>

            <input type="password" name="confirm_password" placeholder="Confirm Password">
            <?php if (isset($validation) && $validation->getError('confirm_password')): ?>
                <span class="error"><?= $validation->getError('confirm_password') ?></span>
            <?php endif; ?>

            <input type="text" name="name" placeholder="Name">
            <?php if (isset($validation) && $validation->getError('name')): ?>
                <span class="error"><?= $validation->getError('name') ?></span>
            <?php endif; ?>

            <input type="text" name="phone" placeholder="Phone number">
            <?php if (isset($validation) && $validation->getError('phone')): ?>
                <span class="error"><?= $validation->getError('phone') ?></span>
            <?php endif; ?>

            <div class="button-container">
                <button type="submit" class="btn">Sign Up</button>
                <button type="button" class="btn" onclick="window.location.href='<?= base_url('public/LoginController') ?>'">Back</button>
            </div>
            
            <?php if (session('success')): ?>
                <div class="success"><?= session('success') ?></div>
                <?php header("Refresh:2; url=" . base_url('public/LoginController')); ?>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
