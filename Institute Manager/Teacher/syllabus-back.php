<?php
include("../DBcon.php");
$id=$_POST['id'];
$count=count($id);
// echo"$count";
$i=0;
while($i<$count)
{
    $query="INSERT INTO stud_slbs(stud_id,slbs_id)VALUES('MATX1','$id[$i]')";
    mysqli_query($conff,$query);
    $i++;
}
//SELECT * FROM `syllabus` WHERE id IN(SELECT slbs_id FROM stud_slbs);
?>
