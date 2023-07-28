@extends('layout')

@section('content')
    <h2>{{$listing['title']}}</h2>
    <h3>{{$listing['tag']}}</h3>
    <p>{{$listing['description']}}</p>
@endsection

