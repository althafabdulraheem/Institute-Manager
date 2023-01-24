<?php
include("../DBcon.php");
$query_slbs="SELECT * FROM `syllabus`";
$slbs_conff=mysqli_query($conff,$query_slbs);
?>
<div class="container">
<form action="./syllabus-back.php" method="post">
<?php   
while($slbs=mysqli_fetch_assoc($slbs_conff))
            {
 echo"               
 <div class='input-group mt-5'>
   
    <div class='input-group-text'>
    
           
                   <input type='checkbox' value='$slbs[id]' class='form-check' name='id[]'>
            
      

    </div>
    <input type='text' class='form-control' value='$slbs[sec]' readonly>
 </div>";}
 ?>
 <div class="d-flex justify-content-center">
         <input type="submit" class="btn btn-outline-primary my-5" id="subbtn">

 </div>
 </form>
</div>
<script>
       $("#subbtn").click(function(e){
                if($(".form-check").is(":checked"))
                {
                    alert("Submiting...........");
                }
                else{
                        e.preventDefault();
                        alert("pls select something...")
                }
        });
              
</script>
