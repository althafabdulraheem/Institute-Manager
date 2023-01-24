<?php
include("../DBcon.php");
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$course=$_POST['course'];
$date=date("d-m-y");
$cfee=$_POST['cfee'];
$pamount=$_POST['pamount'];
$sql="SELECT COUNT(*) FROM studinfo";
$sql_conff=mysqli_query($conff,$sql);
$fetch=mysqli_fetch_assoc($sql_conff);
$i=$fetch['COUNT(*)'];
if($i=="0")
{
    $i=1;
}
else{
    $i++;
}

$stud_id="MATX$i";
if($pamount==$cfee)
{
    $status="completed";
    $query="INSERT INTO studinfo(stud_id,name,mobile,place,course,amount,date)VALUES('$stud_id','$name','$mobile','$address','$course','$cfee','$date')";
    mysqli_query($conff,$query);
    $fee_insert="INSERT INTO fee(stud_id,name,type,date,status,amount)VALUES('$stud_id','$name','Full Fee','$date','$status','$cfee')";
    mysqli_query($conff,$fee_insert);
}
                    // if($pamount<$cfee)
                    // {
                    //     $rem=($cfee-$pamount)/2;
                    //     $status="$rem-pending";   // if pending in instalment exists
                    //     $pndng="second";
                    // }
                    // else{
                    //     $status="completed";//if pending instal paisa;;
                    //     $rem=0;
                    //     $pndng="NIL";
                    // }
else
{
$rem=0;
$pndng="NIL";
$status="paid";

$next=date('d-m-y',strtotime("+15 days"));
$query="INSERT INTO studinfo(stud_id,name,mobile,place,course,amount,date)VALUES('$stud_id','$name','$mobile','$address','$course','$cfee','$date')";
mysqli_query($conff,$query);
$fee_insert="INSERT INTO fee(stud_id,name,type,date,status,amount)VALUES('$stud_id','$name','First Instalment','$date','$status','$cfee')";
mysqli_query($conff,$fee_insert);
$fee_alert="INSERT INTO fee_alert(stud_id,pending,next,cat,pamount,xamount)VALUES('$stud_id','$pndng','$next','second','$rem','$pamount')";
mysqli_query($conff,$fee_alert);
}
header("location:./fee_recipt.php?name=$name,$pamount,$course");
?>
