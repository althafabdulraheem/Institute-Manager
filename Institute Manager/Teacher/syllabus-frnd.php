<?php
include("../DBcon.php");
$query="SELECT name,stud_id FROM studinfo";
$conff_query=mysqli_query($conff,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" type="text/css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Syllabus</title>
</head>
<style>
   .input-group-text{
    background-color: #0677e9;
   }
   .navbar-brand{
        font-weight:bold;
    }
    .nav-item a{
        color:white;
        font-weight:bold;

    }
</style>
<body>
    <nav class="navbar navbar-expand bg-primary">
      <div class="container">
      <div class="navbar-brand">Teacher</div>
        <div class="navbar-nav">
            <div class="nav-item">
                <a href="#" class="nav-link">Logout</a>
            </div>
        </div>
      </div>  
       

    </nav>
    <div class="container">
       <div class="m-5 col-lg-10">
           <div class="input-group">
                     <input list="name" name="name" autocomplete="off" class="form-control" placeholder="enter id or name" required> 
                        <datalist id="name">
                        <?php  
                        while($data=mysqli_fetch_assoc($conff_query))
                        {
                            echo"
                            <option value='$data[stud_id]'>$data[name]</option>

                            
                            
                            ";
                        }

                        ?>
                        </datalist>
                        
                            <button class="btn btn-primary btn-lg" id="search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                       
                       

           </div>
                
       </div>

       
    </div>
    <hr>
    <section id="data">
                          
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#search").click(function(){
            $("#data").load("syllabus-load.php");
        });
     
    });
</script>   
</body>
</html>