@extends('layouts.app')

@section('title')
    {{ $nutrient->title }}
@endsection

@section('meta_description')
    {{ $nutrient->meta_description }}
@endsection

@section('content')
    <div class="container">
        <section>
            <div>
                <h1>{{ $nutrient->title }}</h1>

                <div>
                    <img src="{{ asset('images') . '/' . $nutrient->image }}" alt="{{ $nutrient->title }}">
                    <p>{{ $nutrient->content }}</p>
                </div>
            </div>
        </section>
    </div>
@endsection

