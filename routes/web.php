<?php
use App\Integrant;
use App\GuzzleHttp;
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
    $client = new \GuzzleHttp\Client();
    $endpoint = "https://developer.nrel.gov/api/solar/solar_resource/v1.json?api_key=OPjMuVfo96OIbkB9bp64sxmlFOd6pvVsKKNsb8Oh&lat=40&lon=-105";
    $response = $client->get($endpoint, [
        \GuzzleHttp\RequestOptions::JSON => ['key1' => 1, 'key2' => 'Test'],
    ]);

    $array = $response->getBody()->getContents();
    $json = json_decode($array, true);
    $collection = collect($json);
    $access = $collection->get('outputs');
    $products = $access['avg_ghi']['monthly'];

    return view('welcome', compact('products'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/integrantes', 'IntegrantController');
Route::resource('/recursos', 'ResourceController');
Route::resource('/proyectos', 'ProjectController');
Route::resource('/articulos', 'ArticleController');


Route::get('/contacto', function () {
    return view('contact');
});
