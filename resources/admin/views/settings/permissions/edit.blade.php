@extends('admin::layouts.body')
@include('admin::components.meta', [
    'title' => config('dummy.admin.lables.dashboard.text'),
])

@section('content')
    <div class="p-4 sm:ml-64">
        <div class="mt-14">
            <div class="gap-4">
                <div class="px-4 py-3 bg-blue-100 mb-2 rounded-md">
                    
                    <h1 class="text-lg font-semibold text-blue-900">Edit Permissions</h1>
                </div>

                <form action="{{route('admin-setting-permission-store')}}" method="POST" class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden p-4">
                    @csrf
                    <input type="hidden" name="id" value="{{$permission->id}}">
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" id="name" name="name" value="{{$permission->name}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Enter Name" required />
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Update</button>
                </form>


            </div>
        </div>
    </div>
@endsection
