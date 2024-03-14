<?php 

    include "connect.php";
    $message='';
    $DepartmentID=$_POST['DepartmentID'];
    $DepartmentName=$_POST['DepartmentName'];

    $sql="SELECT * from tb_department where DepartmentName='$DepartmentName' and DepartmentID<>$DepartmentID";
    $result = mysqli_query($conn, $sql);
    $count_item = mysqli_num_rows($result);
    if($count_item==0){
        $sql="update tb_department set DepartmentName='$DepartmentName'
            where DepartmentID='$DepartmentID'";
        if ($conn->query($sql) === TRUE) {
            $message='แก้ไขข้อมูลแผนกเรียบร้อย'; 
        } else {
            $message='ไม่สามารถแก้ไขข้อมูลแผนกได้'; 
        }         
    }else{
      $message='ชื่อแผนกในระบบ';
    }
    echo $message;   
?>
