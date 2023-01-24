<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" type="text/css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>ADMIN</title>
</head>
<style>
    .item
    {
        height:100vh;
    }
    .navbar-brand{
        font-weight:bold;
    }
    .nav-item a{
        color:white;
        font-weight:bold;

    }
</style>
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

 </div>

  <div class="container">  
        <div class="item  d-flex align-items-center justify-content-center flex-wrap-wrap">
                 <div class="btn-group">
                    <a class="btn btn-outline-primary btn-lg" href="./Enquiry-frnd.php">ENQUIRY</a>
                    <a class="btn btn-primary btn-lg" href="./admission-frnd.php">ADMISSSION</a>
                    <a class="btn btn-outline-primary btn-lg" href="./fee-frnd.php">FEE</a>
                    <a href="./pending_list.php" class="btn btn-primary">PENDING</a>
                </div>
        </div>

     
  </div>
</body>
</html>