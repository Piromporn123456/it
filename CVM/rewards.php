<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Bingo CVM</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            .button-29 {
                align-items: center;
                appearance: none;
                background-image: radial-gradient(100% 100% at 100% 0, #5adaff 0, #5468ff 100%);
                border: 0;
                border-radius: 6px;
                box-shadow: rgba(45, 35, 66, .4) 0 2px 4px,rgba(45, 35, 66, .3) 0 7px 13px -3px,rgba(58, 65, 111, .5) 0 -3px 0 inset;
                box-sizing: border-box;
                color: #fff;
                cursor: pointer;
                display: inline-flex;
                font-family: "JetBrains Mono",monospace;
                height: 80px;
                width: 250px;
                justify-content: center;
                line-height: 1;
                list-style: none;
                overflow: hidden;
                padding-left: 16px;
                padding-right: 16px;
                position: relative;
                text-align: left;
                text-decoration: none;
                transition: box-shadow .15s,transform .15s;
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
                white-space: nowrap;
                will-change: box-shadow,transform;
                font-size: 58px;
            }
            .button-29:focus {
                box-shadow: #3c4fe0 0 0 0 1.5px inset, rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
            }
            .button-29:hover {
                box-shadow: rgba(45, 35, 66, .4) 0 4px 8px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
                transform: translateY(-2px);
            }
            .button-29:active {
                box-shadow: #3c4fe0 0 3px 7px inset;
                transform: translateY(2px);
            }
        </style>
    </head>
    <body>
        <p>&nbsp;</p><br>
        <center><image src="MicrosoftTeams-image.png" width="20%"><br><br></center>   
        <div class="col-12">
            <center><div id=total_product style="font-size:80px;color:red;">ของรางวัล</div></center>     
        </div><br>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <center>
                    <div class="form-group">
                        <input type="number" class="form-control" id="InputNumber" style="font-size:40px;" placeholder="หมายเลขรางวัล" >
                    </div><br>
                    <button class="btn btn-primary" onclick="Getdata()" style="width:150px;height:50px;">ค้นหา</button>
                </center>
            </div>
        </div>
                  
        <script>
            const numberproduct = [
                    {Number:"216", Value:"ขนม"},{Number:"329", Value:"เบียร์ช้างกระป๋อง"},{Number:"281", Value:"เงิน50"},{Number:"848", Value:"เงิน50"},{Number:"390", Value:"Premium เสื้อ"},
                    {Number:"457", Value:"กาโตะ"},{Number:"286", Value:"Premium แก้วEST"},{Number:"661", Value:"เบียร์ช้างกระป๋อง"},{Number:"295", Value:"กาโตะ"},{Number:"650", Value:"ขนม"},
                    {Number:"722", Value:"Premium แก้วRock"},{Number:"263", Value:"Premium กระบอกน้ำช้าง"},{Number:"549", Value:"Premium แก้วเสือดำ"},{Number:"392", Value:"Premium แก้วRock"},{Number:"617", Value:"ขนม"},
                    {Number:"367", Value:"เบียร์ช้างกระป๋อง"},{Number:"362", Value:"เบียร์ช้างกระป๋อง"},{Number:"144", Value:"เบียร์ช้างกระป๋อง"},{Number:"736", Value:"Premium แก้ววันพีช"},{Number:"636", Value:"เบียร์ช้างกระป๋อง"},
                    {Number:"844", Value:"เทสโต20"},{Number:"500", Value:"ขนม"},{Number:"581", Value:"Premium แก้วช้างใส"},{Number:"592", Value:"กาโตะ"},{Number:"874", Value:"เบียร์ช้างกระป๋อง"},
                    {Number:"273", Value:"กาโตะ"},{Number:"354", Value:"Premium แก้วช้างใส"},{Number:"424", Value:"Premium กระบอกน้ำช้าง"},{Number:"323", Value:"Premium แก้วเสือดำ"},{Number:"759", Value:"Premium เสื้อ"},
                    {Number:"490", Value:"Premium แก้วช้างเขียวพลาสติก"},{Number:"794", Value:"ขนม"},{Number:"101", Value:"Premium แก้วRock"},{Number:"877", Value:"ขนม"},{Number:"778", Value:"Premium แก้วEST"},
                    {Number:"753", Value:"เบียร์ช้างกระป๋อง"},{Number:"178", Value:"กาโตะ"},{Number:"775", Value:"เบียร์ช้างกระป๋อง"},{Number:"393", Value:"เทสโต30"},{Number:"365", Value:"เทสโต30"},
                    {Number:"603", Value:"Premium เสื้อ"},{Number:"742", Value:"เบียร์ช้างกระป๋อง"},{Number:"382", Value:"Premium แก้วเสือดำ"},{Number:"248", Value:"เทสโต30"},{Number:"645", Value:"Premium แก้วช้างเขียวพลาสติก"},
                    {Number:"648", Value:"เทสโต20"},{Number:"852", Value:"Premium แก้วRock"},{Number:"331", Value:"Premium กระบอกน้ำช้าง"},{Number:"664", Value:"ขนม"},{Number:"129", Value:"ขนม"},
                
                    {Number:"842", Value:"Premium แก้วRock"},{Number:"653", Value:"โออิชิ"},{Number:"120", Value:"กาโตะ"},{Number:"854", Value:"เบียร์ช้างกระป๋อง"},{Number:"272", Value:"โดโซะ"},
                    {Number:"358", Value:"ปาตี้"},{Number:"115", Value:"เทสโต20"},{Number:"368", Value:"โดโซะ"},{Number:"233", Value:"กาโตะ"},{Number:"275", Value:"ทิชชู่"},
                    {Number:"884", Value:"ปาตี้"},{Number:"345", Value:"ปาตี้"},{Number:"676", Value:"เบียร์ช้างกระป๋อง"},{Number:"442", Value:"โดโซะ"},{Number:"489", Value:"โดโซะ"},
                    {Number:"494", Value:"Premium กระบอกน้ำช้าง"},{Number:"155", Value:"Premium แก้วEST"},{Number:"513", Value:"โดโซะ"},{Number:"167", Value:"แคมปัส"},{Number:"508", Value:"โออิชิ"},
                    {Number:"241", Value:"ทิชชู่"},{Number:"504", Value:"ทิชชู่"},{Number:"806", Value:"แคมปัส"},{Number:"404", Value:"ทิชชู่"},{Number:"723", Value:"แคมปัส"},
                    {Number:"756", Value:"กาโตะ"},{Number:"598", Value:"ทิชชู่"},{Number:"561", Value:"ปาตี้"},{Number:"793", Value:"กาโตะ"},{Number:"662", Value:"กาโตะ"},
                    {Number:"190", Value:"Est"},{Number:"344", Value:"เบียร์ช้างกระป๋อง"},{Number:"487", Value:"กาโตะ"},{Number:"231", Value:"ปาตี้"},{Number:"838", Value:"ปาตี้"},
                    {Number:"767", Value:"กาโตะ"},{Number:"836", Value:"Premium แก้วRock"},{Number:"291", Value:"แคมปัส"},{Number:"580", Value:"Est"},{Number:"529", Value:"แคมปัส"},
                    {Number:"594", Value:"Premium แก้วเสือดำ"},{Number:"769", Value:"ทิชชู่"},{Number:"780", Value:"แคมปัส"},{Number:"119", Value:"เบียร์ช้างกระป๋อง"},{Number:"542", Value:"โดโซะ"},
                    {Number:"289", Value:"กาโตะ"},{Number:"821", Value:"เทสโต20"},{Number:"813", Value:"กาโตะ"},{Number:"444", Value:"กาโตะ"},{Number:"728", Value:"เบียร์ช้างกระป๋อง"},
 
                    {Number:"207", Value:"โดโซะ"},{Number:"452", Value:"ปาตี้"},{Number:"557", Value:"เบียร์ช้างกระป๋อง"},{Number:"834", Value:"Premium กระบอกน้ำช้าง"},{Number:"395", Value:"เทสโต20"},
                    {Number:"565", Value:"ปาตี้"},{Number:"343", Value:"Premium แก้วRock"},{Number:"863", Value:"กาโต๊ะ"},{Number:"302", Value:"ทิชชู่"},{Number:"672", Value:"ทิชชู่"},
                    {Number:"733", Value:"แคมปัส"},{Number:"862", Value:"Est"},{Number:"121", Value:"โดโซะ"},{Number:"609", Value:"Premium แก้วเสือดำ"},{Number:"469", Value:"ทิชชู่"},
                    {Number:"872", Value:"ทิชชู่"},{Number:"443", Value:"กาโต๊ะ"},{Number:"777", Value:"กาโต๊ะ"},{Number:"387", Value:"เบียร์ช้างกระป๋อง"},{Number:"307", Value:"ปาตี้"},
                    {Number:"641", Value:"เทสโต20"},{Number:"193", Value:"กาโต๊ะ"},{Number:"171", Value:"เบียร์ช้างกระป๋อง"},{Number:"632", Value:"ทิชชู่"},{Number:"328", Value:"Est"},
                    {Number:"456", Value:"เบียร์ช้างกระป๋อง"},{Number:"162", Value:"แคมปัส"},{Number:"528", Value:"โดโซะ"},{Number:"253", Value:"โออิชิ"},{Number:"447", Value:"แคมปัส"},
                    {Number:"818", Value:"กาโต๊ะ"},{Number:"450", Value:"Premium แก้วRock"},{Number:"265", Value:"กาโต๊ะ"},{Number:"708", Value:"เบียร์ช้างกระป๋อง"},{Number:"201", Value:"โดโซะ"},
                    {Number:"678", Value:"ปาตี้"},{Number:"384", Value:"กาโต๊ะ"},{Number:"647", Value:"แคมปัส"},{Number:"191", Value:"โออิชิ"},{Number:"459", Value:"แคมปัส"},
                    {Number:"839", Value:"ทิชชู่"},{Number:"415", Value:"แคมปัส"},{Number:"859", Value:"โดโซะ"},{Number:"764", Value:"ปาตี้"},{Number:"724", Value:"Premium แก้วEST"},
                    {Number:"652", Value:"โดโซะ"},{Number:"200", Value:"ปาตี้"},{Number:"637", Value:"กาโต๊ะ"},{Number:"140", Value:"ปาตี้"},{Number:"434", Value:"กาโต๊ะ"},

                ]
                function Getdata(){
                    var Data_Number = document.getElementById('InputNumber').value;
                    for (let i = 0; i < numberproduct.length; i++) {
                        if(numberproduct[i].Number==Data_Number){
                            document.getElementById('total_product').innerHTML = numberproduct[i].Value;                     
                        }
                    }  
                    document.getElementById('InputNumber').value='';           
                }
        </script>   
    </body>
</html>
