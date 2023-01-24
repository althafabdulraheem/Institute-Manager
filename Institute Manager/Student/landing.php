<?php
    include("../DBcon.php");
    $query="SELECT * FROM syllabus";
    $query_conff=mysqli_query($conff,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" type="text/css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Student</title>
</head>
<style>
     .navbar-brand{
        font-weight:bold;
        color:#fff;
        letter-spacing:3px;
    }
    .nav-item a{
        color:white;
        font-weight:bold;

    }
    .modules{
        margin-top:160px;
    }
    .modules
    {
        border-left: solid 10px #6abeed;    }
    .sections
    {
        background-color: #b5d8f1;
    }
</style>
<body>
<nav class="navbar navbar-expand bg-primary">
        <div class="container">
            <a href="#" class="navbar-brand">STUDENT</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="./exam-land.php" class="nav-link">Exam</a>
                </li>
                <li class="nav-item">
                    <a href="survey-frnd.php" class="nav-link">Survey</a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Logout</a>
                </li>

            </ul>

        </div>

    </nav>
    <section id="sylabus">
        <div class="container mx-auto my-5" style="width:200px;">
            <div class="modules">
             <br>
                <div class="sections">
             
                    <ul>
                    <?php    
                    while($data=mysqli_fetch_assoc($query_conff))
                    {
                        echo"<li>$data[sec]</li>";
                        
                    
                    }?>
                    </ul>
                </div>
            </div>
            
        </div>  
    </section>
         
   
    
</html>