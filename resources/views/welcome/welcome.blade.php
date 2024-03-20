<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
<body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <form action="{{ route('welcome.store') }}" method="post">
        @csrf
        <header>
    <h1>Туристичне агентство</h1>
</header>
    <nav>
    <input type="tel" name="phone" placeholder="Telphone number">
    <input type="sno" name="sno" placeholder="Full name">
    <input type="email" placeholder="Email">
    <input type="tour" name="tour" placeholder="Name of tour">
    <input type="submit" name="tourbtn" value="Submit">
    </nav>
    <div class="buttons">
        <button>
            <a class="btn" href="/login">Log in</a>
        </button>
        <button>
            <a class="btn" href="{{route('welcome.showCategory')}}">Category</a>
        </button>
        <button>
            <a class="btn" href="{{route('welcome.showPost')}}">Post</a>
        </button>
    </div>
 
    
    <div class="tour-container">
        @foreach($tours as $tour)
        <div class="tour">
            <img src="{{asset('tours/'.$tour->image)}}" alt="$tour->name" srcset="">
            <h3>{{$tour->name}}</h3>
            <p>{{$tour->description}}</p>
            <p>Тривальсіть: {{$tour->days}} днів </p>
            <p>Ціна: {{$tour->price}} </p>
            <button onclick="window.location.href='{{ route('welcome.show', $tour->id) }}'" type="button">Детальніше</button>

        </div>
        @endforeach
    </div>

</body>
<footer>
    <a href="{{route('welcome.create')}}">Додати пост</a>
    <h3>Пости</h3>
    <div class="tour-container">
        @foreach($posts as $post)
        <div class="tour-container">
            <h3>{{$post->name}}</h3>
            <p>{{$post->description}}</p>
        </div>
        @endforeach
    </div>
</footer>
</html>