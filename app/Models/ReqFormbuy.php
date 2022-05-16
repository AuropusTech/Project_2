<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class ReqFormbuy extends Model
{
    use HasFactory;
    use Sortable;


    protected $table = 'req_formbuys';

    protected $primaryKey = 'id';

    protected $fillable = [

        'UserId',
        'StatusId',
        'BuyFormIdDept',

        'BuyFormIdNo',
        'BuyFormDateD',
        'BuyFormDateM',
        'BuyFormDateY',
        'BuyFormDept',


        'BuyPurpose',
        'buyBudgetYear',
        'buyReceive',
        'BuyBookNoDept',
        'BuyBookNo',
        'buyBookDateD',
        'buyBookDateM',
        'buyBookDateY',
        'buyFormActNo',
        'buyFormActName',

        
        'BudgetId',
        'BudgetPlanId',
        'PlanId',
        'SubPlanId',
        'ProjectId',


        'HeadmanIId',
        'HeadmanIPosition',
        'HeadmanIIId',
        'HeadmanIIPosition',

 

        'BuyChkI',
        'BuyChkIDesc',
        'BuyChkII',
        'BuyChkIIDesc',
        'BuyChkIII',
        'BuyChkIIIDesc',

        'BuyMatNo',
        'BuyMatDate',
        
        'BuyFormPriceSrc',
        'BuyFormUseDate',
        'BuyFormCriteria',

    ];

    public function PersonDescReqFormbuys(){

        return $this->hasMany(PersonDescReqFormbuy::class);
        
    }

    public function PersonReceiveReqFormbuys(){

        return $this->hasMany(PersonReceiveReqFormbuy::class);
        
    }

    public function MaterialFormbuys(){

        return $this->hasMany(MaterialFormbuy::class);
        
    }

    


}
