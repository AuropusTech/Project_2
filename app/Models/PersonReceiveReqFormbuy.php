<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class PersonReceiveReqFormbuy extends Model
{
    use HasFactory;
    use Sortable;


    protected $table = 'person_receive_req_formbuys';

    protected $primaryKey = 'id';

    protected $fillable = [

        'buyListReceiveUserId',
        'buyListReceiveType',
        'req_formbuy_id',


    ];

    

    public function ReqFormbuys(){

        return $this->belongsTo(ReqFormbuy::class);
        
    }
}
