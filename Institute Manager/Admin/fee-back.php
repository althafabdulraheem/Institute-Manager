<?php
include("../DBcon.php");
$stud_id=$_POST['name'];
$type=$_POST['type'];
$amount=$_POST['amount'];
$course=$_POST['course'];
// $status=$_POST['status'];
$date=date("d-m-y");
$assign=date("d-m-y",strtotime("+10days"));
$query1="SELECT name FROM studinfo WHERE stud_id='$stud_id'";
$conff1=mysqli_query($conff,$query1);
$data1=mysqli_fetch_assoc($conff1);
$name=$data1['name'];
// if($status=="0")// if no pending
// {
    $delete="no";
    if($type=="first")
    {
        $nextT="second";//next TYpe
        $query1="SELECT $nextT FROM course" ;
        $conff1=mysqli_query($conff,$query1);
        $dataNxt=mysqli_fetch_assoc($conff1);
        $nxtamnt=$dataNxt[$nextT];
    }
    elseif($type=="third")
    {
       $delete="yes";                     // $nextT="completed";
                            // $assign="NA";
    }
    else{
        $nextT="third";
        $query1="SELECT $nextT FROM course" ;
        $conff1=mysqli_query($conff,$query1);
        $dataNxt=mysqli_fetch_assoc($conff1);
        $nxtamnt=$dataNxt[$nextT];
    }
    $status="paid";
    if($delete=="yes")
    {
        $fee_insert="INSERT INTO fee(stud_id,name,type,date,status,amount)VALUES('$stud_id','$name','$type','$date','$status','$amount')";
        mysqli_query($conff,$fee_insert);
        $delQ="DELETE FROM fee_alert WHERE stud_id='$stud_id'";
        mysqli_query($conff,$delQ);
        
    }
    else{

    $update="UPDATE fee_alert SET cat='$nextT',next='$assign',nxtamnt='$nxtamnt' WHERE stud_id='$stud_id'";
    mysqli_query($conff,$update);
    $fee_insert="INSERT INTO fee(stud_id,name,type,date,status,amount)VALUES('$stud_id','$name','$type','$date','$status','$amount')";
    mysqli_query($conff,$fee_insert);}
// }
// else{  // if pending exixts
//     $status="paid";
//     $update="UPDATE fee_alert SET pending='NIL',pamount='0' WHERE stud_id='$stud_id'";
//     mysqli_query($conff,$update);
//     $fee_insert="INSERT INTO fee(stud_id,name,type,date,status,amount)VALUES('$stud_id','$name','$type','$date','$status','$amount')";
//     mysqli_query($conff,$fee_insert);
// }

?>