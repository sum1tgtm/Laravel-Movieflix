<form action="{{route('admin.update',['movie_id'=>$movie->id])}}" method="POST" enctype="multipart/form-data">
    @method("PUT")
    @csrf
    <input type="text" name="movie_name" value="{{$movie->movie_name}}" required>
    <input type="file" name="image_path" required>
    <input type="file" name="movie_path" required>
    <input type="Submit" value="Update">
</form>
