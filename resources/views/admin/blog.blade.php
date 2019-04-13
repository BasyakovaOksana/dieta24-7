@extends('admin.layout')

@section('blog')

    <form action="{{route('store')}}" method="post">
        {{ csrf_field() }}
        <input type="text" name="title"> title <br>
        <input type="text" name="slug"> slug <br>
        <input type="text" name="content"> content <br>
        <input type="submit">
    </form>

@endsection