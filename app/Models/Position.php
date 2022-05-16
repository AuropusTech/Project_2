<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Position extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'positions';

    protected $primaryKey = 'id';

    protected $fillable = [
        
        'positionType'

    ];

}
