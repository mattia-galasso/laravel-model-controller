@extends('layouts.master')

@section('title', 'Movies Homepage')
    
@section('content')    
    {{-- <main class="container m-auto d-flex justify-content-center align-items-center flex-wrap gap-1"> --}}
    <main class="container row mx-auto mt-3 mb-5 g-4 ">
        @foreach ($movies as $movie)
            <x-card>
                <x-slot:movie>
                    <li class="fs-4">{{ $movie['title'] }}</li>
                    <li class="fs-6">({{ $movie['original_title'] }})</li>
                    <li class="fs-6 my-2 text-capitalize">{{ $movie['nationality'] }}</li>
                    <li class="fs-6">{{ date('d-m-Y', strtotime($movie['date'])) }}</li>
                </x-slot:movie>
                <x-slot:vote>
                    <div class="vote">
                        @for ($i = 1; $i <= 10; $i++)
                            @if ($i <= floor($movie['vote']))
                            <i class="bi bi-star-fill"></i>    
                            @elseif ($i == ceil($movie['vote']))
                            <i class="bi bi-star-half"></i>
                            @else
                            <i class="bi bi-star"></i>
                            @endif  
                        @endfor
                    </div>
                    ({{$movie['vote']}})
                </x-slot:vote>
            </x-card>
        @endforeach
    </main>
@endsection