@extends('layout.app')

@section('main')
    <!-- component -->
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <div class="flex items-center max-w  bg-white">
        <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible ">
                <a href="addfilm">
                    <button class="bg-gray-800 text-white"> Ajouter film</button>
                </a>
                <table class="table text-gray-400 border-separate space-y-6 text-sm">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="p-3 ">Film</th>
                            <th class="p-4 text-left">Afiche</th>
                            <th class="p-4 text-left">N° Salle</th>
                            <th class="p-4 text-left">Réalisateur</th>
                            <th class="p-4 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($films as $film)
                            {{-- affichage du titre film / BDD --}}
                            <tr class="bg-gray-800">
                                <td class="p-4">
                                    <x-alert name="Ivan" :titre="$film->titre" class="text-green-500 font-extrabold">
                                        <div>
                                             {{$test}}
                                        </div>
                                    </x-alert>


                                    <div class="flex align-items-center text-white">
                                        <div class="ml-3 align-items-center">
                                            <a href="/#/{{ $film->id }}"> {{ $film->titre }}</a>

                                        </div>
                                    </div>
                                </td>

                                {{-- affichage de l'affiche du film / BDD --}}
                                <td>
                                    <img class="rounded-full h-20 w-20  object-cover"
                                        src="images/{{$film->affiche}}" alt="The Northman affiche">
                                </td>

                                {{-- affichage de la salle du film / BDD --}}
                                <td class="p-4 ml-10  text-white">
                                    <div class="flex align-items-center text-white">
                                        <div class="ml-3 align-items-center">
                                            <a href="/#/{{ $film->id_Salles }}"> {{ $film->salle }} </a>
                                        </div>
                                    </div>
                                </td>


                                {{-- affichage du réalisateur du film / BDD --}}
                                <td class="p-4 ml-10  text-white">
                                    <div class="flex align-items-center text-white">
                                        <div class="ml-3 align-items-center">
                                            <a href="/#/{{ $film->id_real }}"> {{ $film->realisateur }} </a>
                                        </div>
                                    </div>
                                </td>

                                {{-- affichage du CRUD du film / BDD --}}
                                <td class="p-4 ">
                                    <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                        <i class="material-icons-outlined text-base">visibility</i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                                        <i class="material-icons-outlined text-base">edit</i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                        <i class="material-icons-round text-base">delete_outline</i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <style>
        .table {
            border-spacing: 0 15px;
        }

        i {
            font-size: 1rem !important;
        }

        .table tr {
            border-radius: 20px;
        }

        tr td:nth-child(n+5),
        tr th:nth-child(n+5) {
            border-radius: 0 .625rem .625rem 0;
        }

        tr td:nth-child(1),
        tr th:nth-child(1) {
            border-radius: .625rem 0 0 .625rem;
        }
    </style>
@endsection
