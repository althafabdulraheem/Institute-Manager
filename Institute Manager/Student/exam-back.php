<?php
$ans1=$_POST['qone'];
$ans2=$_POST['qtwo'];
$ans3=$_POST['qthree'];
$count=0;
if($ans1=="machine")
{
    $count=$count+1;
    $ans1="";
}
if($ans2=="ram")
{
    $count=$count+1;
    $ans2="";
}
if($ans3=="twitter")
{
    $count=$count+1;
    $ans3="";
}
echo"<h1>Your Score=$count</h1>    ";
echo"<u>Answers</u>";
echo"<pre>
1.[C] <del>$ans1</del>
2.[A]  <del>$ans2</del>
3.[D]  <del>$ans3</del>

</pre>";

?>