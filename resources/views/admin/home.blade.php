<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/adminmovies.css">
</head>

<body>
    <div class="movies-header">
        <p class="m-items page-title">Admin Home</p>
        <a class="add-movie" href="{{ route('admin.add') }}">Add Movie</a>
        <div class="m-items logout-btn">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
            </form>
        </div>
    </div>


    <div class="movies">
        @foreach ($movies as $movie)
            <div class="movie">
                <span class="movie-title">{{ $movie->movie_name }}</span>
                <img src="{{ url($movie->image_path) }}">
                <div class="btn">
                    <div class="btns ">
                        <a href="{{ route('admin.edit', ['movie_id' => $movie->id]) }}"><button class="btn edit-btn">Edit</button></a>

                    </div>
                    <div class="btns "><a
                            href="{{ route('admin.delete', ['movie_id' => $movie->id]) }}"><button class="btn delete-btn">Delete</button></a>
                    </div>
                    <div class="btns"><a href="{{ url($movie->movie_path) }}"><button class="btn watch-btn">Watch</button></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
