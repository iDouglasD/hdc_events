@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    @foreach ($events as $events)
        <p> {{$events->title}} - - {{$events->description}} </p>
    @endforeach
@endsection
