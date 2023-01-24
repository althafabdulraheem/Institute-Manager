<?php
include("../DBcon.php");
$name=$_POST['name'];
$place=$_POST['place'];
$mobile=$_POST['mobile'];
$course=$_POST['course'];
$status=$_POST['status'];
$split=explode('-',$status);//for spliting into array
$msg_id=$split[0];
$msg=$split[1];
$date=date('d-m-y');
$assign=date('d-m-y',strtotime("+$msg_id day"));
$query="INSERT INTO Enquiry(name,place,mobile,course,status,msg_id,date,assign)VALUES('$name','$place','$mobile','$course','$msg','$date','$assign')";
mysqli_query($conff,$query);
header("location:./addEnquiry-frnd.php");
?>