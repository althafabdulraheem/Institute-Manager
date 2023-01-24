<?php
include("../DBcon.php");
    $fetch="SELECT Cname FROM course";
    $fetchC=mysqli_query($conff,$fetch);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" type="text/css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/payment.css" type="text/css">
    <title>ADMISSION</title>
</head>
<style>
      .navbar-brand{
        font-weight:bold;
    }
    .nav-item a{
        color:white;
        font-weight:bold;

    }
    p{
        color: #af9e9e;
    }
    label{
        color:blue;
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
                    <a href="./landing.php" class="nav-link">Home</a>
                </li>
            </ul>

        </div>

    </nav>
    <div class="container" style="margin-top:30px">
        <h1>Admission</h1>
        <p>Fill The Details.........</p>
            <form action="admission-back.php" method="post">  
               <div class="first">
               <input type="text" id="name" placeholder="enter the name......." required name="name" class="form-control"><br>
                <input type="text" placeholder="Place.........." name="address" id="place" required class="form-control"><br>
                <div class="form-floating">
                     <input id="adfee" type="number" min="2000" placeholder="admission fee..."  value="800" readonly name="amount" max="3000" class="form-control">
                    <label for="adfee">Admission Fee:</label>
                </div><br>
                <input type="tel" maxlength='10' minlength="10" pattern="[0-9]{10}"required id="mob" name="mobile" class="form-control" placeholder="mobile" required><br>
                <div class="input-group">
                    <select name="course" id="course" required class="form-select">
                        <option value="" selected="selected" disabled>SELECT COURSE</option>
                        <?php
                        while($course=mysqli_fetch_assoc($fetchC))
                            echo"<option value='$course[Cname]'>$course[Cname]</option>"
                       ?>
                    </select>
                    <div class="input-group-text">&#8377;	</div>
                    <input type="text"   class="form-control" readonly id="cfee" placeholder="pls select course..." name="cfee">
                    <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg></div>
                    <input type="text" value="pls select course" class="form-control" id="duration" readonly>
                </div>
             </div>
               <div class="second">
                   <div class="phead">
                       <div class="text">Payment</div>
                   </div>
                   <div class="pcontent">
                       <div class="type">
                           <div class="form-check">
                               <label for="full">Full Amount</label>
                               <input type="radio" value="Full" id="full" name="camount">
                               <label for="instalment">Installment</label>
                               <input type="radio" value="Installment" id="instalment" name="camount">
                           </div>
                       </div>
                       <div class="fields">
                           <div class="form-floating">
                               <input type="text" id="camntval" name="pamount" class="form-control" readonly>
                                <label for="camntval">Amount:</label>
                           </div>
                       </div>
                   </div>

               </div>
                <br>
               
               <div class="button d-flex justify-content-center">
                   <button class="btn btn-primary btn-lg" id="nxtbtn">Next</button>
                   <button class="btn btn-primary btn-lg" id="subbtn">Submit</button>
                

               </div> 
               
            </form>


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#subbtn").hide();
            $(".second").hide();
            $("#nxtbtn").hide();
            let duration,fee,first;
           $("#course").change(function()
           {
               var x=$("#course").val();
               $.post("fetchCrseDurtn.php",{data:x},function(data,status)
               {
                let bundle=data.split(",")  //bundle of data
             
                duration=bundle[1];
                fee=bundle[0];
                first=bundle[2];
                $("#cfee").val(fee);
                $("#duration").val(duration);


               });
               if($("#name").val()!="" & $("#mob").val()!="" & $("#place").val()!="")
           {
            $("#nxtbtn").show();
           }

               
           });
          
           $("#nxtbtn").click(function(e){
               e.preventDefault();
                $(".first").hide();
                $(".second").show();
                $("#nxtbtn").hide();
                $("#subbtn").show();
           });
           $("input[name=camount]").click(function(){
                let type=$("input[name=camount]:checked").val()
                if(type=="Full")
                {
                    $("#camntval").val(fee);
                }
                else{
                    $("#camntval").val(first)
                }
           });
        });
    </script>
</body>
</html>