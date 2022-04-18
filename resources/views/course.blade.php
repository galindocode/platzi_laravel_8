@extends('layouts/web')

@section('content')
    <div class="grid grid-cols-3 gap-4">
        <div class="p-8 bg-gray-200 col-span-1 shadow-lg rounded">
            <h2 class="font-medium text-xl uppercase text-gray-400 text-center my-4">
                Contenido
            </h2>
            <ul class="flex flex-col ">
                @php
                    $count = 1;
                @endphp

                @foreach ($course->posts as $post)
                    <li class=" course-content-item">
                        <span class="content-course-count">{{ $count }}</span>
                        <span class="mx-4 vertical-center text-green-900 text-lg font-medium ">{{ $post->name }}</span>
                        @if ($post->free)
                            <span class="text-xs   bg-green-200 text-green-500 border border-green-500 px-2 py-1 rounded ml-auto vertical-center">Ver Gratis 👀</span>
                        @else
                        <span class="text-xs   bg-red-200 text-red-500 border border-red-500 px-2 py-1 rounded ml-auto vertical-center">Acceder 💪</span>
                        @endif
                    </li>
                    @php
                        $count += 1;
                    @endphp
                @endforeach
            </ul>
        </div>

        <div class="p-8 pt-0 text-gray-700 col-span-2">
            <img src="{{ $course->image }}" alt="" class="rounded">
            <h2 class="text-4xl mb-8 mt-12 font-medium">{{ $course->name }}</h2>
            <span>{{ $course->description }}</span>
            <div class="flex mt-16">
                <img src="{{ $course->user->avatar }}" alt="" class="w-10 h-10 rounded-full ">

                <div class="mx-4 ">
                    <p class="text-gray-500 text-sm ">{{ $course->user->name }}</p>
                    <small class="text-gray-300 text-xs">
                        {{ $course->created_at->diffForHumans() }}
                    </small>
                </div>
            </div>
            <livewire:course-similar :course="$course">
        </div>
    </div>
    
    <livewire:course-list>
@endsection