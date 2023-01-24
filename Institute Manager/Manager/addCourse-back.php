<?php
include("../DBcon.php");
$Cname=$_POST['Cname'];
$Cdur=$_POST["Cdur"];
$Cfee=$_POST['Cfee'];
$Ccode=$_POST['Ccode'];
$Cfirst=$_POST['Cfirst'];
$Csecond=($Cfee-$Cfirst)/2;
$Cthird=$Csecond;
$count=$_POST['count'];
$i=0;
while($i<=$count)
{
    $slbs= $_POST['slbs'."".$i];
    $insertSlbs="INSERT INTO syllabus(course,sec,course_id)VALUES('$Cname','$slbs','$Ccode')";
    mysqli_query($conff,$insertSlbs);
    $i++;
}
echo"$slbs";
$insert="INSERT INTO course(Cname,Ccode,Cfee,Cduration,first,second,third)VALUES('$Cname','$Ccode','$Cfee','$Cdur','$Cfirst','$Cthird','$Cthird')";
mysqli_query($conff,$insert);
header("location:addCourse.php");
?>