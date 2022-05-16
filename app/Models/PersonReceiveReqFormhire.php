<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class PersonReceiveReqFormhire extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'person_receive_req_formhires';

    protected $primaryKey = 'id';

    protected $fillable = [

        'HireListReceiveUserId',
        'HireListReceiveType',
        'req_formhire_id',

    ];

    

    public function ReqFormhires(){

        return $this->belongsTo(ReqFormhire::class);
        
    }
}
