<?php
    include "connect.php";
    
    $output = '
        <table class="mb-0 table display" id="userdata" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">หัวข้อ</th>
                    <th class="text-center">รายละเอียด</th>
                    <th class="text-center">แผนก</th>
                    <th class="text-center">เวลาที่แจ้ง</th>
                    <th class="text-center">เวลาที่ได้รับการแก้ไข</th>
                    <th class="text-center">จัดการ</th>
                </tr>
            </thead>
            <body>
        ';                            
            $No=0;
            $sql ="SELECT *,DATE_FORMAT(CreateDate, '%d/%m/%Y %H:%i:%s')CreateDate1,DATE_FORMAT(UpdateDate, '%d/%m/%Y %H:%i:%s')UpdateDate1
                FROM tb_reportjob 
                left outer join tb_department on tb_reportjob.DepartmentID=tb_department.DepartmentID
                Order By ReJobID Desc";
            $query = mysqli_query($conn,$sql);
            while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) { 
                $No++;
                $ReJobID=$result['ReJobID'];
                $ReJobTitle=$result['ReJobTitle'];
                $ReJobDetail=$result['ReJobDetail'];
                $CreateDate=$result['CreateDate1'];
                $UpdateDate=$result['UpdateDate1'];
                $DepartmentName=$result['DepartmentName'];
                $DepartmentID=$result['DepartmentID'];
                $ReJobStatus=$result['ReJobStatus'];

                $output .= '                   
                <tr>
                    <td class="text-center">'.$No.'</td>
                    <td class="text-center">'.$ReJobTitle.'</td>
                    <td class="text-center">'.$ReJobDetail.'</td>                  
                    <td class="text-center">'.$DepartmentName.'</td> 
                    <td class="text-center">'.$CreateDate.'</td>   
                    <td class="text-center">'.$UpdateDate.'</td>               
                    <td class="text-center">
                        <div class="btn-group">';
                if($ReJobStatus==1){
                    $output .= '<button type="button" class="btn btn-success btn-sm" onclick="return ClickCloseJob(\''.$ReJobID.'\')">&nbsp;<i class=" fas fa-check"></i> ปิดงาน&nbsp;</button>';            
                }               
                $output .= '               
                            <button type="button" class="btn btn-warning btn-sm" 
                                onclick="return ClickEdit(\''.$ReJobID.'\',\''.$ReJobTitle.'\',\''.$ReJobDetail.'\',\''.$DepartmentID.'\')">
                                &nbsp;&nbsp;&nbsp;<i class=" fas fa-pen-square"></i> แก้ไข&nbsp;&nbsp;&nbsp;</button>';
                if($ReJobStatus==1){
                    $output .= '                                          
                            <button type="button" class="btn btn-danger btn-sm" onclick="return ClickDelete(\''.$ReJobID.'\')">&nbsp;&nbsp;&nbsp;&nbsp;<i class=" fas fa-trash-alt"></i> ลบ&nbsp;&nbsp;&nbsp;&nbsp;</button>';
                } 
                            $output .= '                  
                        </div>  
                    </td>
                </tr> 
                    ';
            } 
                                                                                                       
        $output .= '</tbody></table>';

    echo $output;
?>