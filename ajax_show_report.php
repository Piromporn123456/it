<?php
    include "connect.php";

    $Year=$_POST['year'];
    $sql ="select
        (SELECT count(*) FROM tb_reportjob where year(CreateDate)='$Year' and month(CreateDate)='01')มกราคม,
        (SELECT count(*) FROM tb_reportjob where year(CreateDate)='$Year' and month(CreateDate)='02')กุมภาพันธ์,
        (SELECT count(*) FROM tb_reportjob where year(CreateDate)='$Year' and month(CreateDate)='03')มีนาคม,
        (SELECT count(*) FROM tb_reportjob where year(CreateDate)='$Year' and month(CreateDate)='04')เมษายน,
        (SELECT count(*) FROM tb_reportjob where year(CreateDate)='$Year' and month(CreateDate)='05')พฤษภาคม,
        (SELECT count(*) FROM tb_reportjob where year(CreateDate)='$Year' and month(CreateDate)='06')มิถุนายน,
        (SELECT count(*) FROM tb_reportjob where year(CreateDate)='$Year' and month(CreateDate)='07')กรกฎาคม,
        (SELECT count(*) FROM tb_reportjob where year(CreateDate)='$Year' and month(CreateDate)='08')สิงหาคม,
        (SELECT count(*) FROM tb_reportjob where year(CreateDate)='$Year' and month(CreateDate)='09')กันยายน,
        (SELECT count(*) FROM tb_reportjob where year(CreateDate)='$Year' and month(CreateDate)='10')ตุลาคม,
        (SELECT count(*) FROM tb_reportjob where year(CreateDate)='$Year' and month(CreateDate)='11')พฤศจิกายน,
        (SELECT count(*) FROM tb_reportjob where year(CreateDate)='$Year' and month(CreateDate)='12')ธันวาคม";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
    $Month1=$result['มกราคม'];
    $Month2=$result['กุมภาพันธ์'];
    $Month3=$result['มีนาคม'];
    $Month4=$result['เมษายน'];
    $Month5=$result['พฤษภาคม'];
    $Month6=$result['มิถุนายน'];
    $Month7=$result['กรกฎาคม'];
    $Month8=$result['สิงหาคม'];
    $Month9=$result['กันยายน'];
    $Month10=$result['ตุลาคม'];
    $Month11=$result['พฤศจิกายน'];
    $Month12=$result['ธันวาคม'];
     
    $yValues=[(int)$Month1, (int)$Month2,(int) $Month3, (int)$Month4, (int)$Month5, (int)$Month6, (int)$Month7, (int)$Month8, (int)$Month9, (int)$Month10, (int)$Month11, (int)$Month12];
    echo json_encode($yValues);
?>