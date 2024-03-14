<?php
    date_default_timezone_set("Asia/Bangkok");
    include "connect.php";
    if (isset($_SESSION["StatusLogin"])) {
        if ($_SESSION["StatusLogin"] == '1') {          
          Header("Location:main.php");           
        }
    } 
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ระบบบันทึกข้อมูลการแจ้งงาน</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <meta name="msapplication-tap-highlight" content="no">
        <link rel="shortcut icon" href="assets/images/ระบบบันทึกการแจ้งาน.png">
        <link href="./main.css" rel="stylesheet">
    </head>
    <body>
        <div class="app-main__outer" style="margin:5%;">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">           
                    <div class="main-card mb-3 card">
                        <div class="card-body" style="margin:10px;">                          
                            <center> 
                                <img src="assets/images/ระบบบันทึกการแจ้งาน.png" style="width:50%;margin-bottom:20px;">
                                <h4>ล็อกอินเข้าสู่ระบบ</h4> 
                            </center>                        
                            <form id="form-login" action="chk_login.php" method="post" style="margin:15px;">    
                                <div class="position-relative  form-group">
                                    <label for="examplePassword" class=" col-form-label">ชื่อผู้ใช้งาน</label>
                                    <div class="input-group">
                                        <input type="text" name="username" id="username" class="form-control" placeholder="" required>          
                                    </div>                          
                                </div>              
                                <div class="position-relative  form-group">
                                    <label for="examplePassword" class=" col-form-label">รหัสผ่าน</label>
                                    <div class="input-group">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="" required>  
                                        <span class="input-group-text" style="border-radius: 0 4px 4px 0"><i class="fa fa-eye" id="togglePassword"></i></span>           
                                    </div>                          
                                </div>
                                <center>
                                    <button class="mt-3 btn btn-success" style="height:40px;width:200px;">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:18px;">เข้าสู่ระบบ</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </button>
                                </center> 
                            </form>
                        </div>
                    </div>                          
                </div>
            </div>
        </div>


        <script>
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');
            togglePassword.addEventListener('click', function(e) {
                // toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                // toggle the eye / eye slash icon
                this.classList.toggle('fa fa-eye-slash');
            });

            $(function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
        <script type="text/javascript" src="./assets/scripts/main.js"></script>
    </body>
</html>