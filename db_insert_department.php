<?php 
    include "connect.php";
    $message='';

    $DepartmentName=$_POST['DepartmentName'];
    
    $sql="SELECT * from tb_department where DepartmentName='$DepartmentName'";
    $result = mysqli_query($conn, $sql);
    $count_item = mysqli_num_rows($result);
    if($count_item==0){       
        $sql="INSERT INTO tb_department(DepartmentName,DepartmentStatus) 
        VALUES ('$DepartmentName','1')";
        if ($conn->query($sql) === TRUE) {
            $message='เพิ่มข้อมูลแผนกเรียบร้อย'; 
        } else {
            $message='ไม่สามารถเพิ่มข้อมูลแผนกได้'; 
        }        
    }else{
      $message='ชื่อแผนกซ้ำในระบบ';
    }
    echo $message;   
?>
