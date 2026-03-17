<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MemberController;

Route::get('/member', [MemberController::class, 'index']);
Route::get('/member/all', [MemberController::class, 'all']);
Route::get('/member/show/{id}', [MemberController::class, 'show']);
Route::get('/member/insert', [MemberController::class, 'insert']);
Route::post('/member/insert2', [MemberController::class, 'insert2']);
Route::get('/member/list', [MemberController::class, 'member_list']);
Route::get('/member/update/{id}', [MemberController::class, 'update']);
Route::post('/member/update2', [MemberController::class, 'update2']);
Route::get('/member/delete/{id}', [MemberController::class, 'delete']);

Route::get('/', function () {
    $members = DB::table('member4')->get();
    return $members;
});
