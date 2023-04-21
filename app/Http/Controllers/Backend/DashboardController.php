<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function dashboard(){
        Gate::authorize('app.roles.index');
        $breadcrumb = ['dashboard'=> ''];
        pageTitle('dashboard');
        return view('admin.pages.dashboard', ['breadcrumb' => $breadcrumb]);
    }
}
