<a href="{{url($lien)}}" class="block py-2 pr-4 pl-3 md:bg-transparent md:text-white-700 md:p-0 md:hover:underline {{ request()->is($lien) ? 'text-white ?' : "" }}">{{$texte}}</a>
