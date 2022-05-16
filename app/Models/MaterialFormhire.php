<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class MaterialFormhire extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'material_formhires';

    protected $primaryKey = 'id';

    protected $fillable = [

        'hireScopeName',
        'hireScopeDesc',
        'req_formhire_id',

    ];

    

    public function ReqFormhires(){

        return $this->belongsTo(ReqFormhire::class);
        
    }
}
