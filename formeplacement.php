<?php
$n=$_POST['sname'];
$c=$_post['sreg'];
$e=$_post['semail'];
$p=$_post['spass'];
$cp=$_post['scpass'];
$con=mysqli_connect("localhost","root","","placement");
$sql="INSERT INTO placementdetails(name,registerno,email,password,cpassword)";
$r=$mysql_quary($con,$sql);
if($r)
{
    echo"SUCCESFULLY REGSITER";
}
echo
{
    echo"NOT REGSITER";
}
?>