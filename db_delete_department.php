<?php 
    include "connect.php";

    $DepartmentID=$_POST['DepartmentID'];
    
    $sql="SELECT * from tb_reportjob where DepartmentID='$DepartmentID'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if($count==0){
        $sql="delete from tb_department where DepartmentID='$DepartmentID'";
        if ($conn->query($sql) === TRUE) {
            $message='ลบข้อมูลแผนกเรียบร้อย'; 
        } else {
            $message='ไม่สามารถลบข้อมูลแผนกได้'; 
        }
    }else{
        $message='มีการใช้ข้อมูลแผนกในระบบแล้ว ไม่สามารถลบได้'; 
    }
    
    echo $message;
    
?>
