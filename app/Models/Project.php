<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Project extends Model
{

    use HasFactory;
    use Sortable;

    protected $table = 'projects';

    protected $primaryKey = 'id';

    protected $fillable = [

        'projectName',
        'subPlanId',
        'projectName',
        'deptId',
        
    ];
}
