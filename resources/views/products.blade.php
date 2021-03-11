@extends('layouts.app')

@section('content')
  <main class="products">

    <h2>Pasta Lunga</h2>
    <div class="pasta-lunga">
      @foreach ($pastaLunga as $k => $formato)
      <div class="box">
        <a href="{{route('dettagli', ['id' => $k])}}"><img src="{{$formato['src']}}" alt="{{$formato['titolo']}}"></a>
      </div>
      @endforeach;
    </div>

    <h2>Pasta Corta</h2>
    <div class="pasta-corta">
      @foreach ($pastaCorta as $k => $formato)
      <div class="box">
        <a href="{{route('dettagli', ['id' => $k])}}"><img src="{{$formato['src']}}" alt="{{$formato['titolo']}}"></a>
      </div>
      @endforeach;
    </div>

    <h2>Pasta Cortissima</h2>
    <div class="pasta-cortissima">
      @foreach ($pastaCortissima as $k => $formato)
      <div class="box">
        <a href="{{route('dettagli', ['id' => $k])}}"><img src="{{$formato['src']}}" alt="{{$formato['titolo']}}"></a>
      </div>
      @endforeach;
    </div>

  </main>
@endsection
