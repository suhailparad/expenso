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

Route::get('/view',function(){
    return view('view',[
        'expense'=>Expense::orderBy('edate','desc')->get()
    ]);
});

Route::delete('/view/delete/{id}',function($id){
    Expense::findOrFail($id)->delete();
    return redirect ('/view');
});
Route::post('/view/search',function(Request $request){
    return view('view',[
        'expense'=>Expense::whereBetween('edate', [$request->efrom, $request->eto])->orderBy('id','desc')->get()
    ]);
   // return $request->from;
});