<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Success! Buy Form Generated</title>

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

    <div><p style="text-align: center; font-size: 16; font-weight: bold; margin-top: -15px">แบบฟอร์มขอให้จัดซื้อวัสดุ</p></div>

    <div style="margin-top: -15px">
        <p style="text-align: left;">
            
        ที่ อว 660301.1.{{$buyFormData->BuyFormIdDept}}./{{$buyFormData->BuyFormIdNo}}&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        วันที่ &nbsp;{{$buyFormData->BuyFormDate}}    
        
        <br>เรียน คณบดี/รองคณบดี <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;1. ด้วย&nbsp;{{$buyFormData->BuyFormDept}}&nbsp;มีความประสงค์ให้ จัดซื้อวัสดุจำนวน {{$buyFormCountMaterial}} รายการ (ตามรายละเอียดคุณลักษณะเฉพาะของพัสดุที่แนบ)  เพื่อ {{$buyFormData->BuyPurpose}} <br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;2. แหล่งเงิน &nbsp;
            
            @foreach ($buyFormDataJoinBudget as $showbuyFormDataJoinBudget)
                {{$showbuyFormDataJoinBudget->budgetType}} 
            @endforeach
            

            &nbsp;ประจำปีงบประมาณ พ.ศ {{$buyFormData->buyBudgetYear}} 
            
            แผนงาน
            @foreach ($buyFormDataJoinPlanBudget as $showbuyFormDataJoinPlanBudget)
                {{$showbuyFormDataJoinPlanBudget->planBudgetName}} 
            @endforeach
            

            @foreach ($buyFormDataJoinPlan as $showbuyFormDataJoinPlan)
                {{$showbuyFormDataJoinPlan->planName}} 
            @endforeach
            

            @foreach ($buyFormDataJoinSubPlan as $showbuyFormDataJoinSubPlan)
                {{$showbuyFormDataJoinSubPlan->subPlanName}} 
            @endforeach

             ซึ่งได้รับ {{$buyFormData->buyReceive}} ตามหนังสือที่ อว 660301.1.{{$buyFormData->BuyBookNoDept}}./{{$buyFormData->BuyBookNo}} 
             ลงวันที่ {{$buyFormData->buyBookDateD}} {{$buyFormData->buyBookDateM}}  {{$buyFormData->buyBookDateY}} 
             
            โครงการ
              
            @foreach ($buyFormDataJoinProject as $showbuyFormDataJoinProject)
                {{$showbuyFormDataJoinProject->projectName}} 
            @endforeach

            กิจกรรมลำดับที่ {{$buyFormData->buyFormActNo}} ชื่อกิจกรรม {{$buyFormData->buyFormActName}} <br>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;3. เสนอรายชื่อเจ้าหน้าที่เพื่อประกอบการดำเนินการจัดซื้อ ดังนี้ <br>
        </p>
            
        <p style="margin-top: -16px;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>เจ้าหน้าที่ผู้จัดทำรายละเอียดคุณลักษณะเฉพาะของพัสดุ</b>
        </p>
        
        
        <table class="tablex" style="margin-top: -18px; margin-left: 95px">
            @foreach ($PersonDescReqFormbuyData as $PersonDescReqFormbuyDataRow)
            <tr>
                <td>{{$PersonDescReqFormbuyDataRow->articleName}}&nbsp;{{$PersonDescReqFormbuyDataRow->fname}}&nbsp;&nbsp;{{$PersonDescReqFormbuyDataRow->lname}}&nbsp;&nbsp;ตำแหน่ง&nbsp;&nbsp;{{$PersonDescReqFormbuyDataRow->position}}</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$PersonDescReqFormbuyDataRow->buyListDescType}}</td>
            </tr>
            
            @endforeach

        </table>   
        
        <p style="text-align: left; margin-top: 10px;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>เจ้าหน้าที่ผู้ตรวจรับพัสดุ</b>
            
        </p>

        <table class="tablex" style="margin-top: -18px; margin-left: 95px">
            
            @foreach ($PersonReceiveReqFormbuyData as $PersonReceiveReqFormbuyDataRow)
            <tr>
                <td>{{$PersonReceiveReqFormbuyDataRow->articleName}}&nbsp;{{$PersonReceiveReqFormbuyDataRow->fname}}&nbsp;&nbsp;{{$PersonReceiveReqFormbuyDataRow->lname}}&nbsp;&nbsp;ตำแหน่ง&nbsp;&nbsp;{{$PersonReceiveReqFormbuyDataRow->position}}</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$PersonReceiveReqFormbuyDataRow->buyListReceiveType}}</td>
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
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            ลงชื่อ .............................................................. <br>

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
            @foreach ($buyFormDataJoinHeadManI as $showbuyFormDataJoinHeadManI)
                {{$showbuyFormDataJoinHeadManI->headmenArticleName}} {{$showbuyFormDataJoinHeadManI->headmenFname}}&nbsp;&nbsp;{{$showbuyFormDataJoinHeadManI->headmenLname}}
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


            ตำแหน่ง {{$buyFormData->HeadmanIPosition}} <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 


            วันที่ ..... / ........ / .....

        </p>

        <p style="margin-top: 5px;">

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;
             &nbsp;อนุมัติแต่งตั้งเจ้าหน้าที่ผู้กำหนดรายละเอียดคุณลักษณะเฉพาะของพัสดุดังกล่าวข้างต้น<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;
             &nbsp;เห็นชอบรายละเอียดคุณลักษณะเฉพาะของพัสดุตามที่เสนอ และให้กลุ่มภาระงานด้านพัสดุดำเนินการจัดซื้อตามระเบียบที่<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; เกี่ยวข้องต่อไป <br>
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
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
            


            ลงชื่อ .............................................................. <br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

            ( 
            @foreach ($buyFormDataJoinHeadManII as $showbuyFormDataJoinHeadManII)
                {{$showbuyFormDataJoinHeadManII->headmenArticleName}} {{$showbuyFormDataJoinHeadManII->headmenFname}}&nbsp;&nbsp;{{$showbuyFormDataJoinHeadManII->headmenLname}}
            @endforeach
            ) <br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            


            {{$buyFormData->HeadmanIIPosition}} <br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

            วันที่ ..... / ........ / .....
            
        </p>

        <p style="margin-top: 15px;">

            หมายเหตุ&nbsp; 1) แจ้งความประสงค์ล่วงหน้าก่อนวันที่ต้องการใช้พัสดุ ไม่น้อยกว่า 5 วันทำการ <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2) กรุณากรอกข้อมูลให้ครบถ้วน <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3) กรณียืมเงินให้ระบุชื่อ-นามสกุลผู้ที่ยืมเงินมาด้วย <br>
        </p>
            
    </div>

    
    
    

    <div style="margin-top: 50px;" class="page_break">
        <p style="text-align: center"> <b>เอกสารแนบแบบฟอร์มขอให้จัดซื้อวัสดุ ที่ อว 660301.1.{{$buyFormData->BuyFormIdDept}}./{{$buyFormData->BuyFormIdNo}} ลว.{{$buyFormData->BuyFormDate}}</b></p> 
        
        <p> <b> 1. รายละเอียดคุณลักษณะเฉพาะของพัสดุ</b></p>
    </div>

    <div style="margin-top: 30px;">
        <?php $i = 1; ?>
        <table style="margin-top: -18px; border: 1px solid; border-collapse: collapse; width: 100%;">
            <tr>
                <th style="border: 1px solid; background-color: rgb(226, 226, 226);">ลำดับที่</td>
                <th style="border: 1px solid; background-color: rgb(226, 226, 226);">ชื่อรายการ</th>
                <th style="border: 1px solid; background-color: rgb(226, 226, 226);">รายละเอียดคุณลักษณะเฉพาะของพัสดุ</th>
                <th style="border: 1px solid; background-color: rgb(226, 226, 226);">จำนวน/หน่วยนับ</th>
                <th style="border: 1px solid; background-color: rgb(226, 226, 226);">ราคามาตรฐานหรือราคากลาง/ต่อหน่วย</th>
                <th style="border: 1px solid; background-color: rgb(226, 226, 226);">วงเงินจัดซื้อ</th>
            </tr>

            
            @foreach ($MaterialFormbuyData as $MaterialFormbuyDataRow)
            <tr>

                <td style="text-align: center; border: 1px solid;">{{ $i++ }}</td>
                <td style="border: 1px solid;">{{$MaterialFormbuyDataRow->materialName}}</td>
                <td style="border: 1px solid;">{{$MaterialFormbuyDataRow->materialDesc}}</td>
                <td style="text-align: center; border: 1px solid;">{{$MaterialFormbuyDataRow->materialCount}}</td>
                <td style="text-align: center; border: 1px solid;">{{$MaterialFormbuyDataRow->materialPrice}}</td>
                <td style="text-align: center; border: 1px solid;">{{$MaterialFormbuyDataRow->materialBudget}}</td>
            </tr>
            
            @endforeach

        </table> 
    </div>
          

    <div>
        <p> <b> 2. เงื่อนไขในใช้พัสดุที่ผลิตภายในประเทศ</b> <br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;[&nbsp;{{$buyFormData->BuyChkI}}&nbsp;] รายการที่ {{$buyFormData->BuyChkIDesc}} &nbsp; กำหนดให้ผู้ขายต้องส่งพัสดุที่ผลิตภายในประเทศ<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;[&nbsp;{{$buyFormData->BuyChkII}}&nbsp;] รายการที่ {{$buyFormData->BuyChkIIDesc}} &nbsp; ไม่กำหนดให้ผู้ขายต้องส่งพัสดุที่ผลิตภายในประเทศ เนื่องจากเป็นรายการที่ไม่มีผลิตภายในประเทศ<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;[&nbsp;{{$buyFormData->BuyChkIII}}&nbsp;] รายการที่ {{$buyFormData->BuyChkIIIDesc}} &nbsp; ไม่กำหนดให้ผู้ขายต้องส่งพัสดุที่ผลิตภายในประเทศ เนื่องจากได้รับอนุมัติฯ ตามหนังสือเลขที่ <br> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เลขที่ {{$buyFormData->BuyMatNo}} ลงวันที่ {{$buyFormData->BuyMatDate}} เรื่องขออนุมัติไม่ใช้พัสดุที่ผลิตภายในประเทศ
        </p>

        <p> <b> 3. แหล่งที่มาของราคากลาง</b><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$buyFormData->BuyFormPriceSrc}}
        </p> 

        <p> <b> 4. โดยต้องการใช้วันที่</b><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$buyFormData->BuyFormUseDate}}
        </p>
        <p> <b> 5. หลักเกณฑ์ในการพิจารณาคัดเลือกข้อเสนอ </b><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$buyFormData->BuyFormCriteria}}
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
            @foreach ($buyFormDataUser as $showbuyFormDataUser)
                {{$showbuyFormDataUser->articleName}} {{$showbuyFormDataUser->fname}}&nbsp;&nbsp;{{$showbuyFormDataUser->lname}}
            @endforeach

                
            ) <br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            


            เจ้าหน้าที่ผู้จัดทำรายละเอียดคุณลักษณะเฉพาะของพัสดุ<br>

            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


            วันที่ &nbsp;{{$buyFormData->BuyFormDate}}    

        </p>
    </div>
 

</body>
</html>
