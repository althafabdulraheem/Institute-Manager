<?php
  include("../DBcon.php");
  $query="SELECT name FROM teacher WHERE name NOT IN (SELECT teacher FROM survey WHERE stud_id='student')";
  $q_Conff=mysqli_query($conff,$query);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" type="text/css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <title>Survey</title>
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
  
    h1 sup svg:hover{
     cursor:help;
    }
</style>
<body>
  <nav class="navbar navbar-expand bg-primary">
   <div class="container">
   <a href="#" class="navbar-brand">STUDENT</a>
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
  <section id="select">
    <div class="container">
      <h1 class="my-4 ">Survey <sup style="color:blue;" data-toggle="tooltip" data-placement="right" title="Everything Will Be Confidential"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
</svg></sup></h1>
      <div class="form-floating my-5">
          <select name="" id="select" class="form-select my-3">
            <?php
              while($fetch=mysqli_fetch_assoc($q_Conff))
              {
                  echo"  <option value=$fetch[name]>$fetch[name]</option>";
              }
            ?> 

          </select> 
          <label for="select">Teacher Name:</label>
      </div>
                  
           
     </div>
  </section>   
  <section id="form">
    <div class="container">
       <form action="survey-back.php" method="post">
          <label for="first">1.Teachers Willingness For Help</label>
              <div class="input-group my-2">
                  <div class="input-group-text">
                      <input type="radio" class="form-check" id="fto" name="first"  value="Bad" required>
                  </div>
                        <input type="text" class="form-control" value="Bad" readonly>
                       

              
              </div><br>      
              <div class="input-group">
                <div class="input-group-text">
                  <input type="radio" class="form-check" id="fto" name="first"  value="Average">
                </div>
                  <input type="text" class="form-control" value="Average">
              </div><br>
              <div class="input-group">
                <div class="input-group-text">
                    <input type="radio" class="form-check" id="ftr" name="first"  value="Good">
                  </div>
                    <input type="text" class="form-control" value="Good">
              </div>

              <br>
              <label for="second">2.Teachers Behaviour</label>
              <div class="input-group my-2">
                  <div class="input-group-text">
                  <input type="radio" class="form-check" id="second" name="second" value="Bad" required>
                  </div>
                        <input type="text" class="form-control" value="Bad"  readonly>

              
              </div><br>      
              <div class="input-group">
                <div class="input-group-text">
                  <input type="radio" class="form-check" id="second" name="second" value="Average">
                </div>
                  <input type="text" class="form-control" value="Average">
              </div><br>
              <div class="input-group">
                <div class="input-group-text">
                    <input type="radio" class="form-check" id="second" name="second" value="Good">
                  </div>
                    <input type="text" class="form-control" value="Good">
              </div>

              <br>
              <label for="third">3.Speed Of Class Taking</label>
              <div class="input-group my-2">
                  <div class="input-group-text">
                  <input type="radio" class="form-check" id="third" name="third" value="Too Fast">

                  </div>
                        <input type="text" class="form-control" value="Too Fast"  readonly>
             
              </div><br>      
              <div class="input-group">
                <div class="input-group-text">
                <input type="radio" class="form-check" id="third" name="third" value="good">
                </div>
                  <input type="text" class="form-control" value="Good">
              </div><br>
              <div class="input-group">
                <div class="input-group-text">
                    <input type="radio" class="form-check" id="third" name="third" value="Just Right">
                  </div>
                    <input type="text" class="form-control" value="Just Right">
              </div>

              <br>
              
              <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="comment" name="additional" style="height: 100px"></textarea>
                  <label for="comment">Pls write something.........</label>
              </div>
                
                <div class="d-flex justify-content-center my-3">
                  <input type="submit" class="btn btn-outline-primary" id="subtn">

                </div>
                <input type="hidden" value="" id="teacher" name="teacher">
          </form>
    </div>
     
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $("#subtn").click(function(){

      let x=$("select").val();
         $("#teacher").val(x);
         var y=$("#teacher").val();

         
    });
  });
</script>
</body>
</html>