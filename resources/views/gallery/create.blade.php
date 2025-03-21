<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <h2>Upload Image</h2>

    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>

    <label for="image">Image:</label>
    <input type="file" name="image" id="image" required>

    <button type="submit">Upload</button>
</form>


    <a href="{{ route('gallery.index') }}">Back to Gallery</a>

</body>
</html>
