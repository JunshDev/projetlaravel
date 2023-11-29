<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Etudiantcontroller;

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

Route::get('/update-etudiant/{id}', [Etudiantcontroller::class, 'update_etudiant']);
Route::post('/update/traitement', [Etudiantcontroller::class, 'update_etudiant_traitement']);
Route::get('/etudiant', [Etudiantcontroller::class, 'liste_etudiant']);
Route::get('/ajouter', [Etudiantcontroller::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement', [Etudiantcontroller::class, 'ajouter_etudiant_traitement']);



