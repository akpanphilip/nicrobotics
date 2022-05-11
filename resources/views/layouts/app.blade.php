<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('images/logo2.png')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

</head>

<body>
    {{-- navbar --}}
    <div>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}">
              <img src="{{asset('images/logo2.png')}}" alt="">
              <p>NicRobotics</p>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <div class="navbar-toggler-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav pt-3">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}#download">Download</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}#rating">Rating</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}#faqs">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link flagLink" href="{{route('home')}}">
                    <img src="{{asset('images/nigeria.png')}}" alt="">
                </a>
              </li>
              @guest
              <li class="nav-item accountBtn">
                <a class="btn text-light" href="/login">LOGIN | SIGNUP</a>
              </li>
              @endguest
              @auth
              <li class="nav-item accountBtn">
                <a class="btn text-light" href="{{route('dashboard')}}">DASHBOARD</a>
              </li>
              @endauth
            </ul>
          </div>
        </div>
      </nav>
            <container-fluid>
              @yield('content')
            </container-fluid>
    </div>
</body>
</html>
<script>
    const counters =  document.querySelectorAll('.counter');
    counters.forEach((counter) => {
        counter.innerText = '0';

        const updateCounter = () => {
            const target = counter.getAttribute('data-target');
            const c = +counter.innerText;
            const increment = target/200;
            if(c < target){
                counter.innerText = `${Math.ceil(c + increment)}`;
                setTimeout(updateCounter, 1);
            }
        };
        updateCounter();
    });
</script>
<script>
    const days = document.querySelector('.days');
    const today = document.querySelector('.today');
    const firsttbl = document.querySelector('.firsttbl');
    const secondtbl = document.querySelector('.secondtbl');

    today.addEventListener('click', ()=>{
        firsttbl.style.display = 'block';
        secondtbl.style.display = 'none';
    })
    days.addEventListener('click', ()=>{
        secondtbl.style.display = 'block';
        firsttbl.style.display = 'none';
    })
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
