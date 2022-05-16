<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;

class Headman extends Model
{
    use HasFactory;

    use Sortable;

    protected $table = 'headmen';

    protected $primaryKey = 'id';

    protected $fillable = [
        
        'headmenArticleName',
        'headmenFname',
        'headmenLname',
        'headmenPosition',
        'headmanStatus',

    ];
}

