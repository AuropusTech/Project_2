<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Plan extends Model
{

    use HasFactory;
    use Sortable;

    protected $table = 'plans';

    protected $primaryKey = 'planCode';

    protected $fillable = [

        'planCode',
        'planName',
        'planBudgetId',
        'deptId',

        
    ];
}
