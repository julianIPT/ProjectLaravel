<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;


class ProjectController extends Controller
{
    // Si implementamos esta función y la llamamos en ProjectController justo cuando estamos haciendo una consulta de datos, nos agregará por debajo la condición de que sólo traerá registros cuyo valor en el campo is_active sea igual a 1.
    // Project::active()->get();

    public function getAllProjects(){
        $projects = Project::take(10)->get();
        return $projects;
    }

    // para insertar los datos
    public function insertProject() {
        $project = new Project;
        $project->city_id = 1;
        $project->company_id = 1;
        $project->user_id = 2;
        $project->name = 'ejemplo tres';
        $project->execution_date = '2020-03-4';
        $project->is_active = 1;
        $project->save();

        return "Registro Guardado";
    }
// actualizar por id el campo de name o nombre del proyecto y se guarda con save
    public function updateProject() {
        $project = Project::find(2);
        $project->name = 'Proyecto de tecnología';
        $project->save();

        return "Actualizado";
    }

// borrar un projecto con el id que sea mayor a 12 los borrara todos los que sean mayor que 12

    public function deleteProject() {
        $project = Project::where('project_id', '>', 12)->delete();
        return "Registros eliminados";
    }
// eliminar los 10 primeros registros de la tabla projects
    public function deleteFirstTenProject()
    {
        $project = Project::take(10)->delete();
        return "Primeros 10 Registros eliminados";
    }



    // Podemos actualizar registros en bloques que cumplan condiciones específicas de acuerdo a sus campos en la base de datos, por ejemplo, si quisiéramos actualizar la fecha de ejecución de todos los proyectos que estén activos y que además tengan el id de ciudad igual a 4, tendríamos algo así:

    // public function inactiveProject()
    // {
    //     Project::where('is_active', 0)
    //     ->update(['name' => 'I am desactivated']);

    //     return "Actualizado";
    // }
    // ejemplo a que cambies el nombre de todos los proyectos inactivos en la tabla de projects.

    // public function updateProjectwtihconditional(){

    //     // Cambiando el nombre a todos los proyectos inactivos (is_active === 0)
    //     Project::where('is_active', '=', 0)
    //             ->update(['name' => "Proyecto inactivo"]);

    //     return "Proyectos Actualizado";
    //   }

    // si la data es de un formulario
    // public function insertProject(Request $request) {
    //     $project = new Project;
    //     $project->city_id = $request->cityId;
    //     $project->company_id = $request->companyId;
    //     $project->user_id = $request->userId;
    //     $project->name = $request->name;
    //     $project->execution_date = $request->executionDate;
    //     $project->is_active = $request->isActive;
    //     $project->save();
    // }

// Una forma mucho más fácil, más ordenada y más legible de insertar datos con Eloquent es usando la función “create” del modelo:
//     $project = Project::create([
//         "city_id" => 1,
//         "company_id" => 1,
//         "user_id" => 1,
//         "name" => 'Nombre del proyecto',
//         "execution_date" => '2020-04-30',
//         "is_active" => 1
// ]);
// Así queda el método si deseamos actualizar desde un formulario:

//     public function updateProject(Request $request, $id) {
//         $project = Project::findOrFail($id);;
//         $project->city_id = $request->cityId;
//         $project->company_id = $request->companyId;
//         $project->user_id = $request->userId;
//         $project->name = $request->name;
//         $project->execution_date = $request->executionDate;
//         $project->is_active = $request->isActive;
//         $project->save();

//         return "Actualizado";
//     }

// Con esto basta usar un array asociativo para hacer la inserción, y es un método más seguro, pues para que esa función pueda funcionar debes ir a tu modelo y especificar un atributo llamado $fillable indicando qué campos quieres que puedan ser insertables, si tratas de insertar un campo que NO definiste como insertable en $fillable devolverá un error, para definir $fillable, debes ir a tu modelo y agregar un array simple con los campos que son insertables:

//     protected $fillable = ["city_id", "company_id", "user_id", "name", "execution_date", "is_active"];
    // Project::chunk(200, function ($projects) { //Traer del modelo Project (que traduce a la tabla projects) bloques de 200 registros y guardarlos temporalmente en la variable $projects como un array, luego recorre este array con los 200 registros y por cada uno ejecuta lo que está dentro del foreach, repite esta acción hasta que lleguen todos los registros de Project.
    //     foreach ($projects as $project) {
    //         //Aquí escribimos lo que haremos con los datos (operar, modificar, etc)
    //     }
    // });

    // $projects = Project::where('is_active', 0)
    //             ->orderBy('name', 'asc')
    //             ->take(2)
    //             ->get();

}
