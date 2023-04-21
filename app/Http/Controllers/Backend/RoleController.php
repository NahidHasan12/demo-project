<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{
    public function index(){
        Gate::authorize('app.roles.index');
        $breadcrumb = ['dashboard'=> route('app.dashboard'), 'roles'=> ''];
        pageTitle('roles');
        return view('admin.pages.roles.index', ['breadcrumb' => $breadcrumb]);
    }
    public function getDaata(request $request){
        if($request->ajax()){
            dd('ok');
        }
    }
    public function create(){
        
    }
    public function store(){
        
    }
    public function edit(){
        
    }
    public function update(){
        
    }
    public function destroy(){
        
    }
}
