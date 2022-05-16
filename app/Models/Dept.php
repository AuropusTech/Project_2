<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Dept extends Model
{

    use HasFactory;
    use Sortable;

    protected $table = 'depts';

    protected $primaryKey = 'id';

    protected $fillable = [

        'factCode',
        'deptName',

        
    ];


    public function Facts(){

        return $this->hasOne(Fact::class);
        
    }

    public function Users(){

        return $this->hasMany(Dept::class);
        
    }
}
