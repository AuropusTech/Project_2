<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Success! hire Form Generated</title>

    <meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

      <style>
       @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }
 
        body {
            font-family: "THSarabunNew";
            font-size: 14;
        }

        .tablex {
            counter-reset: rowNumber;
        }

        .tablex tr::before {
            display: table-cell;
            counter-increment: rowNumber;
            content: counter(rowNumber) ".";
            padding-right: 0.3em;
            text-align: right;
        }

        #menu{
            width:600px;
            float:left;
            margin-top:10px;
            font-weight: bold;   
        }
             
        #Istarih{ 
            float:left; width:180px; margin-right:0px; font-weight: bold;
        }

        #Isdeneyimi{
            float:left;
            width:500px;
            word-wrap:break-word;
            margin-right:0px;   
        }
                    
        .clear{
            clear:both;
            height:10px;
        }

        .page_break { page-break-before: always; }
       

    </style>
        



</head>
<body>

    <div><p style="text-align: center; font-size: 16; font-weight: bold; margin-top: -15px">แบบฟอร์มขอให้จัดจ้างพัสดุ</p></div>
    <div style="margin-top: -15px">
        <p style="text-align: left;">
            
        ที่ อว 660301.1.{{$hireFormData->HireFormIdDept}}./{{$hireFormData->HireFormIdNo}}&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        วันที่ &nbsp;{{$hireFormData->HireFormDate}}  
        
        <br>เรียน คณบดีคณะวิทยาศาสตร์ <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;1. ด้วย&nbsp;{{$hireFormData->HireFormDept}}&nbsp;มีความประสงค์ให้ {{$hireFormData->HireFormOrder}} หมายเลข {{$hireFormData->HireFormOrderNo}} เนื่องจาก {{$hireFormData->HirePurpose}} <br>

        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;2. แหล่งเงิน &nbsp;

            @foreach ($hireFormDataJoinBudget as $showhireFormDataJoinBudget)
                {{$showhireFormDataJoinBudget->budgetType}} 
            @endforeach


            ประจำปีงบประมาณ พ.ศ {{$hireFormData->HireBudgetYear}} 
            แผนงาน 
            
            @foreach ($hireFormDataJoinPlanBudget as $showhireFormDataJoinPlanBudget)
                {{$showhireFormDataJoinPlanBudget->planBudgetName}} 
            @endforeach

            @foreach ($hireFormDataJoinPlan as $showhireFormDataJoinPlan)
                {{$showhireFormDataJoinPlan->planName}} 
            @endforeach

            @foreach ($hireFormDataJoinSubPlan as $showhireFormDataJoinSubPlan)
                {{$showhireFormDataJoinSubPlan->subPlanName}} 
            @endforeach


            ซึ่งได้รับ {{$hireFormData->HireReceive}} 
            
            ตามหนังสือที่ อว 660301.1.{{$hireFormData->HireBookNoDept}}./{{$hireFormData->HireBookNo}} 
            ลงวันที่ {{$hireFormData->HireBookDateD}} {{$hireFormData->HireBookDateM}} {{$hireFormData->HireBookDateY}}
            
            
            โครงการ 

            @foreach ($hireFormDataJoinProject as $showhireFormDataJoinProject)
                {{$showhireFormDataJoinProject->projectName}} 
            @endforeach


            กิจกรรมลำดับที่ {{$hireFormData->HireFormActNo}} ชื่อกิจกรรม {{$hireFormData->HireFormActName}} <br>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;3. เสนอรายชื่อเจ้าหน้าที่เพื่อประกอบการดำเนินการจัดซื้อ ดังนี้ <br>
        </p>
            
        <p style="margin-top: -16px;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>เจ้าหน้าที่จัดทำขอบเขตของงานจ้าง</b>
        </p>
        
        
        <table class="tablex" style="margin-top: -18px; margin-left: 95px">

            @foreach ($PersonDescReqFormhireData as $PersonDescReqFormhireDataRow)
            <tr>
                <td>{{$PersonDescReqFormhireDataRow->articleName}}&nbsp;{{$PersonDescReqFormhireDataRow->fname}}&nbsp;&nbsp;{{$PersonDescReqFormhireDataRow->lname}}&nbsp;&nbsp;ตำแหน่ง&nbsp;&nbsp;{{$PersonDescReqFormhireDataRow->position}}</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$PersonDescReqFormhireDataRow->HireListScopeType}}</td>
            </tr>
            
            @endforeach

        </table>   
        
        <p style="text-align: left; margin-top: 10px;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>เจ้าหน้าที่ผู้ตรวจรับพัสดุ</b>
            
        </p>

        <table class="tablex" style="margin-top: -18px; margin-left: 95px">
            
            @foreach ($PersonReceiveReqFormhireData as $PersonReceiveReqFormhireDataRow)
            <tr>
                <td>{{$PersonReceiveReqFormhireDataRow->articleName}}&nbsp;{{$PersonReceiveReqFormhireDataRow->fname}}&nbsp;&nbsp;{{$PersonReceiveReqFormhireDataRow->lname}}&nbsp;&nbsp;ตำแหน่ง&nbsp;&nbsp;{{$PersonReceiveReqFormhireDataRow->position}}</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$PersonReceiveReqFormhireDataRow->HireListReceiveType}}</td>
            </tr>
            @endforeach

        </table>   


        <p style="margin-top: 5px;">

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;จึงเรียนมาเพื่อโปรดพิจารณา<br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


            ( 

            @foreach ($hireFormDataJoinHeadManI as $showhireFormDataJoinHeadManI)
                {{$showhireFormDataJoinHeadManI->headmenArticleName}} {{$showhireFormDataJoinHeadManI->headmenFname}}&nbsp;&nbsp;{{$showhireFormDataJoinHeadManI->headmenLname}}
            @endforeach

            ) <br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


            ตำแหน่ง {{$hireFormData->HeadmanIPosition}} <br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;


            วันที่ ..... / ........ / .....

        </p>

        <p style="margin-top: 5px;">

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;
             &nbsp;อนุมัติแต่งตั้งเจ้าหน้าที่ผู้กำหนดขอบเขตของงานจ้างดังกล่าวข้างต้น<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;
             &nbsp;เห็นชอบขอบเขตของงานจ้างตามที่เสนอ และให้กลุ่มภาระงานด้านพัสดุดำเนินการจัดจ้างตามระเบียบที่เกี่ยวข้องต่อไป<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;
             &nbsp;ไม่เห็นชอบ / ข้อเสนอแนะอื่น ๆ (ถ้ามี)...................................................................................................................................
        <br>
            
        </p>

        <p style="margin-top: 5px;">

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            


            ลงชื่อ .............................................................. <br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 


            ( 

            @foreach ($hireFormDataJoinHeadManII as $showhireFormDataJoinHeadManII)
                {{$showhireFormDataJoinHeadManII->headmenArticleName}} {{$showhireFormDataJoinHeadManII->headmenFname}}&nbsp;&nbsp;{{$showhireFormDataJoinHeadManII->headmenLname}}
            @endforeach

            ) <br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            


            {{$hireFormData->HeadmanIIPosition}} <br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp; 

            วันที่ ..... / ........ / .....
            
            
        </p>

        <p style="margin-top: 5px;">

            หมายเหตุ&nbsp; 1) แจ้งความประสงค์ล่วงหน้าก่อนวันที่ต้องการใช้พัสดุ ไม่น้อยกว่า 5 วันทำการ <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2) กรุณากรอกข้อมูลให้ครบถ้วน <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3) กรณียืมเงินให้ระบุชื่อ-นามสกุลผู้ที่ยืมเงินมาด้วย <br>
        </p>
            

    </div>


    <div style="margin-top: -15px;" class="page_break">
        <p style="text-align: center"> <b>เอกสารแนบแบบฟอร์มขอให้จัดซื้อวัสดุ ที่ อว 660301.1.{{$hireFormData->HireFormIdDept}}./{{$hireFormData->HireFormIdNo}} ลว.{{$hireFormData->HireFormDate}}</b></p> 

        <p> <b> 1. เหตุผลความจำเป็นที่ต้องจ้าง </b><br>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$hireFormData->HireDescFormReason}}</p>

        
        <p> <b> 2. รายละเอียดคุณลักษณะเฉพาะของพัสดุ</b></p>
    </div>

    <div style="margin-top: 30px;">
        <?php $i = 1; ?>
        <table style="margin-top: -18px; border: 1px solid; border-collapse: collapse; width: 100%;">
            <tr>
                <th style="border: 1px solid; background-color: rgb(226, 226, 226);">ลำดับที่</td>
                <th style="border: 1px solid; background-color: rgb(226, 226, 226);">รายการ</th>
                <th style="border: 1px solid; background-color: rgb(226, 226, 226);">ขอบเขตของงาน</th>
            </tr>

            @foreach ($MaterialFormhireData as $MaterialFormhireDataRow)
            <tr>

                <td style="text-align: center; border: 1px solid;">{{ $i++ }}</td>
                <td style="border: 1px solid;">{{$MaterialFormhireDataRow->hireScopeName}}</td>
                <td style="border: 1px solid;">{{$MaterialFormhireDataRow->hireScopeDesc}}</td>
            </tr>
            
            @endforeach

        </table> 
    </div>
          

    <div>

        <p> <b> 3. เงื่อนไขในใช้พัสดุที่ผลิตภายในประเทศ</b> <br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;[&nbsp;{{$hireFormData->chkbxI}}&nbsp;]  กำหนดให้ผู้รับจ้างต้องใช้พัสดุประเภทวัสดุหรือครุภัณฑ์ที่ผลิตภายในประเทศไม่น้อยกว่าร้อยละ 60 ของมูลค่าพัสดุ <br> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่จะใช้ในงานจ้างทั้งหมดตามใบสั่งจ้าง
   
   <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;[&nbsp;{{$hireFormData->chkbxII}}&nbsp;] ไม่กำหนด เนื่องจากวัสดุหรือครุภัณฑ์ที่ใช้ในงานจ้างครั้งนี้ไมมีผลิตภายในประเทศ<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;[&nbsp;{{$hireFormData->chkbxIII}}&nbsp;] ไม่กำหนด เนื่องจาก จะไม่ใช้พัสดุที่ผลิตภายในประเทศหรือจะใช้หรือใช้พัสดุที่ผลิตภายในประเทศไม่ครบร้อยละ 60 <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ตามหนังสือขออนุมัติฯ เลขที่ {{$hireFormData->chkbxIIIBookNo}} ลงวันที่ {{$hireFormData->chkbxIIIDate}}
        </p>


        <p> <b> 4. แหล่งที่มาของราคากลาง</b><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$hireFormData->HireFormPriceSrc}}
        </p> 

        <p> <b> 5. วงเงินงบประมาณ</b><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$hireFormData->HireFormBudget}}
        </p>

        <p> <b> 6. กำหนดเวลาให้แล้วเสร็จภายในวันที่ </b><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$hireFormData->HireFormUseDate}}
        </p>

        <p> <b> 7. หลักเกณฑ์ในการพิจารณาคัดเลือกข้อเสนอ </b><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$hireFormData->HireFormCriteria}}
        </p>

    </div>

    <div>
        <p style="margin-top: 5px;">



            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            ลงชื่อ .....................................................<br>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 


            
            
            ( 
            @foreach ($hireFormDataUser as $showhireFormDataUser)
                {{$showhireFormDataUser->articleName}} {{$showhireFormDataUser->fname}}&nbsp;&nbsp;{{$showhireFormDataUser->lname}}
            @endforeach

                
            ) <br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            


            เจ้าหน้าที่ผู้จัดทำขอบเขตของงาน<br>

            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


            วันที่ &nbsp;{{$hireFormData->HireFormDate}}    

        </p>
    </div>
 

</body>
</html>
