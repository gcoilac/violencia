@extends('layouts.plantilla')

@section('title', 'show'. $report->name)

@section('content')
    <a href="{{route('home')}}">retornar a Dashboard</a><br>
    <a href="{{route('reports.edit', $report)}}">editar denuncia</a>
    <h3>Vista de denuncia: {{$report->name}}</h3>
    

@endsection
