<div class="">
    <h1>Admin</h1>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
    </form>
</div>


<form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="movie_name" placeholder="Enter movie name" required>
    <input type="file" name="image_path" required>
    <input type="file" name="movie_path" required>
    <input type="submit">
</form>
