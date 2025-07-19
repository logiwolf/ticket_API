
<?php

use App\Http\Controllers\api\AuthController;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\AuthorCollection;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
