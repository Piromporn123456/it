<?php
    $NamePage='main';
    include("header.php");
?>
    <style>
      .anil_nepal {
        padding: 0px 0px;
        width: 100%;
        display: block;
      }

      .switch {
        position: relative;
        display: inline-block;
        vertical-align: top;
        width: 60px;
        height: 30px;
        padding: 3px;
        margin: 0 10px 10px 0;
        background: linear-gradient(to bottom, #eeeeee, #FFFFFF 25px);
        background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF 25px);
        border-radius: 18px;
        box-shadow: inset 0 -1px white, inset 0 1px 1px rgba(0, 0, 0, 0.05);
        cursor: pointer;
        box-sizing: content-box;
      }

      label {
        font-weight: inherit;
      }

      input[type=checkbox],
      input[type=radio] {
        margin: 4px 0 0;

        line-height: normal;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        padding: 0;
      }
      .switch-input {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        box-sizing: content-box;
      }

      .switch-left-right .switch-input:checked~.switch-label {
        background: inherit;
      }

      .switch-input:checked~.switch-label {
        background: #E1B42B;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), inset 0 0 3px rgba(0, 0, 0, 0.2);
      }

      .switch-left-right .switch-label {
        overflow: hidden;
      }

      .switch-label,
      .switch-handle {
        transition: All 0.3s ease;
        -webkit-transition: All 0.3s ease;
        -moz-transition: All 0.3s ease;
        -o-transition: All 0.3s ease;
      }

      .switch-label {
        position: relative;
        display: block;
        height: inherit;
        font-size: 10px;
        text-transform: uppercase;
        background: #eceeef;
        border-radius: inherit;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.12), inset 0 0 2px rgba(0, 0, 0, 0.15);
        box-sizing: content-box;
      }

      .switch-left-right .switch-input:checked~.switch-label:before {
        opacity: 1;
        left: 100px;
      }

      .switch-input:checked~.switch-label:before {
        opacity: 0;
      }

      .switch-left-right .switch-label:before {
        background: #eceeef;
        text-align: left;
        padding-left: 80px !important;
      }

      .switch-left-right .switch-label:before,
      .switch-left-right .switch-label:after {
        width: 20px;
        height: 20px;
        top: 4px;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 11px 0 0 0;
        text-indent: -12px;
        border-radius: 20px;
        box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.2), inset 0 0 3px rgba(0, 0, 0, 0.1);
      }

      .switch-label:before {
        content: attr(data-off);
        right: 11px;
        color: #aaaaaa;
        text-shadow: 0 1px rgba(255, 255, 255, 0.5);
      }

      span.switch-label:after {
        content: attr(data-on);
        left: 11px;
        color: #FFFFFF;
        text-shadow: 0 1px rgba(0, 0, 0, 0.2);
        position: absolute;

      }

      .switch-label:before,
      .switch-label:after {
        position: absolute;
        top: 50%;
        margin-top: -5px;
        line-height: 1;
        -webkit-transition: inherit;
        -moz-transition: inherit;
        -o-transition: inherit;
        transition: inherit;
        box-sizing: content-box;
      }

      .switch-left-right .switch-input:checked~.switch-label:after {
        left: 0 !important;
        opacity: 1;
        padding-left: 20px;
      }


      .switch-input:checked~.switch-label:after {
        opacity: 1;
      }


      .switch-left-right .switch-label:after {
        text-align: left;
        text-indent: 9px;
        background: #2E8B57 !important;
        left: -100px !important;
        opacity: 1;
        width: 100% !important;

      }

      .switch-left-right .switch-label:before,
      .switch-left-right .switch-label:after {
        width: 20px;
        height: 20px;
        top: 4px;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 11px 0 0 0;
        text-indent: -12px;
        border-radius: 20px;
        box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.2), inset 0 0 3px rgba(0, 0, 0, 0.1);
      }

      .switch-input:checked~.switch-handle {
        left: 35px;
        box-shadow: -1px 1px 5px rgba(0, 0, 0, 0.2);
      }

      .switch-label,
      .switch-handle {
        transition: All 0.3s ease;
        -webkit-transition: All 0.3s ease;
        -moz-transition: All 0.3s ease;
        -o-transition: All 0.3s ease;
      }

      .switch-handle {
        position: absolute;
        top: 4px;
        left: 4px;
        width: 28px;
        height: 28px;
        background: linear-gradient(to bottom, #FFFFFF 40%, #f0f0f0);
        background-image: -webkit-linear-gradient(top, #FFFFFF 40%, #f0f0f0);
        border-radius: 100%;
        box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
      }

      .switch-handle:before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -6px 0 0 -6px;
        width: 12px;
        height: 12px;
        background: linear-gradient(to bottom, #eeeeee, #FFFFFF);
        background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF);
        border-radius: 6px;
        box-shadow: inset 0 1px rgba(0, 0, 0, 0.02);
      }
    </style>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-diskette text-success"></i>
                        </div>
                        <div>บันทึกข้อมูลการแจ้งงาน</div>
                    </div>
                </div>
            </div>
            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                <li class="nav-item">
                    <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                        <span>บันทึกข้อมูลการแจ้งงานทั้งหมด</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                        <span>เพิ่มบันทึกข้อมูลการแจ้งงาน</span>
                    </a>
                </li>
                <li class="nav-item " id="Tab_Edit" style="display:none">
                    <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                        <span>แก้ไขบันทึกข้อมูลการแจ้งงาน</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">บันทึกข้อมูลการแจ้งงานทั้งหมด</h5>
                            <div class="table-responsive">
                                <div id="result"></div> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เพิ่ม -->
                <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">แผนก<b style="color:red;"> *</b></label>
                                <div class="col-sm-10">
                                    <select id="DepartmentID_insert" class="form-control" onchange="FunctionItemList()">
                                        <option value="" selected disabled>เลือกแผนก</option> 
                                        <?php
                                        $sql ="SELECT * FROM tb_department where DepartmentStatus =1";
                                        $query = mysqli_query($conn,$sql);
                                        while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) { 
                                            $DepartmentID=$result['DepartmentID'];
                                            $DepartmentName=$result['DepartmentName'];                                         
                                            ?>
                                            <option value="<?php echo $DepartmentID?>"><?php echo $DepartmentName?></option>
                                            <?php
                                        }
                                        ?>                                                                                                   
                                    </select>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">หัวข้อ<b style="color:red;"> *</b></label>
                                <div class="col-sm-10">
                                    <input type="text" id="ReJobTitle_insert" placeholder="หัวข้อ" class="form-control" required>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">รายละเอียด<b style="color:red;"> *</b></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="ReJobDetail_insert" rows="3"></textarea>
                                </div>
                            </div>                            
                            <div class="position-relative row form-check">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="button" class="btn btn-success" style="float:right" onclick="return FunctionInsert()">&nbsp;&nbsp;บันทึกข้อมูลการแจ้งงาน&nbsp;&nbsp;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- แก้ไข -->
                <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                        <input type="hidden" id="ReJobID_edit">
                        <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">แผนก<b style="color:red;"> *</b></label>
                                <div class="col-sm-10">
                                    <select id="DepartmentID_edit" class="form-control" onchange="FunctionItemList()">
                                        <option value="" selected disabled>เลือกแผนก</option> 
                                        <?php
                                        $sql ="SELECT * FROM tb_department where DepartmentStatus =1";
                                        $query = mysqli_query($conn,$sql);
                                        while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) { 
                                            $DepartmentID=$result['DepartmentID'];
                                            $DepartmentName=$result['DepartmentName'];                                         
                                            ?>
                                            <option value="<?php echo $DepartmentID?>"><?php echo $DepartmentName?></option>
                                            <?php
                                        }
                                        ?>                                                                                                   
                                    </select>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">หัวข้อ<b style="color:red;"> *</b></label>
                                <div class="col-sm-10">
                                    <input type="text" id="ReJobTitle_edit" placeholder="หัวข้อ" class="form-control" required>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">รายละเอียด<b style="color:red;"> *</b></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="ReJobDetail_edit" rows="3"></textarea>
                                </div>
                            </div>  
                            <div class="position-relative row form-check">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="button" class="btn btn-success" style="float:right" onclick="return FunctionEdit()">&nbsp;&nbsp;แก้ไขข้อมูลการแจ้งงาน&nbsp;&nbsp;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            window.addEventListener('load', (event) => {
                var ItemID='';
                var Status='';
                $.ajax({
                    url:"ajax_show_reportjob.php",
                    method:'POST',
                    data: {Status:Status,ItemID:ItemID}, 
                    success:function(data)
                    {
                        $('#result').html(data);
                    }
                })           
            });

            function FunctionInsert(){
                var DepartmentID=document.getElementById('DepartmentID_insert').value;
                var ReJobTitle=document.getElementById('ReJobTitle_insert').value;
                var ReJobDetail=document.getElementById('ReJobDetail_insert').value;
                       
                if(DepartmentID==''){
                    alert('กรุณาเลือกแผนก');
                    return;
                }
                if(ReJobTitle==''){
                    alert('กรุณากรอกหัวข้อ');
                    return;
                }
                if(ReJobDetail==''){
                    alert('กรุณากรอกรายละเอียด');
                    return;
                }

                $.ajax({
                    url:"db_insert_reportjob.php",
                    method:"POST",
                    data:{
                        DepartmentID:DepartmentID,
                        ReJobTitle:ReJobTitle,                      
                        ReJobDetail:ReJobDetail
                    },
                    success:function(data)
                    {
                        alert(data);
                        if(data=='เพิ่มข้อมูลการแจ้งงานเรียบร้อย'){
                            location.replace("main.php");
                        }
                    }
                });	
            }

            $("#tab-0").on('click', function() {
                document.getElementById("Tab_Edit").style.display = "none";
            });
            $("#tab-1").on('click', function() {
                document.getElementById("Tab_Edit").style.display = "none";

            });

            function ClickEdit(ReJobID,ReJobTitle,ReJobDetail,DepartmentID){ 
                document.getElementById("Tab_Edit").style.display = "block";
                $('#tab-2')[0].click();
                document.getElementById('ReJobID_edit').value=ReJobID;    
                document.getElementById('ReJobTitle_edit').value=ReJobTitle;  
                document.getElementById('ReJobDetail_edit').value=ReJobDetail;
                document.getElementById('DepartmentID_edit').value=DepartmentID;
            }

            function FunctionEdit(){
                var ReJobID=document.getElementById('ReJobID_edit').value;
                var ReJobTitle=document.getElementById('ReJobTitle_edit').value;
                var ReJobDetail=document.getElementById('ReJobDetail_edit').value;
                var DepartmentID=document.getElementById('DepartmentID_edit').value;
                        
                if(DepartmentID==''){
                    alert('กรุณาเลือกแผนก');
                    return;
                }
                if(ReJobTitle==''){
                    alert('กรุณากรอกหัวข้อ');
                    return;
                }
                if(ReJobDetail==''){
                    alert('กรุณากรอกรายละเอียด');
                    return;
                }

                $.ajax({
                    url:"db_edit_reportjob.php",
                    method:"POST",
                    data:{
                        ReJobID:ReJobID,
                        ReJobTitle:ReJobTitle,
                        ReJobDetail:ReJobDetail,
                        DepartmentID:DepartmentID
                    }, 
                    success:function(data)
                    {
                        alert(data);
                        if(data=='แก้ไขข้อมูลการแจ้งงานเรียบร้อย'){
                            location.replace("main.php");
                        }
                    }
                });	
            }

            function ClickDelete(ReJobID){
                var result = confirm("คุณต้องการลบใช่หรือไม่?");
                if (result) {
                    $.ajax({
                        url:"db_reportjob.php",
                        method:'POST',
                        data: {ReJobID:ReJobID,Status:'Delete'}, 
                        success:function(data)
                        {
                            alert(data);
                            if(data=='ลบข้อมูลการแจ้งงานเรียบร้อย'){
                                location.replace("main.php");
                            }
                        }
                    })
                }
            }

            function ClickCloseJob(ReJobID){
                var result = confirm("คุณต้องการปิดงานใช่หรือไม่?");
                if (result) {
                    $.ajax({
                        url:"db_reportjob.php",
                        method:'POST',
                        data: {ReJobID:ReJobID,Status:'CloseJob'}, 
                        success:function(data)
                        {
                            alert(data);
                            if(data=='ปิดงานเรียบร้อย'){
                                location.replace("main.php");
                            }
                        }
                    })
                }
            }

        </script>
        <script data-require="jquery" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<?php
    include("footer.php");
?>