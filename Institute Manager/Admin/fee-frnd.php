<?php
include("../DBcon.php");
$query="SELECT name,stud_id FROM studinfo WHERE stud_id IN (SELECT stud_id FROM fee_alert)";
$conff=mysqli_query($conff,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" type="text/css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../dummy.css">
    <title>fee</title>
</head>
<style>
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
            <a href="#" class="navbar-brand">ADMIN</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                <a href="#" class="nav-link">Logout</a>
                </li>
                <li class="nav-item">
                    <a href="./landing.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                <a href="./fee_list.php" class="nav-link">List</a>
                </li>
            </ul>

        </div>

    </nav> 
    
    <h1 align="center" style="margin-top:30px;">fee</h1>
    <div class="form">
      <form action="fee-back.php" method="post">  
        <input list="student"  placeholder="enter name or id" id="name" autocomplete="off" name="name" class="form-control" required>
        <datalist id="student">
          <?php  
            while($data=mysqli_fetch_assoc($conff))
            {
                echo"
                <option value='$data[stud_id]'>$data[name]</option>

                
                
                ";
            }

            ?>
        </datalist>
        <br>
        <select name="type" id="ptype" required class="form-select">
            <option value=""selected="selected" disabled>Select</option>
            <option value="first" id="first"></option>
            
        </select>
        <br>
       <div class="input-group">
           
           <div class="input-group-text">&#x20B9;</div>
                <div class="form-floating">
                        <input type="number" name="amount" placeholder="Amount..............." min="1000" id="amnt" readonly class="form-control" required>
                        <label for="amnt">Amount</label>
                </div>
                <div class="form-floating">
                    <input type="text" placeholder="course" name="course" id="course" class="form-control" readonly required>
                    <label for="course">Course</label>

                </div>
           </div>            
             
            <input type="hidden" name="status" value="1" id="status">
       <br><input type="submit" id="subbtn" class="btn btn-primary" style="--bs-btn-padding-x:17rem;">
        </form>       

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#name").focusout(function(){
                $("#name").css("color","black");
                $("#subbtn").show();
                let id=$("#name").val();
               if(id !=="")
               { 
                $.post("./fee_check.php",{data:id},function(data,status){
                    let course,amount,type;
                    var status;
                    let check;
                    dataX=data.split("-");
                    // course=dataX[0]; 
                    // amount=dataX[1]; 
                    // type=dataX[2];
                    // status=dataX[3];
                    course=dataX[0];
                    amount=dataX[1];
                    type=dataX[2];
                   $("#status").val(status);
                   $("#course").css("color","black");
                    $("#course").val(course);
                    $("#ptype #first").text(type);
                    if(type=="Invalid")
                    {
                        alert("Invalid Student Choosed");
                        $("#subbtn").hide();
                        $("#course").css("color","red");
                        $("#name").css("color","red");
                    }                                               // if(type=="completed")
                        //old   no need                                          // {
                                                                    //     alert("fee payment completed");
                                                                    //     $("#subbtn").hide();
                                                                    // }
                    $("#ptype #first").val(type);
                    $("#amnt").val(amount);
                });
               } 
            });
            // $("#ptype").change(function(){
            //     let id=$("#name").val();
            //     let type=$("#ptype").val();
            //     if(id !=="")
            //     { 
            //         $.post("./fee_check.php",{data:id,type:type},function(data,status){
            //                 $("#msg").text(data);
            //         });
                    
            //     }

            // });   
            
        
        
        });

    </script>
</body>
</html>