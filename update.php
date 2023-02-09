<?php
require 'dbcon.php';
if (isset($_GET['id'])) {
    $id=$_GET['id'];
     
$id=$_GET['id'];
$item=$_GET['item'];
$date=$_GET['date'];
$time=$_GET['time'];


$sql = "update todolist
            set   item=?,
                  date=?,
                  time=?
                  where id='$id'";

   
$stmt = mysqli_prepare($conn, $sql);

if ($stmt === false) {

      echo mysqli_error($conn);

  } else {
      mysqli_stmt_bind_param($stmt,"sss",
                $item,
                $date,
                $time);
      if (mysqli_stmt_execute($stmt)) {
        /*may give code */

      } else {

        //   echo mysqli_stmt_error($stmt);
      }
  }

}
