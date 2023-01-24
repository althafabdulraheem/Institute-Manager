<?php
    include("../DBcon.php");
    $id="student";
    $name="abu";
    $behaviour=$_POST['second'];
    $speed=$_POST['third'];
    $help=$_POST['first'];
    $teacher=$_POST['teacher'];
    $insert="INSERT INTO survey(stud_id,behaviour,speed,help,teacher)VALUES('$id','$behaviour','$speed','$help','$teacher')"; 
    mysqli_query($conff,$insert);
    header("location:survey-frnd.php");
?>