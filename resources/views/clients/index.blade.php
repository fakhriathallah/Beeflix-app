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

        <a href="{{route('clients.create')}}">Add Movie</a>
        @session('success')
        <div class="alert alert-success" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
                Movie Berhasil Ditambahkan
            </div>
        </div>
        @endsession
        <div class="row">
            @foreach ($movies as $movie)
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('storage/'.$movie->photo)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h1 class="card-text">{{ $movie->title }}</h1>
                        <h3 class="card-text">{{ $movie->genre->name }}</h3>
                        <p class="card-text">{{ $movie->description }}</p>
                        <p class="card-text">{{ $movie->publish_date }}</p>
                    </div>
                    <form action="{{route('clients.delete', ['movie'=>$movie->id])}}" method="post">
                        @csrf
                        @method('DELETE')    
                        <input type="submit" value="delete" class="btn btn-danger">
                    </form>
                </div>       
            @endforeach
        </div>
        {{$movies->links()}}
    </div>
    
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>