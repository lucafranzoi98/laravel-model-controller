<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @vite('resources/js/app.js')
   <title>Movies</title>
</head>
<body class="bg-dark text-white">
   <h1 class="text-center mt-4">Movies</h1>
   <div class="container mt-4">
      <div class="row row-cols-5 g-4">

         @foreach ($movies as $movie)
            <div class="col">
               <div class="card h-100">
                 <div class="card-body">
                   <h5 class="card-title">{{$movie->title}}</h5>
                   <h6 class="card-subtitle mb-2 text-muted ">{{$movie->original_title}}</h6>
                   <p class="card-text">Nationality: {{$movie->nationality}}</p>
                   <p class="card-text">Date: {{$movie->date}}</p>
                   <p class="card-text">{{$movie->vote}}/10</p>
                 </div>
               </div>
            </div>
         @endforeach

      </div>
   </div>

</body>
</html>