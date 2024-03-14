<?php 
    include "connect.php";
    $message='';

    $UserID=$_SESSION["UserID"];
    $DepartmentID=$_POST['DepartmentID'];
    $ReJobTitle=$_POST['ReJobTitle'];
    $ReJobDetail=$_POST['ReJobDetail'];
        
    $sql="INSERT INTO tb_reportjob(ReJobTitle,ReJobDetail,ReJobStatus,CreateBy,CreateDate,DepartmentID) 
    VALUES ('$ReJobTitle','$ReJobDetail',1,'$UserID',now(),'$DepartmentID')";
    if ($conn->query($sql) === TRUE) {
        $message='เพิ่มข้อมูลการแจ้งงานเรียบร้อย'; 
    } else {
        $message='ไม่สามารถเพิ่มข้อมูลการแจ้งงานได้'; 
    }            
    echo $message;   
?>
