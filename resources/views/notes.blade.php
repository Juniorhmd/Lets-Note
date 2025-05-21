@extends('layouts.app')

@section('title', 'Notes')

@section('content')
    <div class="p-5 max-w-3xl mx-auto" style="height: calc(100vh - 65px)">
        <h1 class="text-2xl font-bold mb-6 text-center"><i class="fa-solid fa-seedling text-green-600"></i></h1>
        @forelse ($notes as $note)
            <div class="mb-4 p-4 bg-base-200 rounded-lg">
                <div>
                    <div class="w-6">
                        <p class="flex font-bold"><img class="mr-2 rounded-full" title="meow!"
                                                       src="{{ asset('image/avatar.webp') }}"/> Sumbdy</p>
                    </div>
                </div>
                <p class="text-lg mb-2 mt-2">{{ $note->note }}</p>
                <p class="text-xs ">
                    @if ($note->created_at)
                        {{ $note->created_at->format('F j, Y \a\t g:i A') }}
                    @else
                        Unknown date
                    @endif

                </p>
            </div>
        @empty
            <p class="text-center text-gray-500">No notes yet. Be the first to write!</p>
        @endforelse
    </div>
@endsection
