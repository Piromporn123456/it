<?php
    include "connect.php";

    $DepartmentID = $_POST["DepartmentID"];
    $status = $_POST["Status"];
    if($status!=''){
        if($status == 'true'){
            $sql = "update tb_department set DepartmentStatus = '1' WHERE DepartmentID = '$DepartmentID'";
        }else if($status == 'false'){
            $sql = "update tb_department set DepartmentStatus = '0' WHERE DepartmentID = '$DepartmentID'";       
        }
        $conn->query($sql);
    }
    
    $output = '
        <table class="mb-0 table display" id="userdata" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">ชื่อแผนก</th>
                    <th class="text-center">สถานะการแสดงผล</th>
                    <th class="text-center">จัดการ</th>
                </tr>
            </thead>
            <body>
        ';                            
            $No=0;
            $sql ="SELECT * FROM tb_department";
            $query = mysqli_query($conn,$sql);
            while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) { 
                $No++;
                $DepartmentID=$result['DepartmentID'];
                $DepartmentName=$result['DepartmentName'];
                $DepartmentStatus=$result['DepartmentStatus'];

                $output .= '                   
                <tr>
                    <td class="text-center">'.$No.'</td>
                    <td class="text-center">'.$DepartmentName.'</td>               
                    <td>
                        <div class="anil_nepal text-center">
                            <label class="switch switch-left-right">';
                            if ($DepartmentStatus == '1'){
                                $output .= '<input class="switch-input" type="checkbox" name="onoff" id="onoff" onclick="handleClick(this,\''.$DepartmentID.'\');" checked>';                          
                            }else{
                                $output .= '<input class="switch-input" type="checkbox" name="onoff" id="onoff" onclick="handleClick(this,\''.$DepartmentID.'\');" >';                       
                            }
                $output .= '                               
                            <span role="tabpanel" class="switch-label" data-on="On" data-off="Off"></span> <span class="switch-handle"></span></label>                                    
                        </div>                         
                    </td>
                    <td class="text-center">
                        <div class="btn-group">                  
                            <button type="button" class="btn btn-warning btn-sm" 
                                onclick="return ClickEdit(
                                    \''.$DepartmentID.'\',\''.$DepartmentName.'\')">
                                &nbsp;&nbsp;&nbsp;<i class=" fas fa-pen-square"></i> แก้ไข&nbsp;&nbsp;&nbsp;</button>                           
                            <button type="button" class="btn btn-danger btn-sm" onclick="return ClickDelete(\''.$DepartmentID.'\')">&nbsp;&nbsp;&nbsp;&nbsp;<i class=" fas fa-trash-alt"></i> ลบ&nbsp;&nbsp;&nbsp;&nbsp;</button>                 
                        </div>  
                    </td>
                </tr> 
                    ';
            } 
                                                                                                       
        $output .= '</tbody></table>';

    echo $output;
?>