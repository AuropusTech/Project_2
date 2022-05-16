<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class planBudget extends Model
{
    use HasFactory;
    use Sortable;


    protected $table = 'plan_budgets';

    protected $primaryKey = 'planBudgetCode';

    protected $fillable = [

        'planBudgetCode',
        'planBudgetName',
        'budgetId',
        
    ];
}
