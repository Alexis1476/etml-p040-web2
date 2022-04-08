@extends('layout')
@section('content')
    <h1 class="text-2xl font-bold text-center">Sign up</h1>
    <div class="flex items-center justify-center content-center h-full">
        <form action="/userAdd" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            {{ csrf_field() }}
            @include('partials.form-input', ['nameItem'=>'user', 'text'=>'Username', 'type'=>'text'])
            @include('partials.form-input', ['nameItem'=>'password', 'text'=>'Password', 'type'=>'password'])
            @include('partials.form-input', ['nameItem'=>'password_confirm', 'text'=>'Confirm password', 'type'=>'password'])
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300">
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Add book
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
