<!DOCTYPE html>
<html>
<head>
    <title>Parking Slot Monitor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="slot.css">
    <style>
        body {
            background-image: url("2.png");
            background-size: 100% 100%;
            background-position: center;
            margin: 0;
            overflow:hidden;
        }
        .sidenav{
            padding-top:20px;
        }
        .main {
            padding-top: 30px;
            margin-left:10%;
        }
        .slot-container {
          display: flex;
          justify-content: center;
          flex-wrap: wrap;
          margin-top: 50px;
          height:50%;
          width:100%;
          margin-left:10%
        }

    </style>
</head>
<body>
    <div class="sidenav">
        <img src="EASYPARK.png" alt="Your Logo">
        <a href="<?= base_url('public/Dashboard')?>"><i class='bx bxs-dashboard'></i> DASHBOARD</a>
        <a href="<?= base_url('public/Users')?>"><i class='bx bx-user' ></i> PARKING USERS</a>
        <a href="<?= base_url('public/ParkingSlotController')?>"><i class='bx bx-car'></i> PARKING SLOTS</a>
        <a href="<?= base_url('public/AdminViewController')?>"><i class='bx bx-transfer' ></i> TRANSACTION HISTORY</a>
        <a href="<?= base_url('public/Load')?>"><i class='bx bx-wallet' ></i> LOAD BALANCE</a>
        <a href="<?= base_url('public/UserDashboard/logout')?>"><i class='bx bx-log-out' ></i> LOGOUT</a>
    </div>
    <div class="main">
        <h1>Parking Slots</h1>
        <div class="slot-container"> <!-- Added an ID to the container -->
            <iframe src = "https://carparking-2b2cf.web.app/" title = "iframe" style = "height:100%; width:70%;margin-bottom:5vh;background-color:white;"></iframe>
        </div>
    </div>

    
</body>
</html>