<!DOCTYPE html>
<html>
<head>
    <title>parking_view</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="sidenav">
    <a href="<?= base_url('public/Dashboard')?>">Dashboard</a>
    <a href="<?= base_url('public/Users')?>">Parking users</a>
    <a href="<?= base_url('public/ParkingMonitor')?>">Parking slots</a>
    <a href="#">Transaction history</a>
    <a href="<?= base_url('public/LoginController')?>">Logout</a>
</div>

<div class="main">
<h1>Transaction History</h1>

<?php if ($transactions) : ?>
    <table>
        <thead>
            <tr>
                <th>RFID Account</th>
                <th>Price</th>
                <th>Date Timestamp</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactions as $transaction) : ?>
                <tr>
                    <td><?= $transaction['rfid_account'] ?></td>
                    <td><?= $transaction['price'] ?></td>
                    <td><?= $transaction['date_time'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <p>No transactions found.</p>
<?php endif; ?>
</div>


</body>
</html>