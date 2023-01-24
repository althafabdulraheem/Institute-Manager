<?php
include("../DBcon.php");
$query="SELECT * FROM course";
$qconff=mysqli_query($conff,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Course List</title>
</head>
<style>
    .table{
        border-style:hidden;
    }
</style>
<body>
    <nav class="navbar navbar-expand bg-primary">
        <div class="container">
        <a href="#" class="navbar-brand">Manager</a>
       
       <ul class="navbar-nav">
          <li class="nav-item">
             <a href="addCourse.php" class="nav-link">Add</a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">Logout</a>

          </li>

       </ul>
        </div>

    </nav>
    <section id="courses">
        <div class="container">
            <?php
                while($course=mysqli_fetch_assoc($qconff))
                {
                   echo"
                    <div class='accordion' id='accordionExample'>
                    <div class='accordion-item'>
                        <h2 class='accordion-header' id='headingOne'>
                        <button class='accordion-button' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>
                            <table class='table'>
                                
                                    
                                        <tr>
                                            <td>".$course['Cname']."</td><td>".$course['Cduration']."</td> <td>".$course['Cfee']."</td>
                                        </tr>
                                       
                                        
                                
                            </table>
                        </button>
                        </h2>";
                        $fetch_slbs="SELECT * FROM syllabus WHERE course_id='$course[Ccode]'";
                        $fetchconff=mysqli_query($conff,$fetch_slbs);
                        echo"
                        <div id='collapseOne' class='accordion-collapse collapse show' aria-labelledby='headingOne' data-bs-parent='#accordionExample'>
                        <div class='accordion-body'>
                            <ul align='center'>";
                            while($fetch=mysqli_fetch_assoc($fetchconff))
                            {
                                echo" <li>$fetch[sec]</li>";
                            }
                            ?>
                            
                                
                            </ul>
                        </div>
                        </div>
                    </div>

               <?php }?>
               

    </section>
   
</body>
</html> 