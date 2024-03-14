<?php
    include("connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql="SELECT * FROM tb_user WHERE Username='". $username."' and Password='".$password."'";
    $result = mysqli_query($conn,$sql);
            
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $_SESSION["UserID"] = $row["UserID"];
        $_SESSION["Name"] = $row["Name"];
        $_SESSION["Role"] = $row["Role"];
        $_SESSION["StatusLogin"]=1;                  
        Header("Location:main.php");                      
    }else{
        echo "<script>";
        echo "alert(\" ข้อมูลไม่ถูกต้อง\");"; 
        echo "window.history.back()";
        echo "</script>";
    }
?>  
