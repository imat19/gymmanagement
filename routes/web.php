<?php
use App\Http\Controllers\MemberController;
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

Route::get('/edit', [MemberController::class, 'edit'])->name('edit');
Route::get('/', [MemberController::class, 'index'])->name('index');
Route::post('/createmember', [MemberController::class, 'create'])->name('createmember');
Route::get('/updatetodo/{id}', [TodoController::class, 'update'])->name('updatetodo');
Route::get('/deletemember/{id}', [MemberController::class, 'delete'])->name('deletemember');