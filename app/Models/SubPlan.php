<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class SubPlan extends Model
{
    use HasFactory;
    use Sortable;


    protected $table = 'sub_plans';

    protected $primaryKey = 'id';

    protected $fillable = [

        'subPlanCode',
        'subPlanName',
        'planId',
        'deptId',

    ];
}
