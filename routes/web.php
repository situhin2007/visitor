<?php

use App\Http\Controllers\backend\PreVisitorController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\DoctorController;
use App\Http\Controllers\backend\IDCardGenerateController;
use App\Http\Controllers\backend\PatientController;
use App\Http\Controllers\backend\VisitorController;
use App\Http\Controllers\backend\VisitorGetPassController;

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

//Route::get('/', function () {
//    return view('home_landing_page');
//});

Route::get('/',[FrontendController::class,'index']);
Route::get('pre-visitor',[FrontendController::class,'preVisitor']);
Route::get('visitor-registration',[FrontendController::class,'visitorRegistration']);


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //visitors routes
    Route::get('visitor/index', [VisitorController::class, 'index']);
    Route::get('visitor/create', [VisitorController::class, 'create']);
    Route::post('visitor/store', [VisitorController::class, 'store']);
    Route::get('visitor/edit/{id}', [VisitorController::class, 'edit']);
    Route::post('visitor/update/{id}', [VisitorController::class, 'update']);
    Route::get('visitor/destroy/{id}', [VisitorController::class, 'destroy']);
    Route::get('reference_category_select_data', [VisitorController::class, 'reference_category_select_data']);
    Route::get('reference_id_select_data', [VisitorController::class, 'reference_id_select_data']);

    Route::get('visitor/history', [VisitorController::class, 'visitorHistory']);
    Route::get('visitor/details/{id}', [VisitorController::class, 'visitorDetails'])->name('visit.details');

    //patient routes
    Route::get('patient/index', [PatientController::class, 'index']);
    Route::get('patient/create', [PatientController::class, 'create']);
    Route::post('patient/store', [PatientController::class, 'store']);
    Route::get('patient/edit/{id}', [PatientController::class, 'edit']);
    Route::post('patient/update/{id}', [PatientController::class, 'update']);
    Route::get('patient/destroy/{id}', [PatientController::class, 'destroy']);
    Route::get('patient-data-show-filter', [PatientController::class, 'patientDataShowFilter']);
    Route::get('get-pass-patient', [PatientController::class, 'getPassPatient'])->name('getPassPatient');

    //id card generate routes
    Route::get('id_card_generate/index', [IDCardGenerateController::class, 'index']);
    Route::get('id_card_generate/create', [IDCardGenerateController::class, 'create']);
    Route::post('id_card_generate/store', [IDCardGenerateController::class, 'store']);
    Route::get('id_card_generate/edit/{id}', [IDCardGenerateController::class, 'edit']);
    Route::post('id_card_generate/update/{id}', [IDCardGenerateController::class, 'update']);
    Route::get('id_card_generate/destroy/{id}', [IDCardGenerateController::class, 'destroy']);

    // doctor list
    Route::get('doctor/index', [DoctorController::class, 'index']);
    Route::get('doctor/create', [DoctorController::class, 'create']);
    Route::post('doctor/store', [DoctorController::class, 'store']);
    Route::get('doctor/edit/{id}', [DoctorController::class, 'edit']);
    Route::post('doctor/update/{id}', [DoctorController::class, 'update']);
    Route::get('doctor/destroy/{id}', [DoctorController::class, 'destroy']);

    // pre visitor registration and visit list
    Route::get('pre_visitor_registration/index', [PreVisitorController::class, 'preVisitorRegistration']);
    Route::get('pre_visitor_request_list/index', [PreVisitorController::class, 'preVisitorRequestList']);

    Route::post('pre_visitor_registration/store', [PreVisitorController::class, 'preVisitorRegistrationStore'])->name('preVisitorRegistrationStore');


    // get pass routes
    Route::get('getPassDataStore', [VisitorGetPassController::class, 'getPassDataStore'])->name('getPassDataStore');
    Route::get('getPassChangeStatus/{id}', [VisitorGetPassController::class, 'getPassChangeStatus'])->name('getPassChangeStatus');

});
