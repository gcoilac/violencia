@extends('layouts.plantilla')

@section('title', 'show'. $event->name)

@section('content')
    <a href="{{route('home')}}">retornar a Dashboard</a><br>
    <a href="{{route('events.edit', $event)}}">editar evento</a>
    <h3>Vista de eventos: {{$event->name}}</h3>
    
    

@endsection
