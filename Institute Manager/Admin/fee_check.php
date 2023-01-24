<?php
include("../DBcon.php");
$id=$_POST['data'];
// if(isset($_POST['type']))
// {
//     $next=$_POST['type'];
//     $query="SELECT pending FROM fee_alert WHERE stud_id='$id' AND type='$next'"; // only for pending instal ment need to check..
//     $conff=mysqli_query($conff,$query);
//     $fetch=mysqli_fetch_assoc($conff);
//     $msg=$fetch['pending'];
//     echo"$msg pending";
// }

$query1="SELECT course FROM studinfo WHERE stud_id='$id'";
$conff1=mysqli_query($conff,$query1);
$fetchC=mysqli_fetch_assoc($conff1);
if($fetchC=="")
{
    echo"Invalid-Invalid-Invalid";

}
else{
$course=$fetchC['course'];
$query2="SELECT pending,pamount,cat,xamount FROM fee_alert WHERE stud_id='$id'";
$conff2=mysqli_query($conff,$query2);
$fetchA=mysqli_fetch_assoc($conff2);
$pamount=$fetchA['pamount'];
$pendng=$fetchA['pending'];
$next=$fetchA['cat'];
$xamount=$fetchA['xamount'];
$query3="SELECT $next FROM course WHERE Cname='$course'";
$conff3=mysqli_query($conff,$query3);
$fetchB=mysqli_fetch_assoc($conff3);
$fee=$fetchB[$next];
if($pamount>0)
{
   
    echo"$course-$fee";//echo"$course-$pamount-$pendng-1";
}
else{
   echo"$course-$fee-$next";//echo"$course-$xamount-$next-0";
}
}

?>