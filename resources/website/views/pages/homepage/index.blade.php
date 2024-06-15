@extends('website::layouts.body')
@include('website::components.meta', [
'title' => '',
// 'title' => config('dummy.menu.home.text') . ' -',
])

@section('content')
<main class="mx-auto w-full h-[100vh] max-w-screen-xl px-4 py-2">
    <h1>Hello world!!</h1>
</main>
@endsection
