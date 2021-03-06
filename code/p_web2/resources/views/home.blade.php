<!--
Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
Date: 18.05.2022
Description: Page d'accueil du site
-->

@extends('layout')

<!-- Section content -->
@section('content')

    <h2 class="flex justify-center text-4xl mb-8 mt-4">Site description</h2>
    <p class="text-center">Welcome to Passion Lecture, an online library that allows you to find
        information about books that users have put online. <br> In addition, this site allows you to rate
        books and see their average rating</p>

    <div class="flexCardDiv pt-10">
        <!-- Ajout chaque livres dans la page d'accueil -->
        @forelse($books as $book)
            @include('partials.book-card',[
                'title'=>$book->booTitle,
                'author'=>$book->author->autFirstName,
                'user'=>$book->user->useNickname,
                'img'=>$book->booCoverName,
                'note'=>$book->booNoteAverage,
                'idUser'=>$book->idUser,
                'idBook'=>$book->idBook
            ])
        <!-- Si il n'a aucune info il n'affiche rien -->
        @empty
        @endforelse
    </div>

@endsection
