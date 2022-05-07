<?php

use Illuminate\Support\Facades\Route;

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

/*start landing page routes*/
Route::get('/', 'App\Http\Controllers\landing_page\LandingController@indexLanding')->name('index');
/*start actualite*/
Route::get('/actualite/{id}', 'App\Http\Controllers\landing_page\LandingController@getSingleActualite')->name('single.actualite');
Route::get('/actualite/', 'App\Http\Controllers\landing_page\LandingController@Allactualite')->name('all_actualite');
Route::get('/carriere/', 'App\Http\Controllers\landing_page\LandingController@Allcarriere')->name('all_carriere');
Route::get('/carriere/{id}', 'App\Http\Controllers\landing_page\LandingController@singleCarriere')->name('single.carriere');

/*end actualite*/


Route::get('/axe-gestion', function () {
    return view('landing_page.axe_gestion');
})->name('axe_gestion');

Route::get('/axe-employabilite', function () {
    return view('landing_page.axe_employabilite');
})->name('axe_employabilite');

Route::get('/axe-entrepreneuriat', function () {
    return view('landing_page.axe_entrepreneuriat');
})->name('axe-entrepreneuriat');

Route::get('/indh', function () {
    return view('landing_page.indh');
})->name('indh');





//Route::get('/single_actualite', function () {
//    return view('landing_page.single_actualite');
//})->name('single_actualite');

Route::get('/single_course', function () {
    return view('landing_page.single_course');
})->name('single_course');

Route::get('/contact_us', function () {
    return view('landing_page.contact_us');
})->name('contact_us');

Route::get('/create/account', 'App\Http\Controllers\admin\StudentController@createAccount')->name('create.account');
Route::post('/create/store', 'App\Http\Controllers\admin\StudentController@storeAccount')->name('store.account');
Route::get('/Thank-You-Page', 'App\Http\Controllers\admin\StudentController@thankyou')->name('thankyou');
/*end landing page routes*/

/*start admin routes*/
Route::group( [ 'prefix' => 'dashboard/' ,'middleware'=>'auth'], function(){
    Route::group( [ 'prefix' => 'admin'], function() {
        Route::get('/', 'App\Http\Controllers\admin\AdminController@index')->name('admin.index');
        Route::get('/test', 'App\Http\Controllers\admin\AdminController@test')->name('admin.test');
        Route::get('/another', 'App\Http\Controllers\admin\AdminController@another')->name('another.link');
        /*start pre-regestration*/
        Route::get('/Pre-Inscription', 'App\Http\Controllers\admin\AdminController@PreInscription')->name('pre-inscription');
        Route::get('/Pre-Inscription/details/{id}', 'App\Http\Controllers\admin\AdminController@getDetails')->name('pre-inscription.details');
        Route::get('/Pre-Inscription/complete/{id}', 'App\Http\Controllers\admin\AdminController@complete')->name('pre-inscription.complete');
        Route::post('/Pre-Inscription/complete/store/{id}', 'App\Http\Controllers\admin\AdminController@completeStore')->name('pre-inscription.complete.store');
        /*end pre-regestration*/
        /*start carrire*/
          Route::get('/carriere', 'App\Http\Controllers\admin\CarriereController@index')->name('carriere.index');
          Route::get('/carriere/create', 'App\Http\Controllers\admin\CarriereController@create')->name('carriere.create');
          Route::get('/carriere/edit/{id}', 'App\Http\Controllers\admin\CarriereController@edit')->name('carriere.edit');
          Route::post('/carriere/update/{id}', 'App\Http\Controllers\admin\CarriereController@update')->name('carriere.update');
          Route::post('/carriere/store', 'App\Http\Controllers\admin\CarriereController@store')->name('carriere.store');
        /*end carrire*/
        /*start Recrutement*/

        /*end Recrutement*/
        /*start actualite*/
           Route::get('/actualite', 'App\Http\Controllers\admin\ActualiteController@index')->name('actualite.index');
           Route::get('/actualite/create', 'App\Http\Controllers\admin\ActualiteController@create')->name('actualite.create');
           Route::get('/actualite/edit/{id}', 'App\Http\Controllers\admin\ActualiteController@edit')->name('actualite.edit');
           Route::post('/actualite/update/{id}', 'App\Http\Controllers\admin\ActualiteController@update')->name('actualite.update');
           Route::post('/actualite/store', 'App\Http\Controllers\admin\ActualiteController@store')->name('actualite.store');
        /*end actualite*/
        /*start student*/
        Route::get('/student/', 'App\Http\Controllers\admin\StudentController@index')->name('student.index');
        Route::get('/student/create', 'App\Http\Controllers\admin\StudentController@create')->name('student.create');
        Route::post('/student/store', 'App\Http\Controllers\admin\StudentController@store')->name('student.store');
        /*end student*/
        /*start video*/
        Route::get('/videos/', 'App\Http\Controllers\admin\VideoController@index')->name('videos.index');
        Route::get('/videos/create', 'App\Http\Controllers\admin\VideoController@create')->name('videos.create');
        Route::post('/videos/store', 'App\Http\Controllers\admin\VideoController@store')->name('videos.store');
        Route::post('/videos/stock', 'App\Http\Controllers\admin\VideoController@stock')->name('videos.stock');
        /*end video*/
        /*start audios*/
        Route::get('/audios/', 'App\Http\Controllers\admin\AudioController@index')->name('audios.index');
        Route::get('/audios/create', 'App\Http\Controllers\admin\AudioController@create')->name('audios.create');
        /*end audios*/
        /*start materials*/
        Route::get('/materials/', 'App\Http\Controllers\admin\MaterialController@index')->name('materials.index');
        Route::get('/materials/create', 'App\Http\Controllers\admin\MaterialController@create')->name('materials.create');
        /*end materials*/
        /*start cours*/
        Route::get('/cours/', 'App\Http\Controllers\admin\CoursController@index')->name('cours.index');
        Route::get('/models/', 'App\Http\Controllers\admin\CoursController@Modelindex')->name('models.index');
        Route::get('/cours/create', 'App\Http\Controllers\admin\CoursController@create')->name('cours.create');
        Route::post('/cours/store', 'App\Http\Controllers\admin\CoursController@store')->name('cours.store');
        Route::post('/model/store', 'App\Http\Controllers\admin\CoursController@Modelstore')->name('model.store');
        /*end cours*/
        /*start categories*/
        Route::get('/categories/', 'App\Http\Controllers\admin\CoursController@category')->name('category.index');
        Route::post('/categories/store', 'App\Http\Controllers\admin\CoursController@categoryStore')->name('category.store');
        Route::get('/categories/cours', 'App\Http\Controllers\admin\CoursController@categoryCours')->name('category.cours');
        /*end categories*/
    });


    Route::get('/student', 'App\Http\Controllers\admin\AdminController@index');
    Route::get('/vip', 'App\Http\Controllers\admin\AdminController@index');
});

/*end admin routes*/



require __DIR__.'/auth.php';