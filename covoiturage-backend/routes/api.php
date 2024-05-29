<?php
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\AdresseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route pour recuperer tous les trajets
Route::get('trajets', [TrajetController::class, 'getAllTrajets']);

// Route pour récupérer un trajet par son ID
Route::get('/trajets/{id}', [TrajetController::class, 'getTrajet']);

// Route pour mettre à jour un trajet par son ID
Route::put('/trajets/{id}', [TrajetController::class, 'updateTrajet']);

// Route pour la création d'un trajet
Route::post('/trajets', [TrajetController::class, 'createTrajet']);

// Route pour recuperer tous les adresses Base Aerienne
Route::get('/adresses/base-aerienne', [AdresseController::class, 'GetAllBaseAerienne']);

//  Route pour recuperer tous les adresses Domicile
Route::get('/adresses/domicile', [AdresseController::class, 'GetAllDomicile']);

Route::get('/trajets/conducteur}', [TrajetController::class, 'getAllTrajetsConducteurs']);

Route::get('/trajets/passager', [TrajetController::class, 'getAllTrajetsPassagers']);


