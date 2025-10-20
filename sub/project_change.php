<?php
include '../connect.php';

$cate=$_POST['cate'];
$num=$_POST['num'];

$sql="SELECT * FROM {$cate} WHERE num='$num'";
$res=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($res);
$title=$row['title'];
$file=$row['file'];

$arr=array($title, $file);

echo json_encode($arr);
?>