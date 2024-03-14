<?php
    $NamePage='report';
    include("header.php");
?>
   
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-graph3 text-success"></i>
                        </div>
                        <div>รายงานบันทึกข้อมูลการแจ้งงาน</div>
                    </div>
                </div>
            </div>          
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                        <div class="position-relative row form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-1">
                                   <label for="exampleEmail" class="col-form-label">ปี</label> 
                                </div>
                                <div class="col-sm-5">
                                    
                                    <select id="txtyear" class="form-control" onchange="Function_ShowReport(this)">
                                        <option value="" selected disabled>เลือกปี</option>
                                        <option value="<?php echo date("Y")-3; ?>"><?php echo date("Y")-3; ?></option>
                                        <option value="<?php echo date("Y")-2; ?>"><?php echo date("Y")-2; ?></option> 
                                        <option value="<?php echo date("Y")-1; ?>"><?php echo date("Y")-1; ?></option> 
                                        <option value="<?php echo date("Y"); ?>"><?php echo date("Y"); ?></option> 
                                        <option value="<?php echo date("Y")+1; ?>"><?php echo date("Y")+1; ?></option> 
                                        <option value="<?php echo date("Y")+2; ?>"><?php echo date("Y")+2; ?></option> 
                                        <option value="<?php echo date("Y")+3; ?>"><?php echo date("Y")+3; ?></option>                                                                           
                                    </select>                                                               
                                </div>                              
                            </div>
                            <center><canvas id="myChart" style="width:100%;max-width:1100px"></canvas></center>                            
                        </div>
                    </div>
                </div>               
            </div>
        </div>
       
        <script>
           
          
            function Function_ShowReport(data){
                var xValues = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
                var barColors = ["#D6EAF8", "#EBDEF0","#D6EAF8", "#EBDEF0","#D6EAF8", "#EBDEF0","#D6EAF8", "#EBDEF0","#D6EAF8", "#EBDEF0","#D6EAF8", "#EBDEF0"];

                $.ajax({
                    url:"ajax_show_report.php",
                    method:'POST',
                    data: {year:data.value}, 
                    success:function(result)
                    {
                        result = result.replace("[", "");
                        result = result.replace("]", "");
                        result = result.split(',');
                        let numberArray = [];
                        length = result.length;
                        for (let i = 0; i < length; i++){
                            numberArray.push(parseInt(result[i]));
                        }
                        new Chart("myChart", {
                            type: "bar",
                            data: {
                                labels: xValues,
                                datasets: [{
                                    backgroundColor: barColors,
                                    data: numberArray
                                }]
                            },
                            options: {
                                legend: {display: false},
                                title: {
                                    display: true,
                                    text: "รายงานบันทึกข้อมูลการแจ้งงาน"
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true,
                                            min: 0,
                                            stepSize: 10,
                                        }
                                    }]
                                }
                            }
                        });   
                    }
                })  

                   
            }
            
        </script>
        <script data-require="jquery" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<?php
    include("footer.php");
?>