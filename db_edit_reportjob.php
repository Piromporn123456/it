<?php 

    include "connect.php";
    $message='';
    $ReJobID=$_POST['ReJobID'];
    $ReJobTitle=$_POST['ReJobTitle'];
    $ReJobDetail=$_POST['ReJobDetail'];
    $DepartmentID=$_POST['DepartmentID'];
    
    $sql="update tb_reportjob set ReJobTitle='$ReJobTitle',ReJobDetail='$ReJobDetail',DepartmentID='$DepartmentID'
        where ReJobID='$ReJobID'";
    if ($conn->query($sql) === TRUE) {
        $message='แก้ไขข้อมูลการแจ้งงานเรียบร้อย'; 
    } else {
        $message='ไม่สามารถแก้ไขข้อมูลการแจ้งงานได้'; 
    }            
    echo $message;   
?>
