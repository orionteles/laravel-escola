<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/orion', function () {
    $nomes = [
        ['nome'=>'Orion', 'telefone'=>'123'],
        ['nome'=>'João', 'telefone'=>'456'],
        ['nome'=>'Pedro', 'telefone'=>'789'],
        ['nome'=>'Maria', 'telefone'=>'001'],
    ];
    return $nomes;
});

Route::resource('/curso', 'CursoController');
Route::get('/curso/{id}/destroy', 'CursoController@destroy');

Route::resource('/disciplina', 'DisciplinaController');
Route::resource('/aluno', 'AlunoController');

Route::get('/aluno/{id}/destroy', 'AlunoController@destroy');
Route::get('/aluno/verificar-email/{email}', 'AlunoController@verificarEmail');



Route::resource('/professor', 'ProfessorController');
Route::resource('/turma', 'TurmaController');

Route::get('/medias', 'MediasController@index');
Route::post('/medias', 'MediasController@calcularMedia');

Route::get('/exercicio2', 'Lista1Controller@exercicio2');
Route::post('/exercicio2', 'Lista1Controller@exercicio2Resposta');

Route::get('/template', 'TemplateController@index');
Route::get('/pagina2', 'TemplateController@pagina2');
Route::get('/pagina3', 'TemplateController@pagina3');

