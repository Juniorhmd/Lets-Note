@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <div class="hero" style="background-image: url('{{ asset('image/pattern.webp') }}'); height: calc(100vh - 65px)">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-2xl font-bold text-center">
                    Share a Thought. Just One.
                </h1>
                <form method="post" action="{{ route('notes.publish') }}">
                    @csrf
                    <textarea name="note" class="textarea mt-5 mb-5 h-30 resize-none" maxlength="80"
                              placeholder="  Let it Out. Quietly or Loudly."></textarea>
                    <button type="submit" class="btn btn-primary">Note</button>
                </form>
            </div>
        </div>
    </div>
@endsection
