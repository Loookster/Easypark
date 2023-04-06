<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class ="main">
    <h1>Welcome
        <?php 
        $session = session(); $user_name = $session->get('user_name');
        echo $user_name;
        ?>!
    </h1>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Users List</h4>
                    </div>
                    <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($result as $row): 
                                        if($row['status'] == "taken"){
                                            $color = "red";
                                        }
                                        else{
                                            $color = "green";
                                        }?>
                                    <tr>
                                        <td><?php echo $row['slot_name']; ?></td>
                                        <td style = "background-color: <?= $color ?>"><?php echo $row['status']; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <a href="<?= base_url('public/UserDashboard'); ?>" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>