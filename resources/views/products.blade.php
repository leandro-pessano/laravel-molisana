@extends('layouts.app')

@section('content')
  <main class="products">

      @foreach ($pasta as $k => $formato)
      <div class="box">
        <a href="{{route('dettagli', ['id' => $k])}}"><img src="{{$formato['src']}}" alt="{{$formato['titolo']}}"></a>
      </div>
      @endforeach;

  </main>
@endsection
