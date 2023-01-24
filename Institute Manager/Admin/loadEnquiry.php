<?php
include("../DBcon.php");
$id=$_POST['id'];
$status=$_POST['status'];
$query="SELECT * FROM Enquiry WHERE id='$id'";
$query_conff=mysqli_query($conff,$query);
$data=mysqli_fetch_assoc($query_conff);
$S_explode=explode("-",$status);//exploding status
$msg=$S_explode['1'];
$assign=$S_explode['0'];
$name=$data['name'];
$date=date("d-m-y");
$mobile=$data['mobile'];
$course=$data['course'];
$place=$data['place'];
$assign=date("d-m-y",strtotime("+$assign day"));
$insert="INSERT INTO Enquiry(name,place,mobile,status,date,assign,course)VALUES('$name','$place','$mobile','$msg','$date','$assign','$course')";
mysqli_query($conff,$insert);
?>