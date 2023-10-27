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
Route::get('/Glass-Fabrics','WelcomeController@IndexOtherPage');
Route::get('/Silica-Fabrics','WelcomeController@IndexOtherPage');
Route::get('/Ceramic-Fabrics','WelcomeController@IndexOtherPage');
Route::get('/Silicone-Coated-Fabrics','WelcomeController@IndexOtherPage');
Route::get('/PTFE-Coated-Fabrics','WelcomeController@IndexOtherPage');
Route::get('/Hi-Temp-Fabric-Tape','WelcomeController@IndexOtherPage');
Route::get('/Flexible-Joint-Ducts','WelcomeController@IndexOtherPage');
Route::get('/Welding-Blanket-Fire-Blanket','WelcomeController@IndexOtherPage');
Route::get('/Removable-Insulation','WelcomeController@IndexOtherPage');
Route::get('/Insulation-Accessories','WelcomeController@IndexOtherPage');
Route::get('/Hi-Temp-Sewing-Thread','WelcomeController@IndexOtherPage');
Route::get('/Temporary-Work-Shop','WelcomeController@IndexOtherPage');
Route::get('/Fiber-Blanket','WelcomeController@IndexOtherPage');

Route::get('/news/read', 'NewsController@index');

Route::get('/menu', function(){
    return view('menu');
});

Route::group(['prefix'=>'ma', 'middleware'=>['auth']],function(){

    // MA CONTENT
    Route::get('content', function(){
        return view('ma.content');
    });
    Route::get('content/home','WelcomeController@home');
    Route::get('content/company','WelcomeController@company');
    Route::get('content/product','WelcomeController@product');
    Route::get('content/contact','WelcomeController@contact');
    Route::get('content/footer','WelcomeController@footer');
    Route::get('content/Glass-Fabrics','WelcomeController@GlassFabrics');
    Route::get('content/Silica-Fabrics','WelcomeController@SilicaFabrics');
    Route::get('content/Ceramic-Fabrics','WelcomeController@CeramicFabrics');
    Route::get('content/Silicone-Coated-Fabrics','WelcomeController@SiliconeCoatedFabrics');
    Route::get('content/PTFE-Coated-Fabrics','WelcomeController@PTFECoatedFabrics');
    Route::get('content/Hi-Temp-Fabric-Tape','WelcomeController@HiTempFabricTape');
    Route::get('content/Flexible-Joint-Ducts','WelcomeController@FlexibleJointDucts');
    Route::get('content/Welding-Blanket-Fire-Blanket','WelcomeController@WeldingBlanketFireBlanket');
    Route::get('content/Removable-Insulation','WelcomeController@RemovableInsulation');
    Route::get('content/Insulation-Accessories','WelcomeController@InsulationAccessories');
    Route::get('content/Hi-Temp-Sewing-Thread','WelcomeController@HiTempSewingThread');
    Route::get('content/Temporary-Work-Shop','WelcomeController@TemporaryWorkShop');
    Route::get('content/Fiber-Blanket','WelcomeController@FiberBlanket');

    Route::post('content/post-style-1', 'WelcomeController@post1');


    // MA NEWS
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