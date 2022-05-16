<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Status extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'statuses';

    protected $primaryKey = 'id';

    protected $fillable = [
        
        'statusName'

    ];
}
