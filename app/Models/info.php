<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class info extends Model
{
    use HasFactory;
    
    use Sortable;

    protected $table = 'infos';

    protected $primaryKey = 'id';

    protected $fillable = [

        'infoName',
        'infoContent',
        'infoAuthorName',
        
    ];


}
