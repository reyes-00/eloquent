<?php

use App\Models\User;
use App\Models\Grado;
use App\Models\Tutor;
use App\Models\Alumno;
use App\Models\Destino;
use App\Models\Aspirante;
use App\Models\DetalleGradoGrupo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function(){
    // $usuario = User::where('activo',1)
    // ->where('id_colaborador', '>',13)
    // ->orderBy('name', 'ASC')
    // ->get();

    $resultados = Tutor::all();

    foreach($resultados  as $result){
        $result->telefono_trabajo_tutor = str_replace('+52 ','',$result->telefono_trabajo_tutor);
        $result->save();
    }
    // Traerme millones de datos primera manera
    // Tutor::chunk(10, function($usuarios){
    //     foreach ($usuarios as $usuario){
    //         $usuario->celular_tutor = '+52 ' . $usuario->celular_tutor;
    //         $usuario->save();
    //     }
    // }); 

    // Traerme millones de datos segunda manera

    // foreach(Tutor::cursor() as $tutor){
    //     $tutor->telefono_trabajo_tutor = '+52 '. $tutor->telefono_trabajo_tutor;
    //     $tutor->save();
    // }

    // $numeros = range(1,100000);


    /**Subconsultas  */

    // $usuarios = User::select('id_tutor', 'tipo_user')
    // ->where('tipo_user',2)
    // ->addSelect([
    //     'nombre_tutor' => Tutor::select('nombre_tutor')
    //         ->whereColumn('id_tutor_padre', 'id_tutor')
    // ])
    // ->orderBy('nombre_tutor', 'desc')
    // ->get();

    // $alumnos = Alumno::select('id_alumnos')
    // ->where('alumnos.activo',1)
    // ->where('alumnos.id_plantel',1)
    // ->addSelect([
    //     'nombre_general' => Aspirante::select('nombre_general')
    //         ->whereColumn('aspirantes.id_aspirante', 'alumnos.id_aspirante')
    // ])
    // ->addSelect([
    //     'id_detalle_grado_grupo' => DetalleGradoGrupo::select('id_detalle_grupo_grado')
    //         ->whereColumn('detalle_grado_grupos.id_detalle_grupo_grado', 'alumnos.id_detalle_grupo_grado')
    // ])
    // ->addSelect([
    //     'nombre' => Grado::select('nombre')->whereColumn('grados.id_grado', 'detalle_grado_grupos.id_grado')
    // ])
    // ->get();

    // Buyscar el primer usuario en una consulta
    // $usuarios = User::firstWhere('activo' , false);
    // $usuarios = User::find(10);
    // $usuarios = User::findOr(10, function(){
    //     return 'EL registro no existe';
    // });
    // $usuarios = User::where('activo','>',1)->firstOrFail();

    // Buscar y si no encuentra crearlo
    $grado = Grado::firstOrCreate([
        'nombre' => 'LARAVEL'
    ]);

    // Suma y Count
    $usuarios = User::where('activo',1)->count();
    $usuarios = User::where('activo',1)->sum('activo');
    
    return $usuarios;
});