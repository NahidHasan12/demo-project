
<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\DashboardController;





//----------------- Auth Dashboard ------------------//
Route::prefix('app')->name('app.')->middleware('auth','is_verify','permission','admin_switch')->group(function(){
   Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

   //----------Roles------------//
   Route::resource('/roles', RoleController::class)->except('show');
   Route::post('/roles/get-data', [RoleController::class, 'getDaata'])->name('roles.getData');
});









?>