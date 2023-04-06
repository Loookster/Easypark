<!DOCTYPE html>
<html>
<head>
    <title>Parking Transactions</title>
</head>
<body>
    <h1>Transaction History</h1>

    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Fee</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactions as $transaction) : ?>
                <tr>
                    <td><?= $transaction['transaction_date'] ?></td>
                    <td>$<?= number_format($transaction['fee'], 2) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <a href="<?= base_url('public/UserDashboard'); ?>">Back</a>
</body>
</html>