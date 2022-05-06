@extends('layout')
@section('content')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <h1 class="text-2xl font-bold text-center">Add a book</h1>
    <div class="flex items-center justify-center content-center h-full">
        <form action="/bookCheckAdd" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            {{ csrf_field() }}
            @include('partials.form-input', ['nameItem'=>'title', 'text'=>'Title', 'type'=>'text'])
            @include('partials.form-input', ['nameItem'=>'numberPages', 'text'=>'Number of pages', 'type'=>'number'])
            @include('partials.form-select', ['nameItem'=> 'categories', 'text'=>'Category', 'options'=>$categories])
            @include('partials.form-select', ['nameItem'=>'authors', 'text'=>'Author','options'=>$authors])
            @include('partials.form-select', ['nameItem'=>'editors', 'text'=>'Editor','options'=>$editors])
            @include('partials.form-input', ['nameItem'=>'publishingDate', 'text'=>'Publishing date', 'type'=>'date'])
            @include('partials.form-input', ['nameItem'=>'bookPreview', 'text'=>'Book preview', 'type'=>'text'])
            <div class="mb-4">
                <label class="label" for="resume">
                    Resume
                </label>
                <textarea
                    class="textarea"
                    id="resume"
                    rows="3"
                    placeholder="Resume of the book"
                    name="resume"
                ></textarea>
            </div>
            <div class="mb-4">
                <label class="label">Book cover</label>
                <input
                    class="input"
                    name="book cover"
                    type="file">
            </div>
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">
                <div class="flex items-center justify-between">
                    <button
                        class="btnDefault"
                        type="submit">
                        Add book
                    </button>
                    <button
                        class="btnDefault"
                        type="button">
                        Clear
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
