@extends('layouts.app')

@section('content')
  <main class="products">

      @foreach ($pasta as $formato)
      <div class="box">
      <img src="{{$formato['src']}}" alt="{{$formato['titolo']}}">
      </div>
      @endforeach;

  </main>
@endsection
