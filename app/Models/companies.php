<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    // use HasFactory;

    protected $table = 'companies';
    protected $primaryKey = 'company_id';


    public $timestamps = false;

    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';

    // protected $attributes = [
    //     'name' => 'holacompanies',
    //     'execution_date'=>'24/10/1999',
    //     'is_active'=>'1',
    //     'created_at'=>'',
    //     'updated_at'=>''
    // ];
    protected $attributes = [
        'name' => 'hola',
    ];
}
