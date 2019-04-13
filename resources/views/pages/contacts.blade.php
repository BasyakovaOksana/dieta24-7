@extends('layouts.app')

@section('title')
    Комментарии
@endsection

@section('meta_description')
    Комментарии, комментировать, написать отзыв, написать комментарий
@endsection

@section('content')
    <div class="container">
        <section>
            @if (Auth::user())
                <div class="comments">
                    <form action="{{ route('comments') }}" method="post">
                        {{ csrf_field() }}

                        <label for="comment" class="label">оставить отзыв</label> <br>
                        <textarea type="text" name="content" id="comments"></textarea>
                        <input type="hidden" name="user" value="{{ Auth::user()->name }}">
                        <input type="submit">
                    </form>
                </div>
            @else
                <p> Чтобы оставить отзыв, нужно <a href="{{ route('register') }}" class="link"> ЗАРЕГИСТРИРОВАТЬСЯ </a>
                </p>
            @endif

            <div class="blog">
                @foreach($comments as $item)
                    <div class="create"> {{ \Carbon\Carbon::parse($item->created_at)->format('j F Y') }} </div>
                    <div class="user"> {{ $item->user }} </div>
                    <div class="contentComment"> {{ $item->content }} </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection