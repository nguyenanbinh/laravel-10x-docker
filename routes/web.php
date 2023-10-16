<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "<h1>Hieu Thofn toi choi, bro</h1>";
});

Route::get('logInfo', function (Request $request) {
    return response()->json([
        'Your ip' => $request->ip(),
        'User Agent' => $request->header('user-agent'),
        'Name' => 'Khong phai Dang Hoan dau'
    ]);
});

Route::get('users', function ()  {
    $users = User::all();
    return response()->json(['users' => $users ]);
});

