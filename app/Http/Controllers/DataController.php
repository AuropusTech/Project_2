<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response as FacadeResponse;

use App\Models\User;

use App\Models\BudgetType;
use App\Models\Dept;
use App\Models\Fact;
use App\Models\Plan;
use App\Models\planBudget;

use App\Models\SubPlan;

use App\Models\Project;

use App\Models\Status;
use App\Models\Position;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;



class DataController extends Controller
{
    //-------------------------------------------------------------- Data Management ---------------------------------------------------------------------//

    //===================== + Facuty & Dept + =====================//

    //--------> Faculty
    public function factDataPage()
    {

        $facts = Fact::sortable()->paginate(10);

        return view('admin.dataManagement.factData',[
            'facts' => $facts
        ]);
    }

    
    //--------> Dept
    public function deptDataPage()
    {

        //$depts = Dept::sortable()->paginate(10);

        $depts = Fact::join('depts', 'depts.factCode', '=', 'facts.id')->sortable()->paginate(10);

        return view('admin.dataManagement.deptData',[
            'depts' => $depts
        ]);

        //return $depts;

    }






    //-------------------------------------------------------------- Data About ---------------------------------------------------------------------//

    //--------> BudgetType
    public function budgetDataPage()
    {

        $budgets = BudgetType::sortable()->paginate(10);

        return view('admin.dataManagement.budgetData',[
            'budgets' => $budgets
        ]);


    }

    //--------> planBudgets
    public function planBudgetDataPage()
    {

        //$planBudgets = planBudget::sortable()->paginate(10);      
        
        $planBudgets = BudgetType::join('plan_budgets', 'plan_budgets.budgetTypeId', '=', 'budget_types.id')->sortable()->paginate(10);        

        return view('admin.dataManagement.planBudgetData',[
            'planBudgets' => $planBudgets
        ]);

        /*return $planBudgets;*/


    }



    //--------> plan
    public function planDataPage()
    {

        //$plans = Plan::sortable()->paginate(10);

        $plans = planBudget::join('plans', 'plans.planBudgetId', '=', 'plan_budgets.planBudgetCode')->sortable()->paginate(10);

        return view('admin.dataManagement.planData',[
            'plans' => $plans
        ]);


    }

    //--------> subPlan
    public function subPlanDataPage()
    {

        //$subPlans = SubPlan::sortable()->paginate(10);


        $subPlans = Dept::join('sub_plans', 'sub_plans.deptId', '=', 'depts.id')->sortable()->paginate(10);

        return view('admin.dataManagement.subPlanData',[
            'subPlans' => $subPlans
        ]);


    }


    //--------> Project
    public function projectDataPage()
    {

        //$projects = Project::sortable()->paginate(10);

       
        $projects = Dept::join('projects', 'projects.deptId', '=', 'depts.id')->sortable()->paginate(10);


        return view('admin.dataManagement.projectData' ,[

            'projects' => $projects

        ]);


    }



    //--------> Status
    public function statusDataPage()
    {

        $statuses = Status::sortable()->paginate(10);

        return view('admin.dataManagement.statusData' ,[
            'statuses' => $statuses
        ]);


    }




    //--------> Position

    public function positionDataPage()
    {

        $positions = Position::sortable()->paginate(10);

        return view('admin.dataManagement.positionData' ,[
            'positions' => $positions
        ]);
    }


    
    //-------------------------------------------------------------- Data Management Insert Page ---------------------------------------------------------------------//

    //===================== + Facuty & Dept + =====================//

    //--------> Faculty
    public function factDataInsert()
    {
        return view('admin.dataManagement.insert.factDataInsert');
    }


    //--------> Dept
    public function deptDataInsert()
    {
        $facts = Fact::all();

        return view('admin.dataManagement.insert.deptDataInsert',[

            'facts' => $facts

        ]);
    }

















    //===================== + Data About + =====================//

    //--------> BudgetType
    public function budgetDataInsert()
    {
        return view('admin.dataManagement.insert.budgetDataInsert');
    }


    

    //--------> planBudget
    public function planBudgetDataInsert()
    {

        $budgets = BudgetType::all();

        return view('admin.dataManagement.insert.planBudgetDataInsert',[

            'budgets' => $budgets

        ]);

    }



    //--------> plan
    public function planDataInsert()
    {

        $planBudgets = planBudget::all();
        $depts = Dept::all();

        return view('admin.dataManagement.insert.planDataInsert',[

            'planBudgets' => $planBudgets,
            'depts' => $depts

        ]);
    
    }


    //--------> subPlan
    public function subPlanDataInsert()
    {

        $plans = Plan::all();
        $depts = Dept::all();

        return view('admin.dataManagement.insert.subPlanDataInsert',[

            'plans' => $plans,
            'depts' => $depts

        ]);
    
    }


    //--------> Project
    public function projectDataInsert()
    {

        $subPlans = SubPlan::all();
        $depts = Dept::all();

        return view('admin.dataManagement.insert.projectDataInsert',[

            'subPlans' => $subPlans,
            'depts' => $depts

        ]);
    }


    //--------> Status
    public function statusDataInsert()
    {
        return view('admin.dataManagement.insert.statusDataInsert');
    }


    //--------> Position
    public function positionDataInsert()
    {
        return view('admin.dataManagement.insert.positionDataInsert');
    }







    //-------------------------------------------------------------- Data Management Edit Page ---------------------------------------------------------------------//

    //===================== + Facuty & Dept + =====================//

    //--------> Faculty
    public function factDataEdit($id)
    {

        $facts = Fact::find($id);

        return view('admin.dataManagement.edit.factDataEdit',[
        
            'facts' => $facts

        ]);

    }


    public function factDataUpdate(Request $request,$id)
    {
        $facts = Fact::find($id);

        $facts->factName = $request->factName;

        echo $facts->save();

        return redirect('/factData');
    }





    //--------> Dept
    public function deptDataEdit($id)
    {
        $facts = Fact::all();
        $depts = Dept::find($id);

        return view('admin.dataManagement.edit.deptDataEdit',[
        
            'depts' => $depts,
            'facts' => $facts

        ]);

    }

    public function deptDataUpdate(Request $request,$id)
    {
        $depts = Dept::find($id);

        $depts->deptName = $request->deptName;
        $depts->factCode = $request->factCode;

        echo $depts->save();

        return redirect('/deptData');
    }



    //===================== + Data About + =====================//

    //--------> BudgetType
    public function budgetDataEdit($id)
    {

        $budgets = BudgetType::find($id);

        return view('admin.dataManagement.edit.budgetDataEdit',[
        
            'budgets' => $budgets

        ]);

    }

    
    public function budgetDataUpdate(Request $request,$id)
    {
        $budgets = BudgetType::find($id);

        $budgets->budgetType = $request->budgetType;

        echo $budgets->save();

        return redirect('/budgetData');
    }


    //--------> planBudget
    public function planBudgetDataEdit($id)
    {

        $budgets = BudgetType::all();
        $planBudgets = planBudget::find($id);

        return view('admin.dataManagement.edit.planBudgetDataEdit',[
        
            'budgets' => $budgets,
            'planBudgets' => $planBudgets

        ]);

    }

    public function planBudgetDataUpdate(Request $request,$id)
    {
        $planBudgets = planBudget::find($id);

        $planBudgets->planBudgetCode = $request->planBudgetCode;
        $planBudgets->planBudgetName = $request->planBudgetName;
        $planBudgets->budgetTypeId = $request->budgetTypeId;

        echo $planBudgets->save();

        return redirect('/planBudgetData');
    }






    //--------> Plan
    public function planDataEdit($id)
    {

        $planBudgets = planBudget::all();
        $depts = Dept::all();
        $plans = Plan::find($id);

        return view('admin.dataManagement.edit.planDataEdit',[
        
            'plans' => $plans,
            'depts' => $depts,
            'planBudgets' => $planBudgets

        ]);

    }

    public function planDataUpdate(Request $request,$id)
    {
        $plans = Plan::find($id);


        $plans->planCode = $request->planCode;
        $plans->planName = $request->planName;
        $plans->planBudgetId = $request->planBudgetId;
        $plans->deptId = $request->deptId;

        echo $plans->save();

        return redirect('/planData');
    }



    //--------> subPlan
    public function subPlanDataEdit($id)
    {

        $plans = Plan::all();
        $depts = Dept::all();
        $subPlans = SubPlan::find($id);

        return view('admin.dataManagement.edit.subPlanDataEdit',[
        
            'plans' => $plans,
            'depts' => $depts,
            'subPlans' => $subPlans

        ]);

    }

    public function subPlanDataUpdate(Request $request,$id)
    {
        $subPlans = SubPlan::find($id);

        $subPlans->subPlanCode = $request->subPlanCode;
        $subPlans->subPlanName = $request->subPlanName;
        $subPlans->planId = $request->planId;
        $subPlans->deptId = $request->deptId;
        
        echo $subPlans->save();

        return redirect('/subPlanData');
    }





    //--------> Project
    public function projectDataEdit($id)
    {

        
        $subPlans = SubPlan::all();
        $depts = Dept::all();
        
        $projects = Project::find($id);



        return view('admin.dataManagement.edit.projectDataEdit',[
        
            'projects' => $projects,
            'depts' => $depts,
            'subPlans' => $subPlans

        ]);


    }
    

    public function projectDataUpdate(Request $request,$id)
    {
        $projects = Project::find($id);

        $projects->projectName = $request->projectName;
        $projects->subPlanId = $request->subPlanId;
        $projects->deptId = $request->deptId;

        echo $projects->save();

        return redirect('/projectData');
    }




    //-------------------------------------------------------------- Data Management CRUD Controller ---------------------------------------------------------------------//


    //--------> Faculty

    public function factDataCreate(Request $request)
    {

        $factName = $request->factName;                                                

        $CreateFaculty = new Fact;

        $CreateFaculty-> factName = $factName;  

        $CreateFaculty->save();

        return redirect('/factData');
    }


    public function factDataDelete($id)
    {

        $DeleteFaculty = Fact::find($id);
        $DeleteFaculty->delete();

        return redirect('/factData');
    }

    

    //--------> Dept

    public function deptDataCreate(Request $request)
    {

        $deptName = $request->deptName;                                                
        $factCode = $request->factCode; 

        $CreateDept = new Dept;

        $CreateDept -> deptName = $deptName;  
        $CreateDept -> factCode = $factCode;  

        $CreateDept->save();

        return redirect('/deptData');
    }


    public function deptDataDelete($id)
    {

        $DeleteDept = Dept::find($id);
        $DeleteDept->delete();

        return redirect('/deptData');
    }


    //--------> BudgetType

    public function budgetDataCreate(Request $request)
    {

        $budgetType = $request->budgetType;                                                

        $CreateBudget = new BudgetType;
        $CreateBudget -> budgetType = $budgetType;  

        $CreateBudget->save();

        return redirect('/budgetData');
    }


    public function budgetDataDelete($id)
    {

        $DeleteBudget = BudgetType::find($id);
        $DeleteBudget->delete();

        return redirect('/budgetData');
    }


    

    //--------> planBudget

    public function planBudgetDataCreate(Request $request)
    {

        $planBudgetCode = $request->planBudgetCode;
        $planBudgetName = $request->planBudgetName;
        $budgetTypeId = $request->budgetTypeId;                                                  
                                                  

        $CreatePlanBudget = new planBudget;
        $CreatePlanBudget -> planBudgetCode = $planBudgetCode;  
        $CreatePlanBudget -> planBudgetName = $planBudgetName;
        $CreatePlanBudget -> budgetTypeId = $budgetTypeId;  
 

        $CreatePlanBudget->save();

        return redirect('/planBudgetData');
    }


    public function planBudgetDataDelete($id)
    {

        $DeletePlanBudget = planBudget::find($id);
        $DeletePlanBudget->delete();

        return redirect('/planBudgetData');
    }




    //--------> Plan

    public function planDataCreate(Request $request)
    {

        $planCode = $request->planCode;
        $planName = $request->planName;
        $planBudgetId = $request->planBudgetId;
        $deptId = $request->deptId;          


        $CreatePlan = new Plan;

        $CreatePlan -> planCode = $planCode;  
        $CreatePlan -> planName = $planName;  
        $CreatePlan -> planBudgetId = $planBudgetId;
        $CreatePlan -> deptId = $deptId;   

        $CreatePlan->save();

        return redirect('/planData');
    }


    public function planDataDelete($id)
    {

        $DeletePlan = Plan::find($id);
        $DeletePlan->delete();

        return redirect('/planData');
    }


    //--------> subPlan

    public function subPlanDataCreate(Request $request)
    {

        $subPlanCode = $request->subPlanCode;
        $subPlanName = $request->subPlanName;
        $planId = $request->planId;      
        $deptId = $request->deptId;     

        


        $CreateSubPlan = new SubPlan;

        $CreateSubPlan -> subPlanCode = $subPlanCode;  
        $CreateSubPlan -> subPlanName = $subPlanName;  
        $CreateSubPlan -> planId = $planId;
        $CreateSubPlan -> deptId = $deptId;  

        $CreateSubPlan->save();

        return redirect('/subPlanData');
    }


    public function subPlanDataDelete($id)
    {

        $DeleteSubPlan = SubPlan::find($id);
        $DeleteSubPlan->delete();

        return redirect('/subPlanData');
    }










    //--------> Project

    Public function projectDataCreate(Request $request)
    {
        $projectName = $request->projectName; 
        $subPlanId = $request->subPlanId;
        $deptId = $request->deptId;                                               

        $CreateProject = new Project;

        $CreateProject -> projectName = $projectName;  
        $CreateProject -> subPlanId = $subPlanId;
        $CreateProject -> deptId = $deptId;  

        $CreateProject->save();

        return redirect('/projectData');
    }


    public function projectDataDelete($id)
    {

        $DeleteProject = Project::find($id);
        $DeleteProject->delete();

        return redirect('/projectData');
    }


    //--------> Status

    Public function statusDataCreate(Request $request)
    {

        $statusName = $request->statusName;                                                

        $CreateStatus = new Status;
        $CreateStatus -> statusName = $statusName;  

        $CreateStatus->save();

        return redirect('/statusData');
    }


    public function statusDataDelete($id)
    {

        $DeleteStatus = Status::find($id);
        $DeleteStatus->delete();

        return redirect('/statusData');
    }


    //--------> Position

    Public function positionDataCreate(Request $request)
    {

        $positionType = $request->positionType;                                                

        $CreatePosition = new Position;
        $CreatePosition -> positionType = $positionType;  

        $CreatePosition->save();

        return redirect('/positionData');
    }


    public function positionDataDelete($id)
    {

        $DeletePosition = Position::find($id);
        $DeletePosition->delete();

        return redirect('/positionData');
    }




}
