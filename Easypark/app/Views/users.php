<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="parkingusers.css">
            <style>
        body {
            background-image: url("2.png");
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
        }
                .sidenav {
            padding-top: 30px;
        }
        .main {
            padding-top: 30px;
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
<div class ="main">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>CURRENT USERS</h4>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($users)) { ?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>

                                        <th>RFID Number</th>
                                        <th>Username</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Balance</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user) { ?>
                                        <tr>
                                            <td><?= $user['rfid_no'] ?></td>
                                            <td><?= $user['username'] ?></td>
                                            <td><?= $user['name'] ?></td>
                                            <td><?= $user['email'] ?></td>
                                            <td><?= $user['phone'] ?></td>
                                            <td><?= $user['role'] ?></td>
                                            <td>P<?= $user['balance'] ?></td>
                                            <td> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editUserModal" data-id="<?= $user['id'] ?>" data-rfid_no="<?= $user['rfid_no'] ?>" data-name="<?= $user['name'] ?>" data-username="<?= $user['username'] ?>" data-email="<?= $user['email'] ?>" data-phone="<?= $user['phone'] ?>">Edit</button></td>
                                            
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div class="pagination">
                                 <?= $pager->links() ?>
                            </div>
                        <?php } else { ?>
                            <p>No users found.</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true" style="z-index: 1050;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                    <input type="hidden" name="id" id="id" value="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
               <form method="post" action="<?= base_url('public/Users/update/') ?>" id="editUserForm">
                <div class="modal-body">
                    
                    <label for="rfid_no">RFID Number:</label>
                    <input type="text" name="rfid_no" id="rfid_no"><br>
                    
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name"><br>
                    
                    <label for="username">Userame:</label>
                    <input type="text" name="username" id="username"><br>
                    
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email"><br>
            
                    <label for="phone">Phone:</label>
                    <input type="tel" name="phone" id="phone"><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.3/dist/umd/popper.min.js"></script>
    <script>
   $('#editUserModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') // Extract info from data-* attributes
    var rfid_no  = button.data('rfid_no');
    var username = button.data('username');
    var name = button.data('name')
    var email = button.data('email')
    var phone = button.data('phone')
    var modal = $(this)
    modal.find('#id').val(id)
    modal.find('#rfid_no').val(rfid_no)
    modal.find('#username').val(username)
    modal.find('#name').val(name)
    modal.find('#email').val(email)
    modal.find('#phone').val(phone)
    modal.find('#editUserForm').attr('action', '<?= base_url('public/Users/update/') ?>' + id)
})
</script>
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
