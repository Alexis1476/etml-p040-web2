<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="flex items-center justify-center content-center">
    <form action="/userAdd" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h1 class="text-2xl font-bold text-center mb-5">Login</h1>
        @csrf
        @include('partials.form-input', ['nameItem'=>'userLogin', 'text'=>'Username', 'type'=>'text'])
        @include('partials.form-input', ['nameItem'=>'passwordLogin', 'text'=>'Password', 'type'=>'password'])
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300">
            <div class="flex items-center justify-between">
                <button
                    class="btnDefault"
                    type="submit">
                    Login
                </button>
            </div>
        </div>
    </form>
</div>
