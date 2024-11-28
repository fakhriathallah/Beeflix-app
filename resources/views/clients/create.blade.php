<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Beeflix</h1>
    <form action="{{ route('clients.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="" value="{{old('title')}}"/>
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" name="description" id="title" class="form-control" placeholder="" value="{{old('description')}}"/>
            @error('description')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="publish_date" class="form-label">publish_date</label>
            <input type="date" name="publish_date" id="publish_date" class="form-control" placeholder="" value="{{old('publish_date')}}"/>
            @error('publish_date')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">photo</label>
            <input type="file" name="photo" id="photo" class="form-control" placeholder="" value="{{old('photo')}}"/>
            @error('photo')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="genre_id" class="form-label">genre_id</label>
            <select
                class="form-select form-select-lg"
                name="genre_id"
                id="genre_id"
            >
            @foreach ($genres as $genre)
                <option value="{{$genre->id}}">{{$genre->name}}</option>
            @endforeach
            </select>
        </div>
        <input class="btn btn-primary" type="submit" value="Add New Movie">
    </form>
    </div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>