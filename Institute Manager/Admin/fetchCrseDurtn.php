<?php
include("../DBcon.php");
    $course=$_POST['data'];
    $fetch="SELECT Cfee,Cduration,first FROM course WHERE Cname='$course' ";
    $fetchC=mysqli_query($conff,$fetch);
    $data=mysqli_fetch_assoc($fetchC);
    echo $data['Cfee'].",".$data['Cduration'].",".$data['first'];

?>

