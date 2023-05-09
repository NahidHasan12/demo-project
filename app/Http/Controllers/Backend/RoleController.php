<?php

namespace App\Http\Controllers\Backend;

use DataTables;
use App\Models\role;
use App\Models\Module;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{
    public function index(){
        Gate::authorize('app.roles.index'); // Role permission na thakle admin access korte parbe na
        $breadcrumb = ['dashboard'=> route('app.dashboard'), 'roles'=> ''];
        pageTitle('roles');
        return view('admin.pages.roles.index', ['breadcrumb' => $breadcrumb]);
    }
    
    public function getData(request $request){
        
        if($request->ajax()){
           $getData = role::with('permissions')->whereNotIn('slug',['client','super-admin'])->latest('id');
           
           return Datatables::eloquent($getData)->addIndexColumn()
           ->addColumn('operation', function($role){
            

              $operation = '
              
              <a href="'.route('app.roles.edit',$role->id).'" id="editBtn" class="btn-style btn-style-edit"> <i class="fa fa-edit"> </i> </a>
              
              <button class="btn-style btn-style-delete deleteBtn" data-id="'.$role->id.'"> <i class="fa fa-trash"></i> </button>
              ';
              return $operation;
           })
           ->addColumn('permission', function($role){
              
           // return $role->permissions ? $role->permissions->count() : '0' ;
              if ($role->permissions) {
               $output = '';
               $color = ['primary','success','info','danger','warning','secondary','warking','dark'];
               $randomIndext = rand(0, count($color) - 1);
               $randomColor = $color[$randomIndext];

               foreach ($role->permissions as $key => $permission) {
                  $output .='<span class="badge badge-'.$randomColor.' mx-1"> '.$permission->name.' </span>';
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

    public function store(request $request){
      //dd($request->all());
        $role = role::create([
          'name' => $request->role,
          'slug' => Str::slug($request->role),
        ]);
        $role->permissions()->attach($request->permission);
        return back()->with('success','Data has been saved');
    }

    public function edit($id){
      $role = role::findOrFail($id);
      $modules = Module::with('permissions')->get();
      $breadcrumb = ['Dashboard' => route('app.dashboard'), 'Roles' => route('app.roles.index'),'Create' => ''];
      return view('admin.pages.roles.edit',['role' => $role, 'modules' => $modules, 'breadcrumb' => $breadcrumb]);
    }

    public function update(request $request, $permission_id){
       $role = role::findOrFail($permission_id);
        $role->update([
         'name' => $request->role,
         'slug' => Str::slug($request->role),
        ]);
        $role->permissions()->sync($request->permission);
        return back()->with('success','Data has been updated');
    }

    public function destroy(request $request){
        if($request->ajax()){
         $role = role::find($request->row_id);
         if ($role) {
            $role->delete();
            $output = ['status'=>'success', 'message'=>'Role Deleted'];
         }else{
            $output = ['status'=>'error', 'message'=>'Something Error in Your Code'];
         }
         return response()->json(output);
        }
    }
}
