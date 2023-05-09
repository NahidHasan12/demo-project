
<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserManageController;





//----------------- Auth Dashboard ------------------//
Route::prefix('app')->name('app.')->middleware('auth','is_verify','permission','admin_switch')->group(function(){
   Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

   //----------Roles------------//
   Route::resource('/roles', RoleController::class)->except('show','destroy');
   Route::post('/roles/get-data', [RoleController::class, 'getData'])->name('roles.getData');
   Route::post('roles/destroy', [RoleController::class,'destroy'])->name('roles.destroy');
   
   //----------User------------//
   Route::resource('/users', UserManageController::class)->except('show','destroy');
   Route::post('/users/get-data', [UserManageController::class, 'getData'])->name('users.getData');
   Route::post('users/destroy', [RoleController::class,'destroy'])->name('users.destroy');
});









?>