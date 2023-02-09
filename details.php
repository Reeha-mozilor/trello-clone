<?php
require 'dbcon.php';
echo $id;
if (isset($_GET['id'])) {
    $id=$_GET['id'];

    $sql="Select * from todolist where id=$id";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        echo json_encode($row);
    }else{
    }
    

}
    
