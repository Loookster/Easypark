<!DOCTYPE html>
<html>
<head>
    <title>User Balance</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main">
    <h1>Welcome 
        <?php 
        $session = session();
        $user_name = $session->get('user_name');
        echo $user_name;
        ?>!
    </h1>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <?php if (!empty($users)) { ?>
                            <?php foreach ($users as $user) { 
                                if($user['username'] == $user_name){
                            ?>
                                <h2>Your current balance is: $<?= number_format($user['balance'], 2); ?></h2>
                            <?php }} ?>
                        <?php } else { ?>
                            <p>No users found.</p>
                        <?php } ?>
                        <a href="<?= base_url('public/SlotsController'); ?>" class="btn btn-primary mt-3">View Slots</a>
                        <a href="<?= base_url('public/TransactionController'); ?>" class="btn btn-secondary mt-3">Transaction History</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>