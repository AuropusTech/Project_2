<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response as FacadeResponse;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Dept;

use App\Models\Budget;
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


use PDF;



class PDFController extends Controller
{

    public function buyPdfExport($id){

        $buyFormData = ReqFormbuy::find($id);

        //$PersonDescReqFormbuyData = PersonDescReqFormbuy::whereIn('req_formbuy_id',[$buyFormData->id])->get();
        $PersonDescReqFormbuyData = PersonDescReqFormbuy::join('users', 'users.id', '=', 'person_desc_req_formbuys.buyListDescUserId')->where('req_formbuy_id', '=', [$buyFormData->id])->get();
        //$PersonReceiveReqFormbuyData = PersonReceiveReqFormbuy::whereIn('req_formbuy_id',[$buyFormData->id])->get();
        $PersonReceiveReqFormbuyData = PersonReceiveReqFormbuy::join('users', 'users.id', '=', 'person_receive_req_formbuys.buyListReceiveUserId')->where('req_formbuy_id', '=', [$buyFormData->id])->get();
        $MaterialFormbuyData = MaterialFormbuy::whereIn('req_formbuy_id',[$buyFormData->id])->get();


        $buyFormDataJoinBudget = ReqFormbuy::join('budget_types', 'budget_types.id', '=', 'req_formbuys.BudgetId')->where('req_formbuys.id', '=', $id)->get();
        $buyFormDataJoinPlanBudget = ReqFormbuy::join('plan_budgets', 'plan_budgets.planBudgetCode', '=', 'req_formbuys.BudgetPlanId')->where('req_formbuys.id', '=', $id)->get();
        $buyFormDataJoinPlan = ReqFormbuy::join('plans', 'plans.planCode', '=', 'req_formbuys.PlanId')->where('req_formbuys.id', '=', $id)->get();
        $buyFormDataJoinSubPlan = ReqFormbuy::join('sub_plans', 'sub_plans.id', '=', 'req_formbuys.SubPlanId')->where('req_formbuys.id', '=', $id)->get();
        $buyFormDataJoinProject = ReqFormbuy::join('projects', 'projects.id', '=', 'req_formbuys.ProjectId')->where('req_formbuys.id', '=', $id)->get();



        $buyFormDataJoinHeadManI = ReqFormbuy::join('headmen', 'headmen.id', '=', 'req_formbuys.HeadmanIId')->where('req_formbuys.id', '=', $id)->get();
        $buyFormDataJoinHeadManII = ReqFormbuy::join('headmen', 'headmen.id', '=', 'req_formbuys.HeadmanIIId')->where('req_formbuys.id', '=', $id)->get();


        $buyFormDataUser = ReqFormbuy::join('users', 'users.id', '=', 'req_formbuys.UserId')->where('req_formbuys.id', '=', $id)->get();
        $buyFormCountMaterial = MaterialFormbuy::whereIn('req_formbuy_id',[$buyFormData->id])->count();



        $buyPdf = PDF::loadView('buyPdf',[
            'buyFormData' => $buyFormData,//

            'buyFormDataJoinBudget' => $buyFormDataJoinBudget,//
            'buyFormDataJoinPlanBudget' => $buyFormDataJoinPlanBudget,//
            'buyFormDataJoinPlan' => $buyFormDataJoinPlan,//
            'buyFormDataJoinSubPlan' => $buyFormDataJoinSubPlan,//
            'buyFormDataJoinProject' => $buyFormDataJoinProject,//

            'buyFormDataJoinHeadManI' => $buyFormDataJoinHeadManI,
            'buyFormDataJoinHeadManII' => $buyFormDataJoinHeadManII,

            'buyFormDataUser' => $buyFormDataUser,
            'buyFormCountMaterial' => $buyFormCountMaterial,


            'PersonDescReqFormbuyData' => $PersonDescReqFormbuyData,//
            'PersonReceiveReqFormbuyData' => $PersonReceiveReqFormbuyData,//
            'MaterialFormbuyData' => $MaterialFormbuyData//
        
        ]);

        return $buyPdf->stream('BuyRequestFormID'.$id.'.pdf');

        //return $buyFormData;
                
        //return $pdf->stream('test.pdf'); //แบบนี้จะ stream มา preview
        //return $pdf->download('test.pdf'); //แบบนี้จะดาวโหลดเลย
    }





    public function hirePdfExport($id){

        $hireFormData = ReqFormhire::find($id);


        //$PersonDescReqFormhireData = PersonDescReqFormhire::whereIn('req_formhire_id',[$hireFormData->id])->get();
        $PersonDescReqFormhireData = PersonDescReqFormhire::join('users', 'users.id', '=', 'person_desc_req_formhires.HireListScopeUserId')->where('req_formhire_id', '=', [$hireFormData->id])->get();
        //$PersonReceiveReqFormhireData = PersonReceiveReqFormhire::whereIn('req_formhire_id',[$hireFormData->id])->get();
        $PersonReceiveReqFormhireData = PersonReceiveReqFormhire::join('users', 'users.id', '=', 'person_receive_req_formhires.HireListReceiveUserId')->where('req_formhire_id', '=', [$hireFormData->id])->get();
        $MaterialFormhireData = MaterialFormhire::whereIn('req_formhire_id',[$hireFormData->id])->get();


        $hireFormDataJoinBudget = ReqFormhire::join('budget_types', 'budget_types.id', '=', 'req_formhires.BudgetId')->where('req_formhires.id', '=', $id)->get();
        $hireFormDataJoinPlanBudget = ReqFormhire::join('plan_budgets', 'plan_budgets.planBudgetCode', '=', 'req_formhires.BudgetPlanId')->where('req_formhires.id', '=', $id)->get();
        $hireFormDataJoinPlan = ReqFormhire::join('plans', 'plans.planCode', '=', 'req_formhires.PlanId')->where('req_formhires.id', '=', $id)->get();
        $hireFormDataJoinSubPlan = ReqFormhire::join('sub_plans', 'sub_plans.id', '=', 'req_formhires.SubPlanId')->where('req_formhires.id', '=', $id)->get();
        $hireFormDataJoinProject = ReqFormhire::join('projects', 'projects.id', '=', 'req_formhires.ProjectId')->where('req_formhires.id', '=', $id)->get();

        $hireFormDataJoinHeadManI = ReqFormhire::join('headmen', 'headmen.id', '=', 'req_formhires.HeadmanIId')->where('req_formhires.id', '=', $id)->get();
        $hireFormDataJoinHeadManII = ReqFormhire::join('headmen', 'headmen.id', '=', 'req_formhires.HeadmanIIId')->where('req_formhires.id', '=', $id)->get();

        $hireFormDataUser = ReqFormhire::join('users', 'users.id', '=', 'req_formhires.UserId')->where('req_formhires.id', '=', $id)->get();



        $hirePdf = PDF::loadView('hirePdf',[

            'hireFormData' => $hireFormData,//

            'hireFormDataJoinBudget' => $hireFormDataJoinBudget,//
            'hireFormDataJoinPlanBudget' => $hireFormDataJoinPlanBudget,//
            'hireFormDataJoinPlan' => $hireFormDataJoinPlan,//
            'hireFormDataJoinSubPlan' => $hireFormDataJoinSubPlan,//
            'hireFormDataJoinProject' => $hireFormDataJoinProject,//

            'hireFormDataJoinHeadManI' => $hireFormDataJoinHeadManI,//
            'hireFormDataJoinHeadManII' => $hireFormDataJoinHeadManII,//

            'hireFormDataUser' => $hireFormDataUser,


            'PersonDescReqFormhireData' => $PersonDescReqFormhireData,//
            'PersonReceiveReqFormhireData' => $PersonReceiveReqFormhireData,//
            'MaterialFormhireData' => $MaterialFormhireData//


        
        ]);

        return $hirePdf->stream('HireRequestFormID'.$id.'.pdf');




        /******************************************************************/

    }


}
