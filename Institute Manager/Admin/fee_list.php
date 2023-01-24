<?php
    include("../DBcon.php");
    // $query1="SELECT * FROM fee INNER JOIN fee_alert ON fee.stud_id=fee_alert.stud_id";
     $query1="SELECT * FROM fee";
    
    $conff1=mysqli_query($conff,$query1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" type="text/css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>FEE-LIST</title>
</head>
<style>
      .navbar-brand{
        font-weight:bold;
    }
    .nav-item a{
        color:white;
        font-weight:bold;

    }
    thead{
        font-weight:bold;
    }
</style>
<body>
    <nav class="navbar navbar-expand bg-primary">
        <div class="container">
            <a href="#" class="navbar-brand">ADMIN</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">Logout</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container"> 
        <h1 style="margin-top:30px;">Fee List</h1>
                <table class="table table-striped ">
                    <thead class="table-dark">
                        <tr>
                            <td>ID</td>
                            <td>NAME</td>
                            <td>TYPE</td>
                            <td>STATUS</td>
                            <td>DATE</td>
                            <!-- <td>NEXT</td> -->
                        </tr>
                    </thead>
                    <tbody>
                <?php     
                    while($data1=mysqli_fetch_assoc($conff1))
                    {  
                    echo"     
                        <tr>
                            <td>".$data1['stud_id']."</td>
                            <td>".$data1['name']."</td>
                            <td>".$data1['type']."</td>
                            <td>".$data1['status']."</td>
                            <td>".$data1['date']."</td>
                            
                        </tr>" // put for next <td>".$data1['next']."</td>
                        ;
                    }?>
                    
                    </tbody>
                </table>
     </div>            
</body>
</html>