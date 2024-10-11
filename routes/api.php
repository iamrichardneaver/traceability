
<?php

use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->group(function () {
    Route::get('/wallet', [WalletController::class, 'show']);
    Route::post('/wallet/load', [WalletController::class, 'loadCredits']);
});
