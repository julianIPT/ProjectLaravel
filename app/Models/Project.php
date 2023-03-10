<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // use HasFactory;


    // table projects
    protected $table = 'projects';
    protected $primaryKey = 'project_id';

    public $timestamps = false; //cuando le digo a timestamps sea igual a false le estoy diciendo que en la base de datos no tengo o no tome created_at, updated_at

    // la linea comentada sirve para darle un alias a esas variables que son las ultimas de esta tabla
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';

    // protected $hidden = ['name'];

    // protected $attributes = [
    //     'name' => 'hola',
    //     'execution_date'=>'22/10/1999',
    //     'is_active'=>'1',
    //     'created_at'=>'',
    //     'updated_at'=>''
    // ];

    // $projects = Project::where('is_active', 0)
    //             ->orderBy('name', 'asc')
    //             ->take(2)
    //             ->get();

                // Project::all();

                protected $attributes = [
                    'name' => 'hola',
                ];

    // Podemos tener Scopes locales, este lo agregamos en forma de una función dentro del modelo y lo anexamos directamente a la consulta cuando se vaya a realizar, por ejemplo:
    // public function scopeActive($query) {
    //     return $query->where('is_active', 1);
    // }

}
