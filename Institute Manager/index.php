<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="dummy.css" type="text/css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" type="text/css">
    <title>login</title>
</head>
<style>
    #form{
        height:100vh;
        
    }
    input[type=submit]
    {
        margin-top:20px;
        margin-left:10px;
    }
    input[type=submit]:hover
    {
        background-color:white;
        color:blue;
    }
    .item{
        background-color:  #e7e2e2;
       padding: 50px;
}
    }
</style>
<body>
   <div class="container"> 
          <div class="d-flex justify-content-center align-items-center" id="form">
           <div class="item">   
            <form action="login-back.php" method="post">
            
              <div class="form-floating">
              <input type="text" id="uname" name="username"  class="form-control" required placeholder="uname">
                <label for="uname">Username</label>
                </div>
                <br>  
               <div class="form-floating">
                    <input type="password" id="password" name="password" class="form-control" placeholder="passord" required>
                        <label for="password">Password</label>
               </div>
       
            
               
                
            
                <input type="submit" class="btn btn-primary btn-lg" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 6rem;">
            </form>
            </div>
            </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>