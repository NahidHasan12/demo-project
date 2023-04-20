
<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;





//----------------- Auth Dashboard ------------------//
Route::prefix('app')->name('app.')->middleware('auth','is_verify','permission')->group(function(){
   Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
});









?>