<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\scontrol;
use App\Http\Controllers\factcontrol;
use App\Http\Controllers\admcontrol;
use App\Http\Controllers\quiz;

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
//student control

    
    

Route::post('/signup',[scontrol::class,'store']);
Route::post('/logins',[scontrol::class,'logins']);
Route::post('/mark',[scontrol::class,'quiz']);
Route::get('/logout',[scontrol::class,'logout']);
//student control

Route::post('/status',[scontrol::class,'status']);



Route::post('/updates',[scontrol::class,'update']);

Route::get('/atmtquiz',[scontrol::class,'atmtquiz']);
Route::get('spedit/{id}',[scontrol::class,'edit']);

//faculty control



Route::post('/addque',[factcontrol::class,'store']);
Route::post('/update',[factcontrol::class,'update']);
Route::post('/fqupdate/{id}',[factcontrol::class,'fqupdate']);

Route::get('edit/{id}',[factcontrol::class,'edit']);
Route::get('fqedit/{id}',[factcontrol::class,'fqedit']);
Route::get('fqdelete/{id}',[factcontrol::class,'fqdelete']);


//quiz control






//admin control


Route::post('/adfact',[admcontrol::class,'store']);

Route::post('/asupdate',[admcontrol::class,'asupdate']);


Route::post('/afupdate',[admcontrol::class,'afupdate']);



Route::get('asedit/{id}',[admcontrol::class,'asedit']);
Route::get('afedit/{id}',[admcontrol::class,'afedit']);
Route::get('asdelete/{id}',[admcontrol::class,'asdelete']);
Route::get('afdelete/{id}',[admcontrol::class,'afdelete']);



Route::group(['middleware'=>['AuthCheck']],function(){
    
    
    Route::get('/',[scontrol::class,'index']);
    Route::get('/login',[scontrol::class,'create']);
    Route::get('/sign',[scontrol::class,'signup']);
    Route::get('/studhome',[scontrol::class,'studhome']);

    

    Route::get('/satmt2quiz',[scontrol::class,'satmt2quiz']);

    Route::get('/sviewresult',[scontrol::class,'viewresult']);
    
   




    Route::get('/facthome',[factcontrol::class,'index']);
Route::get('/addques',[factcontrol::class,'addquestion']);
Route::get('/viewques',[factcontrol::class,'viewquestion']);
Route::get('/fviewresult',[factcontrol::class,'viewresult']);
Route::get('/viewstud',[factcontrol::class,'viewstudent']);





Route::get('/admhome',[admcontrol::class,'index']);
Route::get('/addfact',[admcontrol::class,'create']);
Route::get('/adviewfact',[admcontrol::class,'viewfact']);
Route::get('/adviewstud',[admcontrol::class,'viewstud']);
Route::get('/adviewresult',[admcontrol::class,'viewresult']);


});