<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\PasswordRequest;
use App\Http\Requests\Admin\UserRequest;
use App\Http\Requests\Admin\PermissionRequest;
use App\Models\ModulePermission;
use App\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Exception;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:user-view', ['only' => ['index']]);
        $this->middleware('permission:user-create', ['only' => ['onCreate', 'onSave']]);
        $this->middleware('permission:user-update', ['only' => ['onUpdate', 'onUpdateStatus', 'onDelete', 'onRestore', 'onChangePassword', 'onSavePassword', 'userPermission', 'userPermissionSave']]);
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('admin-dashboard');
        }
        return view("admin::auth.sign-in");
    }

    public function index(Request $request)
    {
        return view("admin::user.index");
    }

    public function data()
    {
        $data = User::where('role', 'admin')->orderByDesc("created_at")->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('profile_image', function ($user) {
                $profileImage = '<img src="' . $user->avatar . '" class="h-[30px] w-[30px] rounded-full cursor-pointer" alt="Profile Image">';
                return $profileImage;
            })
            ->rawColumns(['profile_image'])
            ->make(true);
        return response()->json($data);
    }

    public function onEdit(Request $request, $id){
        $data = User::find($id);
        return response()->json([
            'status' => 200,
            'data' => $data,
            'sms' => 'Success.'
        ]);
    }

    public function userPermission(Request $request)
    {
        $data['user'] = User::find($request->slug);
        $data['ModulePermission'] = ModulePermission::with('permission')->orderBy('sort_no')->get();
        if (isset($data['ModulePermission']) && count($data['ModulePermission']) > 0)
            foreach ($data['ModulePermission'] as $module) {
                $module->check = false;
                if (isset($module->permission) && count($module->permission) > 0) {
                    $exist_permissions = $data['user']->ModelHasPermission->pluck('permission_id')->toArray() ?? [];
                    foreach ($module->permission as $perItem)
                        if (in_array($perItem->id, $exist_permissions)) {
                            $perItem->check = true;
                            $module->check = true;
                        } else {
                            $perItem->check = false;
                        }
                }
        }
        return response()->json($data);
    }

    //public function onSavePermission(Request $request)
    //{
    //    DB::beginTransaction();
    //    try {
    //        $user = User::find($request->id);
    //        $permissions = $request->permissions;
    //        $allPermissions = Permission::pluck('id')->toArray();

    //        if ($permissions === null) {
    //            $revokePermissions = $allPermissions;
    //        } else {
    //            $revokePermissions = array_diff($allPermissions, $permissions);
    //        }
    //        $user->syncPermissions($permissions);

    //        if (empty($revokePermissions)) {
    //            $user->revokePermissionTo($allPermissions);
    //        } else {
    //            foreach ($revokePermissions as $permissionId) {
    //                $permission = Permission::find($permissionId);
    //                if ($permission) {
    //                    $user->revokePermissionTo($permission);
    //                }
    //            }
    //        }
    //        DB::commit();
    //        return response()->json([
    //            'status' => 'success',
    //            'message' => 'Assigned Success!',
    //            'error' => false,
    //        ]);
    //    } catch (\Exception $e) {
    //        DB::rollBack();
    //        dd($e);
    //        return response()->json([
    //            'status' => 'error',
    //            'message' => 'Something went wrong!',
    //            'error' => $e->getMessage(),
    //        ]);
    //    }
    //}

    public function onSavePermission(Request $request)
    {
        DB::beginTransaction();
        try {
            $permissions = $request->permissions;
            $user = User::find($request->id);
            $permissionNames = Permission::pluck('name')->toArray();
            $revoke = array_diff($permissionNames, $permissions);
            $user->givePermissionTo($permissions);
            $user->revokePermissionTo($revoke);
            DB::commit();
            return response()->json([
                'status' => 'success',
                'message' => 'Assigned Success!',
                'error' => false,
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong!',
                'error' => $e->getMessage(),
            ]);
        }
    }
}
