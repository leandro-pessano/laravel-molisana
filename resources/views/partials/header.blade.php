<header>
  <img src=" {{asset('img/logo.png')}} " alt="">
  <nav>
    <ul>
      <li><a class="{{ (Request::route()->getName() == 'home') ? 'active' : '' }}" href="{{route('home')}}">Home</a></li>
      <li><a class="{{ (Request::route()->getName() == 'products') ? 'active' : '' }}" href="{{route('products')}}">Prodotti</a></li>
      <li><a class="{{ (Request::route()->getName() == 'news') ? 'active' : '' }}" href="{{route('news')}}">News</a></li>
    </ul>
  </nav>
</header>
