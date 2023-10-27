<?php
use Illuminate\Support\Facades\App;

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
    // return view('welcome');
    return redirect('index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/local/{local}', function($local){
    session()->put('locale', $local);
    return redirect()->back();
});

Route::get('/index', 'WelcomeController@index');
Route::get('/company', 'CompanyController@index');
Route::get('/product', 'ProductController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/news', 'NewsController@index');

Route::get('/news/read', 'NewsController@index');

Route::get('/menu', function(){
    return view('menu');
});

Route::group(['prefix'=>'ma', 'middleware'=>['auth']],function(){
    Route::get('content', function(){
        return view('ma.content');
    });

    Route::get('news', function(){
        
        if (!empty(request()->delete) && empty(request()->edit) && empty(request()->name)) {
            DB::table('news')->where('id',request()->delete)->delete();
        } else if(!empty(request()->delete) && !empty(request()->edit && !empty(request()->name))) {
            $d = DB::table('news')->where('id',request()->delete)->first();
            if (!empty($d->picture)) {
                $a = [];
                foreach (json_decode($d->picture) as $key => $value) {
                    if ($value!=request()->name) {
                        array_push($a,$value);
                    }
                }
                DB::table('news')->where('id',request()->delete)->update([
                    'picture' => json_encode($a)
                ]);
            }
        }

        return view('ma.news',[
            'data' => DB::table('news')->orderBy('created_at','desc')->get()
        ]);
    });
    Route::post('news/post', 'NewsController@store');
    Route::post('news/post-update', 'NewsController@update');
});