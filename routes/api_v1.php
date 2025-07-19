
<?php

use App\Http\Controllers\Api\V1\TicketController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\V1\UserController;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\AuthorCollection;
use Illuminate\Http\Request;




Route::prefix('v1')->group(function () {
  Route::middleware('auth:sanctum')->apiResource('tickets', TicketController::class);

  Route::middleware('auth:sanctum')->apiResource('user', UserController::class);

  Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
  });
});
