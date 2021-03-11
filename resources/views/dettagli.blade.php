@extends('layouts.app')

@section('title',$dettaglio['titolo'])

@section('content')
  <main class="dettaglio">
    <h1>{{$dettaglio['titolo']}}</h1>
    <div class="dettagli">
      <h3>Tipo: {{$dettaglio['tipo']}}</h3>
      <h3>Cottura: {{$dettaglio['cottura']}}</h3>
      <h3>Peso: {{$dettaglio['peso']}}</h3>
    </div>
    <div class="scheda">
      <img src="{{$dettaglio['src-h']}}" alt="{{$dettaglio['titolo']}}">
      <img src="{{$dettaglio['src-p']}}" alt="{{$dettaglio['titolo']}}">
      <h3>Descrizione:</h3>
      <p>{{$dettaglio['descrizione']}}</p>
    </div>
  </main>
@endsection
