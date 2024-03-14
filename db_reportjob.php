<?php 
    include "connect.php";

    $UserID=$_SESSION["UserID"];
    $Status=$_POST['Status'];
    $ReJobID=$_POST['ReJobID'];
   
    if($Status=='Delete'){
        $sql="delete from tb_reportjob where ReJobID='$ReJobID'";
        if ($conn->query($sql) === TRUE) {
            $message='ลบข้อมูลการแจ้งงานเรียบร้อย'; 
        } else {
            $message='ไม่สามารถลบข้อมูลการแจ้งงานได้'; 
        }
    }else{
        $sql="update tb_reportjob set UpdateBy='$UserID',UpdateDate=now(),ReJobStatus=2 where ReJobID='$ReJobID'";
        if ($conn->query($sql) === TRUE) {
            $message='ปิดงานเรียบร้อย'; 
        } else {
            $message='ไม่สามารถปิดงานได้'; 
        } 
    }       
    echo $message;   
?>
