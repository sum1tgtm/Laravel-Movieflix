<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MovieFlix : Watch Movies</title>
    <link rel="stylesheet" href="{{url('/css/usermovies.css')}}">
</head>

<body>
    <div class="movies-header">
        <div class="m-items movieflix-title">
            <a class="page-title" href="/"> MovieFlix</a>
        </div>
        <div class="m-items payment">
            <a class="page-title" href="{{route('user.payment')}}">Subscribe</a>
        </div>
        <div class="m-items hello-user">
            <p>Hello {{ Auth::user()->name }}</p>
        </div>
        <div class="m-items logout-btn">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); this.closest('form').submit();"><p>Logout</p></a>
            </form>
        </div>
    </div>
    <div class="movies">
        @foreach ($movies as $movie)
            <div class="movie">
                <img class="movie-img" src="{{ url($movie->image_path) }}">
                <div class="movie-details">
                    <p class="movie-title">{{ $movie->movie_name }}</p>
                    <a class="btn" href="{{ url($movie->movie_path) }}">Watch</a>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
