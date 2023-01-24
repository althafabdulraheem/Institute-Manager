<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Teacher</title>
</head>
<style>
       .navbar-brand{
        font-weight:bold;
    }
    .nav-item a{
        color:white;
        font-weight:bold;

    }
   #btn1:hover,#btn3:hover{
        background-color:white;
        color:black;
    }

</style>
<body>
    <nav class="navbar navbar-expand bg-primary">
        <div class="container">
            <div class="navbar-brand">Teacher</div>
        </div>
        <div class="navbar-nav">
            <div class="nav-item">
                <a href="#" class="nav-link">Logout</a>
            </div>
                    
        </div>
    </nav>
    <div class="container">
            <div class="menu  my-5 mx-auto"  style="width:100px;">
                      
                    <div class="btn-group-vertical my-5">
                        <a href="./syllabus-frnd.php" id="btn1" class="btn btn-primary btn-lg">Sylabus</a>
                        <a href="#" class="btn btn-secondary btn-lg">Mark</a>
                        <a href="#"  id="btn3"class="btn btn-primary btn-lg">Attendance</a>

                    </div>        
                            
                       
            </div>    
                
    </div>
   
</body>
</html>