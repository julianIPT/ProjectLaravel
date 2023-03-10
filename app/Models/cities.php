<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
    // use HasFactory;

    protected $table = 'cities';
    protected $primaryKey = 'city_id';

    public $timestamps = false;

    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';

    // protected $attributes = [
    //     'name' => 'holacities',
    //     'execution_date'=>'25/10/1999',
    //     'is_active'=>'1',
    //     'created_at'=>'',
    //     'updated_at'=>''
    // ];
    protected $attributes = [
        'name' => 'hola',
    ];
}
