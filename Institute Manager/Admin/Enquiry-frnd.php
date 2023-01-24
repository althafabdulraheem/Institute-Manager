<?php
include("../DBcon.php");
$query="SELECT * FROM Enquiry";
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
    <title>Enquiry</title>
</head>
<style>
    .status{
        border-style:hidden;
        background-color:white;
        
    }
    .status:focus{
        outline:none;

    }
    thead{
         font-weight:bold;   
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
            <a href="#" class="navbar-brand">ADMIN</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="addEnquiry-frnd.php" class="nav-link">Add</a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link">Logout</a>
                </li>
                <li class="nav-item">
                    <a href="./landing.php" class="nav-link">Home</a>
                </li>
            </ul>

        </div>

    </nav>
    <div class="container">
        <br>
         <h1 id="text">Enquiry</h1>
         
            <div class="modal">

            </div>
            <br>
            <table class="table" id="tab">
                <thead>
                    <tr>
                        <td>NAME</td>
                        <td>PLACE</td>
                        <td>MOBILE</td>
                        <td>COURSE</td>
                        <td>DATE</td>
                        <td>STATUS</td>
                        <td>ASSIGN</td>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                <?php 
                $i=1; 
                $y=10;
                    while($data=mysqli_fetch_assoc($query_conff))
                    {

                        echo"
                            <tr id=".$i.">
                                <td>".$data['name']."</td>
                                <td>".$data['place']."</td>
                                <td>".$data['mobile']."</td>
                                <td>".$data['course']."</td>
                                <td>".$data['date']."</td>
                                <td id='$y'>
                                            <select class='status' id='$i'>
                                                <option selected='selected' disabled>".$data['status']."</option>
                                                <option value='7-one week'>one week</option>
                                                <option value='2-two days'>two days</option>
                                                <option value='0-not intereted'>not interested</option>
                                                <option value='0-interested'>interested</option>
                                            </select>
                                </td>
                                <td>".$data['assign']."</td>
                                <td><button class='subbtn' id='b$i' data-id=".$data['id']." value='yes'>submit</button></td>    
                                
                            </tr>";
                            $i++;
                            $y++;
                    }
                ?> 

                </tbody>
                
            </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("tbody tr button").hide();
            $(".status").change(function(){
                let sid=$(this).attr("id");
                $("tbody tr #b"+sid).show();
                var val=$(this).val();
                var check=val.split("-");
                var data1=check[0];var data2=check[1]
                
                $("tbody tr #b"+sid).val(val);//assigning val to subtn
               var xxd=$("tbody tr #b"+sid).val(); 
                              
            }); 
            $(".subbtn").click(function(){

                let status=$(this).val();
                var check=status.split("-");
                var data1=check[0];var data2=check[1]

                if(data2=="interested")
                {
                 window.location.href="./admission-frnd.php";
                }
                            
                $("tbody").append("<tr><td id='h'></td><td></td><td></td></tr>");
                var id=$(this).attr("data-id");
                $.post("loadEnquiry.php",{id:id,status:status},function(data,status){
                        
               });
               
                   
               

            });  
        
    
          

        });
    </script>
</body>
</html>