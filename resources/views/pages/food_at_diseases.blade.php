@extends('layouts.app')

@section('title')
    {{ $food_at->title }}
@endsection

@section('meta_description')
    {{ $food_at->meta_description }}
@endsection

@section('content')
    <div class="container">
        <section>
            <div>
                <h1>{{ $food_at->title }}</h1>

                <div>
                    <img src="{{ asset('images') . '/' . $food_at->image }}" alt="{{ $food_at->title }}">
                    <p>{{ $food_at->content }}</p>
                    <h3>Режим питания</h3>
                    <p>{{ $food_at->diet }}</p>
                    <h3>Рекомендованные продукты</h3>
                    <p>{{ $food_at->is_recommended }}</p>
                    <h3>Запрещенные продукты</h3>
                    <p>{{ $food_at->is_forbidden }}</p>
                </div>
            </div>
        </section>
    </div>
@endsection

