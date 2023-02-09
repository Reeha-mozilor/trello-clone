<?php
require 'dbcon.php';
if (isset($_GET['item'])) {
    $item=$_GET['item'];
    $prid=$_GET['prid'];


$sql = "INSERT INTO todolist(item,prid)
VALUES (?,?)";

$stmt = mysqli_prepare($conn, $sql);


if ($stmt === false) {

        echo mysqli_error($conn);

    } else {
        mysqli_stmt_bind_param($stmt,"ss",
                  $item,
                  $prid
                  );
        if (mysqli_stmt_execute($stmt)) {
        } else {

            echo mysqli_stmt_error($stmt);
        }
    }


    $sql="Select * from todolist where item='$item'";

    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        echo json_encode($row['id']);
    }else{
    }

}