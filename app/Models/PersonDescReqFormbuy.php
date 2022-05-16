<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class PersonDescReqFormbuy extends Model
{
    use HasFactory;
    use Sortable;


    protected $table = 'person_desc_req_formbuys';

    protected $primaryKey = 'id';

    protected $fillable = [

        'buyListDescUserId',
        'buyListDescType',
        'req_formbuy_id',

    ];

    

    public function ReqFormbuys(){

        return $this->belongsTo(ReqFormbuy::class);
        
    }
}
