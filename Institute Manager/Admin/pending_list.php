<?php
include("../DBcon.php");
$query="SELECT * FROM fee_alert INNER JOIN studinfo ON fee_alert.stud_id=studinfo.stud_id";
$Qconff=mysqli_query($conff,$query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" type="text/css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Pending List</title>
</head>
<body>
<nav class="navbar navbar-expand bg-primary">
    <div class="container">
        <a href="#" class="navbar-brand">ADMIN</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link">Logout</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">ResetPassword</a>
            </li>
        </ul>
    </div>

</nav>
<section class="main">
    <div class="container">
        <h1 class="text-center my-5">Pending List</h1>
        <div class="table">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>NAME</td>
                        <td>COURSE</td>
                        <td>PENDING</td>
                        <td>AMOUNT</td>
                        <td>DATE</td>
                        <td>STATUS</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            while($data=mysqli_fetch_assoc($Qconff))
                            {
                            echo"
                            <tr>
                                <td>".$data['stud_id']."</td>
                                <td>".$data['name']."</td>
                                <td>".$data['course']."</td>
                                <td>".$data['cat']."</td>
                                <td>".$data['nxtamnt']."</td>
                                <td>".$data['next']."</td>
                                <td>Need to be payed on or before ".$data['next']."</td>
                            </tr>

                            ";}
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>
    
</body>
</html>