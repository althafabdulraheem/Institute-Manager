<?php
$username=$_POST['username'];
$password=$_POST['password'];
echo"$username $password";
if($username=="admin"&&$password=="123")
{
    header("location:./Admin/landing.php");
}
elseif($username=="teacher"&&$password="123")
{
    header("location:./Teacher/landing.php");
}
elseif($username=="student" && $password=="123")
{
    header("location:./Student/landing.php");
}
elseif($username=="manager" && $password=="123")
{
    header("location:./Manager/landing.php");
}
else{
    header("location:index.php");
}






?>