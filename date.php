<?php
require 'dbcon.php';
$id=$_GET['id'];
$sql="Select id,curdate()-date from todolist where id=100";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    echo json_encode($row);
}else{
}
