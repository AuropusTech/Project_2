<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class BudgetType extends Model
{
    use HasFactory;
    use Sortable;


    protected $table = 'budget_types';

    protected $primaryKey = 'id';

    protected $fillable = [

        'budgetType',
    ];


}

