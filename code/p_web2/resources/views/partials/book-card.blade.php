<!--
Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
Date: 18.05.2022
Description: Partial pour le style des cartes de livre
-->

<div class="max-w-md mx-auto mb-10 bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
    <div class="md:flex md:h-full">
        <div class="md:shrink-0 h-full">
            <img class="h-full md:w-32 lg:w-48 h-48 w-full object-cover md:h-full md:w-48"
                 src="{{asset("/storage/$img")}}" alt="">
        </div>
        <div class="p-8 w-64">
            @auth
                <div class="uppercase tracking-wide text-sm text-blue-500 font-semibold hover:underline"><a
                        href="/bookDetails{{$idBook}}">{{$title}}</a></div>
                <p class="block mt-1 text-20 leading-tight font-medium text-black">{{$author}}</p>
                <a href="/creatorDetails{{$idUser}}" class="hover:underline">{{$user}}</a>
            @else
                <div class="uppercase tracking-wide text-xl text-blue-500 font-semibold">
                    <p>{{$title}}</p>
                </div>
                <p class="block mt-1 text-20 leading-tight font-medium text-black">{{$author}}</p>
                <p>{{$user}}</p>
            @endauth
            <div class="flex items-center">
                <svg class="w-7 h-7 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <p class="ml-2 text-18 font-bold text-black">{{$note}}</p>
            </div>
        </div>
    </div>
</div>
