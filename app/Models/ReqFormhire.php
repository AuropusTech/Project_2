<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class ReqFormhire extends Model
{
    
    use HasFactory; 
    use Sortable;

    protected $table = 'req_formhires';

    protected $primaryKey = 'id';

    protected $fillable = [

        'UserId',
        'StatusId',
        'HireFormIdDept',
        
        'HireFormIdNo',
        'HireFormDate',
        'HireFormDateD',
        'HireFormDateM',
        'HireFormDateY',
        'HireFormDept',
        'HireFormOrder',
        'HireFormOrderNo',
        'HirePurpose',
        'HireBudgetYear',
        'HireReceive',
        'HireBookNoDept',
        'HireBookNo',
        'HireBookDateD',
        'HireBookDateM',
        'HireBookDateY',
        'HireFormActNo',
        'HireFormActName',
        'HeadmanIId',
        'HeadmanIPosition',
        'HeadmanIIId',
        'HeadmanIIPosition',
        'HireDescFormReason',
        'chkbxI',
        'chkbxII',
        'chkbxIII',
        'chkbxIIIBookNo',
        'chkbxIIIDate',
        'HireFormPriceSrc',
        'HireFormBudget',
        'HireFormUseDate',
        'HireFormCriteria',


        'BudgetId',
        'BudgetPlanId',
        'PlanId',
        'SubPlanId',
        'ProjectId',


    ];

    public function PersonDescReqFormhires(){

        return $this->hasMany(PersonDescReqFormhire::class);
        
    }

    public function PersonReceiveReqFormhires(){

        return $this->hasMany(PersonReceiveReqFormhire::class);
        
    }

    public function MaterialFormhires(){

        return $this->hasMany(MaterialFormhire::class);
        
    }
}
