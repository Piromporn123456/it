<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<body style="background-image: url('Image/bd_wherego.png');"> 
    <div class="row" style="margin-top:80px;">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="card" style="background-color:EC7070;height:320px;"> 
                <label style="color:white;font-size:88px;margin:auto;font-weight:bold;" id="label_data"></label>
            </div>      
            <div class="row" style="margin-top:180px;">
                <div class="col-sm-1">
                    <button type="button" class="btn btn-success btn-lg" style="height:100px;width:100px;font-weight:bold;font-size:38px;" onclick=function_Click(2)><b><<</b></button>
                </div>
                <div class="col-sm-10">
                    <center><label style="color:white;font-size:60px;font-weight:bold;" id="label_number"></label></center>
                </div>
                <div class="col-sm-1" style="margin-left:0px;">
                    <button type="button" class="btn btn-success btn-lg" style="height:100px;width:100px;font-weight:bold;font-size:38px;" onclick=function_Click(1)><b>>></b></button>
                </div>                    
            </div>
        </div>
    </div>
</body>
<script>
    var NumData=-1;
    window.addEventListener('load', (event) => {
        function_Click(1)          
    });
    function function_Click(Type){
        if(Type==1){
            if(NumData<29){
                NumData++;    
            } 
        }else{
            if(NumData>0){
                NumData--;    
            }          
        }
        var Data=<?php echo $Data=$_GET['Data']; ?>;
        console.log(Data)
        if(Data==1){
            let array_list  = [ 
                'ห้าแยกลาดพร้าว',
                'IKEA บางใหญ่',
                'เกาะเสม็ด',
                'วัดร่องขุน',
                'พันทิพย์',
                'ฟูจิ',
                'สนามบินดอนเมือง',
                'วังหลัง',
                'เขาช้างเผือก',
                'อเมซอน',
                'ฟิวเจอร์พาร์ค',
                'มหาวิทยาลัยแม่โจ้',
                'ท่าน้ำนนท์',
                'อุ้มผาง',
                'พระโขนง',
                'แยกแคราย',
                'ราชมังคลากีฬาสถาน',
                'บางบัวทอง',
                'รามคำแหง',
                'การบินไทย',
                'บ้านโป่ง',
                'เกาะแก้วพิสดาร',
                'วัดท่าไม้',
                'แม่สาย',
                'ประตูผี',
                'เมืองทองธานี',
                'สามพราน',
                'วงเวียนใหญ่',
                'สามย่าน',
                'สามเหลี่ยมทองคำ'
            ];
            document.getElementById('label_data').innerHTML=array_list[NumData];
        }else if(Data==2){
            let array_list  = [  
                'พาต้า'
                ,'ประตูน้ำ'			
                ,'FOODLAND'			
                ,'โรม'			
                ,'อู่ตะเภา'			
                ,'วัดเล่งเน่ยยี่'			
                ,'ลิโด้'			
                ,'แม่กลอง'			
                ,'ฟาร์มโชคชัย'			
                ,'พีระมิด'			
                ,'หัวลำโพง'			
                ,'คานส์'			
                ,'สมุย'			
                ,'โพไซดอน'			
                ,'สนามเป้า'			
                ,'ศรีธัญญา'			
                ,'อัมพวา'			
                ,'หมอชิด'			
                ,'พารากอน'			
                ,'ซาฮาร่า'			
                ,'ฮอกวอดส์'			
                ,'ดาวเสาร์'			
                ,'อินเดีย'		
                ,'โตเกียว'			
                ,'สีลมซอย2'			
                ,'สกาล่า'			
                ,'ลัดดาแลนด์'			
                ,'สามเหลี่ยมเบอร์มิวด่า'			
                ,'ป่าหิมพานต์'			
                ,'ดอนหอยหลอด'];
            document.getElementById('label_data').innerHTML=array_list[NumData];
        }else if(Data==3){
            let array_list  = [  
                'เซเว่น'
                ,'มหาวิยาลัยเชียงใหม่'			
                ,'ไอคอนสยาม'			
                ,'แดรี่ควีน'			
                ,'ฝรั่งเศษ'			
                ,'ปักกิ่ง'			
                ,'กาญจนบุรี'			
                ,'เขื่อนเชี่ยวหลาน'			
                ,'อุทยานราชภักดิ์'			
                ,'ดอยเสมอดาว'			
                ,'ภูชี้ฟ้า'			
                ,'ดาวอังคาร'			
                ,'บางระจัน'			
                ,'ผาหำหด'			
                ,'กัวลาลัมเปอร์'			
                ,'อิหร่าน'			
                ,'แคนาดา'			
                ,'ตึกมหานคร'			
                ,'เบตง'			
                ,'ปารีส'			
                ,'อีแทวอน'			
                ,'โอซาก้า'			
                ,'พระราชวังต้องห้าม'		
                ,'เชอร์โนบิล'			
                ,'ออสเตรเลีย'			
                ,'พาหุรัด'			
                ,'อารีย์'			
                ,'วัดเล่งเน่ยยี่'			
                ,'บูดาเปส'			
                ,'เกาะเคย์แมน'];
            document.getElementById('label_data').innerHTML=array_list[NumData];
        }else if(Data==4){
            let array_list  = [  
                'วัดพระแก้ว'
                ,'วัดโพธิ์'			
                ,'ถนนข้าวสาร'			
                ,'ซอยคาวบอย'			
                ,'ลำปาง'			
                ,'พระราม2'			
                ,'เกาหลีใต้'			
                ,'คาฟูร์'			
                ,'ญี่ปุ่น'			
                ,'หลีเป๊ะ'			
                ,'โรงปูน'			
                ,'CDC'			
                ,'หัวหิน'			
                ,'เดอะมอลล์'			
                ,'สวรรค์'			
                ,'ฟอร์จูนทาวน์'			
                ,'ซูเปอร์มาร์เก็ต'			
                ,'พันทิพย์'			
                ,'ยุโรป'			
                ,'ชะอำ'			
                ,'โรงพยาบาลรามาธิบดี'			
                ,'สระบุรี'			
                ,'คลองถม'		
                ,'บ้านบึง'			
                ,'นครปฐม'			
                ,'ปากช่อง'			
                ,'จรัญสนิทวงศ์'			
                ,'หอไอเฟล'			
                ,'บิ๊กซี'			
                ,'ตลาดสี่มุมเมือง'];
            document.getElementById('label_data').innerHTML=array_list[NumData];
        }
        document.getElementById('label_number').innerHTML=(NumData+1)+ " / 30";
    }
</script>    
		
