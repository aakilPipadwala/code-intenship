<?php
$connect = mysqli_connect("localhost", "root", "","db_student");
$id=$_GET['deleteid'];
$x=mysqli_query($connect,"update tb_student set is_delete=1 where st_id ='{$id}'") or die (mysqli_error($connect));
if($x)
{
    echo"<script> alert('Record deleted');window.location='fetch.php';</script>";
}


