@extends('template.template')

@section('title', 'QnA')

@section('body-container')
    <h1>Ini page QnA</h1>
    <h3>Hari ini adalah hari : {{ $hari }}</h3>
    <h3>Materi pembelajaran hari ini : {{ $materi }}</h3>
@endsection
