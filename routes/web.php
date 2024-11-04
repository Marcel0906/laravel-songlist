<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongsController;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/songs', SongsController::class);

Route::get('/beispiel', function () {
    return 'beispiel';
})->name('meinbeispiel');

// Route::get('/users', function () {
//     // $user = User::create([
//     //     'name' => 'John Doe',
//     //     'email' => 'johndoe@example.com',
//     //     'password' => bcrypt('password123')
//     // ]);

//     return $user;
// });

Route::get('/users', function () {
    $users = User::all(); // Holt alle Benutzer aus der Datenbank

    return $users;
});
