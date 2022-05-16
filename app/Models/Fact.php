<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Fact extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'facts';

    protected $primaryKey = 'id';

    protected $fillable = [

        'factName',

    ];

    public function Depts(){

        return $this->belongsTo(Dept::class);
        
    }



}
