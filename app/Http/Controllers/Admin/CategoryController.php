<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        return view('admin::pages.categories.index');
    }

    public function data()
    {
        $data = Category::get();
        foreach($data as $category){
            $category->name = json_decode($category->name)->en;
        }
        return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
        return response()->json($data);
    }

    public function onSave(Request $request){
        {
            $items = [
                'name'      => json_encode([
                    'en' => $request->name_en,
                    'km' => $request->name_km,
                ]),
                'slug'      => $request->slug,
                'ordering'  => $request->ordering,
                'user_id'   => auth('admin')->user()->id,
                'status'    => $request->status,
            ];
            DB::beginTransaction();
            try {
                if (!$request->id) {
                    Category::create($items);
                } else {
                    $category = Category::find($request->id);
                    $category->update($items);
                }
                DB::commit();
                return response()->json([
                    'status' => 'success',
                    'message' => $request->id ? 'Category Updated Success!' :  'Category Created Success',
                    'error' => false,
                ]);
            } catch (\Exception $e) {
                DB::rollBack();
                return $e;
                return response()->json([
                    'status' => 'error',
                    'message' => __('form.message.error'),
                    'error' => true,
                ]);
            }
        }
    }

}
