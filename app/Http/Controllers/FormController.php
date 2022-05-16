<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response as FacadeResponse;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Dept;

use App\Models\BudgetType;
use App\Models\planBudget;
use App\Models\Plan;
use App\Models\SubPlan;
use App\Models\Project;

use App\Models\Status;


use App\Models\Headman;
use App\Models\Position;


use App\Models\ReqFormbuy;
use App\Models\PersonDescReqFormbuy;
use App\Models\PersonReceiveReqFormbuy;
use App\Models\MaterialFormbuy;


use App\Models\ReqFormhire;
use App\Models\PersonDescReqFormhire;
use App\Models\PersonReceiveReqFormhire;
use App\Models\MaterialFormhire;

use App\Helpers\Helper;


class FormController extends Controller
{
    
    public function formBuyRequests()
    {

        $authid = Auth::user()->id;
        $authDept = Auth::user()->deptCode;

        $user = User::select('users.id','users.fname','depts.deptName')->join('depts', 'depts.id', '=', 'users.deptCode')->where('users.id', '=', $authid)->get();
        $depts = Dept::all();

        $budgets = BudgetType::all();
        $planBudgets = planBudget::all();

        $plans = Plan::whereIn('deptId',[$authDept])->get();
        $subPlans = SubPlan::whereIn('deptId',[$authDept])->get();
        $projects = Project::whereIn('deptId',[$authDept])->get();


        $Headmans = Headman::whereIn('headmanStatus',['ดำรงตำแหน่ง'])->get();

        $Positions = Position::all();
        

        $userData = User::whereIn('sysRole',['เจ้าหน้าที่พัสดุสาขา'])->get();


        return view('staff.form.formBuyRequests',[
            'user' => $user,
            'userData' => $userData,
            'depts' => $depts,
            'Positions' => $Positions,
            'Headmans' => $Headmans,

            'budgets' => $budgets,
            'planBudgets' => $planBudgets,
            'plans' => $plans,
            'subPlans' => $subPlans,
            'projects' => $projects

        ]);


    }

    
    public function buyFormCreate(Request $request)
    {

        $UserId = $request->UserId;       
        $StatusId = $request->StatusId;
        $BuyFormIdDept = $request->BuyFormIdDept;


        $BuyFormIdNo = Helper::IDBuyFormGenerator(new ReqFormbuy, 'BuyFormIdNo', 4, '0');

        $BuyFormDate = $request->BuyFormDate;
        
        $BuyFormDateD = $request->BuyFormDateD;
        $BuyFormDateM = $request->BuyFormDateM;
        $BuyFormDateY = $request->BuyFormDateY;
        $BuyFormDept = $request->BuyFormDept;  
        
        $BuyPurpose = $request->BuyPurpose; 
        $buyBudgetYear = $request->buyBudgetYear;
        $buyReceive = $request->buyReceive;
        $BuyBookNoDept = $request->BuyBookNoDept;
        $BuyBookNo = $request->BuyBookNo;  
        $buyBookDateD = $request->buyBookDateD; 
        $buyBookDateM = $request->buyBookDateM;
        $buyBookDateY = $request->buyBookDateY;
        $buyFormActNo = $request->buyFormActNo;
        $buyFormActName = $request->buyFormActName;  

        $BudgetId = $request->BudgetId;
        $BudgetPlanId = $request->BudgetPlanId;
        $PlanId = $request->PlanId;
        $SubPlanId = $request->SubPlanId;
        $ProjectId = $request->ProjectId;  


        $HeadmanIId = $request->HeadmanIId;
        $HeadmanIPosition = $request->HeadmanIPosition;
        $HeadmanIIId = $request->HeadmanIIId;  
        $HeadmanIIPosition = $request->HeadmanIIPosition; 

        $BuyChkI = $request->BuyChkI; 
        $BuyChkIDesc = $request->BuyChkIDesc;
        $BuyChkII = $request->BuyChkII;
        $BuyChkIIDesc = $request->BuyChkIIDesc;
        $BuyChkIII = $request->BuyChkIII;  
        $BuyChkIIIDesc = $request->BuyChkIIIDesc; 
        $BuyMatNo = $request->BuyMatNo;
        $BuyMatDate = $request->BuyMatDate;
        $BuyFormPriceSrc = $request->BuyFormPriceSrc;
        $BuyFormUseDate = $request->BuyFormUseDate;  
        $BuyFormCriteria = $request->BuyFormCriteria; 


        $CreateBuyForm = new ReqFormbuy;

        $CreateBuyForm-> UserId = $UserId;  
        $CreateBuyForm-> StatusId = $StatusId;                   
        $CreateBuyForm-> BuyFormIdDept = $BuyFormIdDept;  
        $CreateBuyForm-> BuyFormIdNo = $BuyFormIdNo;   
        $CreateBuyForm-> BuyFormDate = $BuyFormDate;               
        $CreateBuyForm-> BuyFormDateD = $BuyFormDateD; 
        $CreateBuyForm-> BuyFormDateM = $BuyFormDateM;  
        $CreateBuyForm-> BuyFormDateY = $BuyFormDateY;                   
        $CreateBuyForm-> BuyFormDept = $BuyFormDept; 


        $CreateBuyForm-> BuyPurpose = $BuyPurpose;                   
        $CreateBuyForm-> buyBudgetYear = $buyBudgetYear; 
        $CreateBuyForm-> buyReceive = $buyReceive;  
        $CreateBuyForm-> BuyBookNoDept = $BuyBookNoDept;                   
        $CreateBuyForm-> BuyBookNo = $BuyBookNo; 
        $CreateBuyForm-> buyBookDateD = $buyBookDateD;                   
        $CreateBuyForm-> buyBookDateM = $buyBookDateM; 
        $CreateBuyForm-> buyBookDateY = $buyBookDateY;  
        $CreateBuyForm-> buyFormActNo = $buyFormActNo;                   
        $CreateBuyForm-> buyFormActName = $buyFormActName; 

        $CreateBuyForm-> BudgetId = $BudgetId;                   
        $CreateBuyForm-> BudgetPlanId = $BudgetPlanId; 
        $CreateBuyForm-> PlanId = $PlanId;  
        $CreateBuyForm-> SubPlanId = $SubPlanId;                   
        $CreateBuyForm-> ProjectId = $ProjectId; 

        $CreateBuyForm-> HeadmanIId = $HeadmanIId;                    
        $CreateBuyForm-> HeadmanIPosition = $HeadmanIPosition; 
        $CreateBuyForm-> HeadmanIIId = $HeadmanIIId;  
        $CreateBuyForm-> HeadmanIIPosition = $HeadmanIIPosition;    

        $CreateBuyForm-> BuyChkI = $BuyChkI;                   
        $CreateBuyForm-> BuyChkIDesc = $BuyChkIDesc; 
        $CreateBuyForm-> BuyChkII = $BuyChkII;  
        $CreateBuyForm-> BuyChkIIDesc = $BuyChkIIDesc;                   
        $CreateBuyForm-> BuyChkIII = $BuyChkIII; 
        $CreateBuyForm-> BuyChkIIIDesc = $BuyChkIIIDesc;                   
        $CreateBuyForm-> BuyMatNo = $BuyMatNo; 
        $CreateBuyForm-> BuyMatDate = $BuyMatDate;  
        $CreateBuyForm-> BuyFormPriceSrc = $BuyFormPriceSrc;                   
        $CreateBuyForm-> BuyFormUseDate = $BuyFormUseDate;
        $CreateBuyForm-> BuyFormCriteria = $BuyFormCriteria; 


        $CreateBuyForm->save();


        ///++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++/

        foreach($request->buyListDescUserId as $key=>$insert ) {

            $saveId = ReqFormbuy::find($CreateBuyForm->id);
            
            $buyMakeDesc = new PersonDescReqFormbuy;

            $buyMakeDesc->buyListDescUserId = $request->buyListDescUserId[$key];
            $buyMakeDesc->buyListDescType = $request->buyListDescType[$key];


            $saveId = $saveId->PersonDescReqFormbuys()->save($buyMakeDesc);

        }

        foreach($request->buyListReceiveUserId as $key=>$insert ) {

            $saveId = ReqFormbuy::find($CreateBuyForm->id);
            
            $buyReceive = new PersonReceiveReqFormbuy;

            $buyReceive->buyListReceiveUserId = $request->buyListReceiveUserId[$key];
            $buyReceive->buyListReceiveType = $request->buyListReceiveType[$key];


            $saveId = $saveId->PersonReceiveReqFormbuys()->save($buyReceive);

        }

        foreach($request->materialName as $key=>$insert ) {

            $saveId = ReqFormbuy::find($CreateBuyForm->id);
            
            $buyMaterial = new MaterialFormbuy;

            $buyMaterial->materialName = $request->materialName[$key];
            $buyMaterial->materialDesc = $request->materialDesc[$key];
            $buyMaterial->materialCount = $request->materialCount[$key];
            $buyMaterial->materialPrice = $request->materialPrice[$key];
            $buyMaterial->materialBudget = $request->materialBudget[$key];

            $saveId = $saveId->MaterialFormbuys()->save($buyMaterial);

        }


        return redirect('staff-form-list');



    }


    public function formHireRequests()
    {

        $authid = Auth::user()->id;
        $authDept = Auth::user()->deptCode;

        $user = User::select('users.id','users.fname','depts.deptName')->join('depts', 'depts.id', '=', 'users.deptCode')->where('users.id', '=', $authid)->get();
        $depts = Dept::all();

        $budgets = BudgetType::all();
        $planBudgets = planBudget::all();

        $plans = Plan::whereIn('deptId',[$authDept])->get();
        $subPlans = SubPlan::whereIn('deptId',[$authDept])->get();
        $projects = Project::whereIn('deptId',[$authDept])->get();

        
        $Headmans = Headman::whereIn('headmanStatus',['ดำรงตำแหน่ง'])->get();

        $Positions = Position::all();
        

        $userData = User::whereIn('sysRole',['เจ้าหน้าที่พัสดุสาขา'])->get();

        return view('staff.form.formHireRequests',[

            'user' => $user,
            'userData' => $userData,
            'depts' => $depts,
            'Positions' => $Positions,
            'Headmans' => $Headmans,

            'budgets' => $budgets,
            'planBudgets' => $planBudgets,
            'plans' => $plans,
            'subPlans' => $subPlans,
            'projects' => $projects


        ]);

    }


    public function hireFormCreate(Request $request)
    {

        $UserId = $request->UserId;       
        $StatusId = $request->StatusId;
        $HireFormIdDept = $request->HireFormIdDept;

        //$HireFormIdNo = $request->HireFormIdNo; 

        $HireFormIdNo = Helper::IDHireFormGenerator(new ReqFormhire, 'HireFormIdNo', 4, '0');

        $HireFormDate = $request->HireFormDate; 
        $HireFormDateD = $request->HireFormDateD;
        $HireFormDateM = $request->HireFormDateM;
        $HireFormDateY = $request->HireFormDateY;

        $HireFormDept = $request->HireFormDept;  
        

        $HireFormOrder = $request->HireFormOrder; 
        $HireFormOrderNo = $request->HireFormOrderNo;


        $HirePurpose = $request->HirePurpose;
        $HireBudgetYear = $request->HireBudgetYear;
        $HireReceive = $request->HireReceive;  
        $HireBookNoDept = $request->HireBookNoDept; 
        $HireBookNo = $request->HireBookNo;


        $HireBookDateD = $request->HireBookDateD;
        $HireBookDateM = $request->HireBookDateM;
        $HireBookDateY = $request->HireBookDateY; 
        
        
        $HireFormActNo = $request->HireFormActNo;
        $HireFormActName = $request->HireFormActName; 
        $BudgetId = $request->BudgetId;
        $BudgetPlanId = $request->BudgetPlanId;
        $PlanId = $request->PlanId;
        $SubPlanId = $request->SubPlanId;
        $ProjectId = $request->ProjectId;  



        $HeadmanIId = $request->HeadmanIId;
        $HeadmanIPosition = $request->HeadmanIPosition;        
        $HeadmanIIId = $request->HeadmanIIId;  
        $HeadmanIIPosition = $request->HeadmanIIPosition;


        $HireDescFormReason = $request->HireDescFormReason; 


        $chkbxI = $request->chkbxI;
        $chkbxII = $request->chkbxII;
        $chkbxIII = $request->chkbxIII;


        $chkbxIIIBookNo = $request->chkbxIIIBookNo;  
        $chkbxIIIDate = $request->chkbxIIIDate; 


        $HireFormPriceSrc = $request->HireFormPriceSrc;
        $HireFormBudget = $request->HireFormBudget;
        $HireFormUseDate = $request->HireFormUseDate;
        $HireFormCriteria = $request->HireFormCriteria;  


        $CreateHireForm = new ReqFormhire;

        $CreateHireForm-> UserId = $UserId;  
        $CreateHireForm-> StatusId = $StatusId;                   
        $CreateHireForm-> HireFormIdDept = $HireFormIdDept;  


        $CreateHireForm-> HireFormIdNo = $HireFormIdNo;                   
        $CreateHireForm-> HireFormDate = $HireFormDate; 
        $CreateHireForm-> HireFormDateD = $HireFormDateD;  
        $CreateHireForm-> HireFormDateM = $HireFormDateM;                   
        $CreateHireForm-> HireFormDateY = $HireFormDateY; 
        $CreateHireForm-> HireFormDept = $HireFormDept;   

        $CreateHireForm-> HireFormOrder = $HireFormOrder; 
        $CreateHireForm-> HireFormOrderNo = $HireFormOrderNo;  

        $CreateHireForm-> HirePurpose = $HirePurpose;     
        $CreateHireForm-> HireBudgetYear = $HireBudgetYear; 
        $CreateHireForm-> HireReceive = $HireReceive;                   
        $CreateHireForm-> HireBookNoDept = $HireBookNoDept; 
        $CreateHireForm-> HireBookNo = $HireBookNo;  

        $CreateHireForm-> HireBookDateD = $HireBookDateD;   
        $CreateHireForm-> HireBookDateM = $HireBookDateM; 
        $CreateHireForm-> HireBookDateY = $HireBookDateY;      

        $CreateHireForm-> HireFormActNo = $HireFormActNo; 
        $CreateHireForm-> HireFormActName = $HireFormActName; 
        
        
        $CreateHireForm-> BudgetId = $BudgetId;                   
        $CreateHireForm-> BudgetPlanId = $BudgetPlanId; 
        $CreateHireForm-> PlanId = $PlanId;  
        $CreateHireForm-> SubPlanId = $SubPlanId;                   
        $CreateHireForm-> ProjectId = $ProjectId; 


        $CreateHireForm-> HeadmanIId = $HeadmanIId;    
        $CreateHireForm-> HeadmanIPosition = $HeadmanIPosition;                   
        $CreateHireForm-> HeadmanIIId = $HeadmanIIId; 
        $CreateHireForm-> HeadmanIIPosition = $HeadmanIIPosition; 

        $CreateHireForm-> HireDescFormReason = $HireDescFormReason;

        $CreateHireForm-> chkbxI = $chkbxI; 
        $CreateHireForm-> chkbxII = $chkbxII;                   
        $CreateHireForm-> chkbxIII = $chkbxIII; 

        $CreateHireForm-> chkbxIIIBookNo = $chkbxIIIBookNo;  
        $CreateHireForm-> chkbxIIIDate = $chkbxIIIDate;

        $CreateHireForm-> HireFormPriceSrc = $HireFormPriceSrc;
        $CreateHireForm-> HireFormBudget = $HireFormBudget;
        $CreateHireForm-> HireFormUseDate = $HireFormUseDate;
        $CreateHireForm-> HireFormCriteria = $HireFormCriteria; 


        $CreateHireForm->save();


        ///++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++/


        foreach($request->HireListScopeUserId as $key=>$insert ) {

            $saveId = ReqFormhire::find($CreateHireForm->id);
            
            $hireMakeDesc = new PersonDescReqFormhire;

            $hireMakeDesc->HireListScopeUserId = $request->HireListScopeUserId[$key];
            $hireMakeDesc->HireListScopeType = $request->HireListScopeType[$key];


            $saveId = $saveId->PersonDescReqFormhires()->save($hireMakeDesc);

        }

        foreach($request->HireListReceiveUserId as $key=>$insert ) {

            $saveId = ReqFormhire::find($CreateHireForm->id);
            
            $hireReceive = new PersonReceiveReqFormhire;

            $hireReceive->HireListReceiveUserId = $request->HireListReceiveUserId[$key];
            $hireReceive->HireListReceiveType = $request->HireListReceiveType[$key];

            $saveId = $saveId->PersonReceiveReqFormhires()->save($hireReceive);

        }

        foreach($request->hireScopeName as $key=>$insert ) {

            $saveId = ReqFormhire::find($CreateHireForm->id);
            
            $hireMaterial = new MaterialFormhire;

            $hireMaterial->hireScopeName = $request->hireScopeName[$key];
            $hireMaterial->hireScopeDesc = $request->hireScopeDesc[$key];

            $saveId = $saveId->MaterialFormhires()->save($hireMaterial);

        }

        return redirect('staff-form-list');



    }



    public function formList()
    {
        $ReqFormbuys = ReqFormbuy::sortable()->orderBy('id', 'DESC')->paginate(10);
        $ReqFormhires = ReqFormhire::sortable()->orderBy('id', 'DESC')->paginate(10);

        return view('admin.form.formList',[
            'ReqFormbuys' => $ReqFormbuys,
            'ReqFormhires' => $ReqFormhires,
        ]);

    }

    public function formCheck()
    {

        $ReqFormbuys = ReqFormbuy::sortable()->orderBy('id', 'DESC')->paginate(10);
        $ReqFormhires = ReqFormhire::sortable()->orderBy('id', 'DESC')->paginate(10);

        return view('admin.form.formCheck',[
            'ReqFormbuys' => $ReqFormbuys,
            'ReqFormhires' => $ReqFormhires,
        ]);
    }



    public function staffFormList()
    {

        $currentUser = Auth::user()->id;

        $ReqFormbuys = ReqFormbuy::whereIn('UserID',[$currentUser])->sortable()->orderBy('id', 'DESC')->paginate(10);
        $ReqFormhires = ReqFormhire::whereIn('UserID',[$currentUser])->sortable()->orderBy('id', 'DESC')->paginate(10);



        return view('staff.form.staffFormList',[
            'ReqFormbuys' => $ReqFormbuys,
            'ReqFormhires' => $ReqFormhires,
        ]);

        //return $ReqFormhires;
    }

    public function staffFormCheck()
    {
        $currentUser = Auth::user()->id;


        $buyFormJoinStatuses = ReqFormbuy::join('statuses', 'statuses.id', '=', 'req_formbuys.statusId')->whereIn('UserID',[$currentUser])->sortable()->paginate(10);
        $hireFormJoinStatuses = Status::join('req_formhires', 'req_formhires.statusId', '=', 'statuses.id')->whereIn('UserID',[$currentUser])->sortable()->paginate(10);

        //$buyFormJoinStatuses = ReqFormbuy::join('statuses', 'statuses.id', '=', 'req_formbuys.StatusId')->join('projects', 'projects.id', '=', 'req_formbuys.ProjectId')->whereIn('UserID',[$currentUser])->sortable()->paginate(10);
        
        //$hireFormJoinStatuses = ReqFormhire::join('statuses', 'statuses.id', '=', 'req_formhires.StatusId')->join('projects', 'projects.id', '=', 'req_formhires.ProjectId')->whereIn('UserID',[$currentUser])->sortable()->paginate(10);

        
        return view('staff.form.staffFormCheck',[
            'buyFormJoinStatuses' => $buyFormJoinStatuses,
            'hireFormJoinStatuses' => $hireFormJoinStatuses
        ]);

        return $hireFormJoinStatuses;

    }



    public function formUpdateStatusBuy($id)
    {

        $formBuys = ReqFormbuy::find($id);
        $statuses = Status::all();

        return view('admin.form.formUpdateStatusBuy',[
            'formBuys' => $formBuys,
            'statuses' => $statuses
        ]);

    }


    public function formUpdatedStatusBuy(Request $request,$id)
    {

        $formBuys = ReqFormbuy::find($id);

        $formBuys->StatusId = $request->StatusId;

        $formBuys->update();

        return redirect('form-check');

    }

    public function formUpdateStatusHire($id)
    {

        $formHires = ReqFormhire::find($id);
        $statuses = Status::all();

        return view('admin.form.formUpdateStatusHire',[
            'formHires' => $formHires,
            'statuses' => $statuses
        ]);

    }


    public function formUpdatedStatusHire(Request $request,$id)
    {

        $formHires = ReqFormhire::find($id);

        $formHires->StatusId = $request->StatusId;
        
        $formHires->update();

        return redirect('form-check');

    }







}
