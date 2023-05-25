<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@900&display=swap" rel="stylesheet">    
    <title>Parking Transactions</title>
    <style>
        body {
            background-image: url('1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center; 
            margin-top: -40px;
        }
        .main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 10vh;
        }

        .header {
            font-size: 30px;
            margin-bottom: 200px;
            color: #fff;
            font-family: 'Noto Sans JP', sans-serif;
        }

        .transactions {
            margin-top: 50px;
        }
        .table-container {
          margin-top: -50px;
          margin-bottom: 50px;
          background-color: #fff; /* set white background */
          overflow-y: auto; /* add vertical scroll */
          max-height: 300px; /* set maximum height of container */
        }
        
        table {
          width: 100%;
          border-collapse: collapse;
          text-align: center;
          font-family: 'Noto Sans JP', sans-serif;
        }
        
        th,
        td {
          padding: 10px;
          border: 1px solid #ddd;
        }
        
        thead {
          position: sticky;
          top:0;
          background-color: #144272;
          color: #fff;
        }
        
        tbody {
          max-height: calc(300px - 40px); /* set maximum height of tbody to account for the header height and border width */
          overflow-y: auto; /* add vertical scroll */
        }
        
        th:first-child,
        td:first-child {
          border-left: none;
        }
        
        th:last-child,
        td:last-child {
          border-right: none;
        }

        .legend {
            display: flex;
            justify-content: center;
            margin-bottom: -20px;
            
        }

        .legend-item {
            display: flex;
            align-items: center;
            margin-right: 5px;
            font-family: 'Noto Sans JP', sans-serif;
            color: #fff;
            font-weight: bold;
        }

        .legend-item span {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .legend-item .load {
            background-color: green;
        }

        .legend-item .fee {
            background-color: red;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 0.5rem;
            flex-direction: column;
        }

        .button {
            display: inline-block;
            padding: 0.5rem 0.5rem;
            margin: 0.5rem;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            border-radius: 30px;
            max-width: 10000px;
            width: 40%;
            background-color: #fff;
            color: #000;
    }

    .button:hover {
        opacity: 0.8;
    }

    .button:active {
        transform: scale(0.98);
    }

    .button:first-child {
        background-color: #fff;
        color: #000;
    }

    .button:last-child {
        background-color: #2F58CD;
        color: #000;
    }
</style>
</head>
<body>
    <!-- Logo -->
    <div class="header-container">
        <div class="logo-container">
            <div style="text-align: center;">
                <img src="EASYPAHABA.png" alt="Logo" width="250">
            </div>
        </div>
    </div>
    <div class="legend">
        <div class="legend-item">
            <span class="load"></span>
            Load
        </div>
        <div class="legend-item">
            <span class="fee"></span>
            Fee
        </div>
    </div>
<div class="main">
    <h1 class="header">Latest Transactions</h1>

    </div>
    
   <div class="table-container">
<table>
    <thead>
      <tr>
        <th>Date</th>
        <th>Fee/Load</th>
      </tr>
    </thead>
    <tbody class="tbody">
      <?php foreach ($transactions as $transaction) : ?>
        <tr>
          <td><?= $transaction['transaction_date'] ?></td>
          <td>
            <?php if (!is_null($transaction['fee'])) : ?>
              <span style="color: red;">P<?= number_format($transaction['fee'], 2) ?></span>
            <?php elseif (!is_null($transaction['Load'])) : ?>
              <span style="color: green;">P<?= number_format($transaction['Load'], 2) ?> </span>
            <?php endif ?>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
    <div class="container" style="display: flex; justify-content: center;">
        <a href="<?= base_url('public/UserDashboard'); ?>" class="button" style="background-color: #fff; color: #000;">Back</a> 
    </div>
</div>
</body>
</html>