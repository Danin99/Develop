<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(Request $request){
        
        $search = $request->input('query_keyword');
        $data = Permission::orderBy('created_at', 'desc');

        if ($request->query_keyword) {
            $data->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', "%{$search}%");
            });
        }

        $permissions = $data->paginate(10);
        return view('admin::settings.permissions.index', compact('permissions'));
    }

    public function create(){
        return view('admin::settings.permissions.create');
    }

    public function store(Request $request){
        
        $items = [
            'name' => $request->name,
            'guard_name' => 'admin',
        ];
            
        try {
            if (!$request->id) {
                $request->validate([
                    'name' =>[
                        'required',
                        'string',
                        'unique:permissions,name'
                    ]
                ]);
                
                Permission::create($items);
                $message = "Permission Created successfully";
            } else {
                $data = Permission::find($request->id);
                $data->update($items);
                $message = "Permission Updated Successfully";
            }

            return redirect()->route('admin-setting-permission-index')->with('success', $message);

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function edit(Request $request){
        $data['permission'] = Permission::find($request->id);
        return view('admin::settings.permissions.edit', $data);
    }

    public function delete(Request $request){ 

        Permission::find($request->id)->delete();
        $message = "Permission Deleted Successfully";

        return redirect()->route('admin-setting-permission-index')->with('success', $message);
    }
}
