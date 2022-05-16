<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class MaterialFormbuy extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'material_formbuys';

    protected $primaryKey = 'id';

    protected $fillable = [

        'materialName',
        'materialDesc',
        'materialCount',
        'materialPrice',
        'materialBudget',
        'req_formbuy_id',

    ];

    

    public function ReqFormbuys(){

        return $this->belongsTo(ReqFormbuy::class);
        
    }


}

