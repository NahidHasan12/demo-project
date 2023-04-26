<?php

namespace App\Http\Controllers\Backend;

use App\Models\role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use DataTables;

class RoleController extends Controller
{
    public function index(){
        Gate::authorize('app.roles.index'); // Role permission na thakle admin access korte parbe na
        $breadcrumb = ['dashboard'=> route('app.dashboard'), 'roles'=> ''];
        pageTitle('roles');
        return view('admin.pages.roles.index', ['breadcrumb' => $breadcrumb]);
    }
    
    public function getDaata(request $request){
        if($request->ajax()){
           $getData = role::with('permissions')->whereNotIn('slug',['client','super-admin'])->latest('id');
           
           return Datatables::eloquent($getData)->addIndexColumn()
           ->addColumn('operation', function($role){
              $operation = '
              <a href="javascript:void(0)" class="btn-style btn-style-edit"> <i class="fa fa-edit"> </i> </a>
              <button class="btn-style btn-style-delete"> <i class="fa fa-trash"></i> </button>
              ';
              return $operation;
           })
           ->addColumn('permisison', function($role){
            
              if ($role->permission) {
               $output = '';
               $color = ['primary','success','info','danger','warning','secondary','warking','dark'];
               $randomIndext = rand(0, count($color) - 1);
               $randomColor = $color[$randomIndext];

               foreach ($role->permissions as $key => $permission) {
                  $output .='<span class="badge badge-'.$randomColor.'  mx-1"> '.$permisson->name.' </span>';
               }
               
              }
              return $output;
           })
           ->addColumn('created_at', function($role){
              return dateFormat('d-m-Y', $role->created_at);
           })->rawColumns(['operation','permission'])->make(true);
        }
    }

    
    public function create(){
        $roleCreate = Gate::authorize('app.roles.create'); // Role permission na thakle admin access korte parbe na
        $modules = Module::with('permissions')->get();
        $breadcrumb = ['Dashboard' => route('app.dashboard'), 'Roles' => route('app.roles.index'),'Create' => ''];
        return view('admin.pages.roles.create',['roleCreate' => $roleCreate, 'modules' => $modules, 'breadcrumb' => $breadcrumb]);
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
