<html>
    <head>
        <title>Movies</title>
    <link href="/css/app.css"
    </head>

    <body>
        <h1>Test</h1>
        <div>
            @foreach ($movies as $movie)
            <div>
                <a href="/movies/{{$movie->id}}">{{$movie->title}}</a>
                <p>{{$movie->storyline}}</p>
            </div>
            @endforeach
        </div>   
        <script src="/js/app.js"/>
    </body>
</html>