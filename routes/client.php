
<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\DashboardController;





//----------------- Auth Dashboard ------------------//
Route::prefix('portal')->name('portal.')->middleware('is_client')->group(function(){
   Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
});









?>