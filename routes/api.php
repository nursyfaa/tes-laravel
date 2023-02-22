<?php
use Illuminate\Http\Request;
use App\Http\Controllers\AuthC;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\transaksiC;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

route::get('/', function(){
    return 'Hello World API !';
});

route::post('/login',[AuthC::class,'login']);

route::get('/admin',function(){
    return Hash::make('admin');
});


route::get('/transaksi',[transaksiC::class,'index']);
route::get('/transaksi/{id}',[transaksiC::class,'detail']);

route::post('/login',[transaksiC::class,'login']);

route::get('/teller',function(){
    return Hash::make('teller');
});

