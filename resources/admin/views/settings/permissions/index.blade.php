@extends('admin::layouts.body')
@include('admin::components.meta', [
    'title' => config('dummy.admin.lables.dashboard.text'),
])

@section('content')
    <div class="px-8 sm:ml-64 bg-slate-200">
        <div class="mt-14">
            <div class="gap-4">
                <div class="py-3 mb-2 rounded-md">
                    <h1 class="text-xl font-semibold text-blue-900">Permissions Lists</h1>
                </div>
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden px-4 py-6">
                    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 pb-4">
                        <div class="w-full md:w-1/2">
                            <form class="flex items-center">
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" value="{{request()->input('query_keyword')}}" name="query_keyword" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2" placeholder="Search" required="">
                                </div>
                            </form>
                        </div>
                        <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <a href="{{route('admin-setting-permission-create')}}" type="button" class="flex items-center justify-center text-blue-800 bg-blue-100 bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 focus:outline-none">
                                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                </svg>
                                Create Permission
                            </a>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        @include('admin::settings.permissions.table')
                    </div>
                    {{-- {{ $permissions->links() }} --}}
                    {{ $permissions->appends(['query_keyword' => request()->input('query_keyword')])->links() }}
                </div>
                        

            </div>
        </div>
    </div>
@endsection
