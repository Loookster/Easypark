<!DOCTYPE html>
<html>
<head>
    <title>Parking Information</title>
    <style>
        /* Style the table */
        table {
            border-collapse: collapse;
            width: 100%;
        }
    /* Style the table headers */
    th {
        background-color: #4CAF50;
        color: white;
        font-weight: bold;
        padding: 12px;
        text-align: left;
    }

    /* Style the table rows */
    tr {
        border-bottom: 1px solid #ddd;
    }

    /* Style the table cells */
    td {
        padding: 12px;
        text-align: left;
        vertical-align: top;
    }

    /* Style the table cells in the "Status" column based on their value */
    td:nth-child(4) {
        color: white;
        font-weight: bold;
        text-align: center;
    }

    td:nth-child(4) span {
        background-color: #4CAF50;
        border-radius: 4px;
        padding: 4px 8px;
    }

    td:nth-child(4) span.not-paid {
        background-color: #f44336;
    }
</style>
</head>
<body>
    <h1>Parking Information</h1>
    <?php if (!empty($info)): ?>
        <table>
            <thead>
                <tr>
                    <th>RFID No</th>
                    <th>Entry Time</th>
                    <th>Exit Time</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($info as $row): ?>
                    <tr>
                        <td><?= $row['rfid_no'] ?></td>
                        <td><?= $row['entry_time'] ?></td>
                        <td><?= $row['exit_time'] ?></td>
                        <td>
                            <span class="<?= $row['flag'] == 1 ? 'paid' : 'not-paid' ?>">
                                <?= $row['flag'] == 1 ? 'Paid' : 'Not Paid' ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No parking information found.</p>
    <?php endif; ?>
</body>
</html>