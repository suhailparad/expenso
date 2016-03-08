<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Expense;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('add',function(){
    return View::make('add');
});
Route::post('/addex',function(Request $request){
    
    $expense=new Expense;
    $expense->expense=$request->descr;
    $expense->edate=$request->edate;
    $expense->amount=$request->amount;
    
    $expense->save();
    
    return redirect('/');
});
