@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="hero" style="background-image: url('{{ asset('image/pattern.webp') }}'); height: calc(100vh - 65px)">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">
                    <span class="text-indigo-600">Write it.</span>
                    <span class="text-emerald-600"> Share it.</span>
                    <span class="text-pink-600"> Make it matter</span>
                    <span> — on </span>
                    <span class="text-yellow-500">Lets Note</span>.
                </h1>
                <p class="py-6 w-fit text-sm">
                    Got something to say? Say it here — loud, proud, and beautifully written.
                </p>
                <a class="btn btn-primary" href="{{ route('notes.create') }}">Let`s Note!</a>
            </div>
        </div>
    </div>
    <section class="min-h-screen py-16 px-4 md:px-12 flex items-center">
        <div class="max-w-5xl mx-auto text-center w-full">
            <div class="mb-10">
                <i class="fa-solid fa-seedling fa-2x text-green-600"></i>
                <h2 class="text-3xl md:text-4xl font-extrabold mt-5">
                    Say it, drop it, and let it fly
                </h2>
                <p class="text-lg mt-4">
                    Lets Note is your open space to express anything—no accounts, no bios, no strings attached.
                    Just your words, released into the wild.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                <div class="p-6 rounded-xl shadow hover:shadow-md transition">
                    <h3 class="text-xl font-semibold text-indigo-600 mb-2">Zero Friction</h3>
                    <p>
                        No login. No sign-up. Just write and post in seconds—it's that simple.
                    </p>
                </div>
                <div class="p-6 rounded-xl shadow hover:shadow-md transition">
                    <h3 class="text-xl font-semibold text-emerald-600 mb-2">Anonymous by Design</h3>
                    <p>
                        Your words speak for themselves. No names. No faces. Pure expression.
                    </p>
                </div>
                <div class="p-6 rounded-xl shadow hover:shadow-md transition">
                    <h3 class="text-xl font-semibold text-pink-600 mb-2">Organic Reach</h3>
                    <p>
                        Every post gets a chance to be seen, read, and felt. Sometimes, that’s all we need.
                    </p>
                </div>
            </div>

            <div class="text-xs sm:text-base mt-12 px-4">
                <p>
                    This project is <strong>open source</strong>, created for learning and sharing ideas freely.
                    It's in an early stage — feel free to explore, fork, and contribute ❤️
                </p>
                <p class="mt-2">
                    Built with Laravel + TailwindCSS — by
                    <a href="https://github.com/JuniorHMD" class="text-indigo-600 underline">Muhamed</a>
                </p>
            </div>
        </div>
    </section>
@endsection

