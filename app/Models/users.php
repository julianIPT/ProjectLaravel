<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    // use HasFactory;
    //table projects
    protected $table = 'users';
    protected $primaryKey = 'user_id';

    public $timestamps = false;

    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';


    // protected $attributes = [
    //     'name' => 'holausers',
    //     'execution_date'=>'23/10/1999',
    //     'is_active'=>'1',
    //     'created_at'=>'',
    //     'updated_at'=>''
    // ];

    protected $attributes = [
        'name' => 'hola',
    ];


}
