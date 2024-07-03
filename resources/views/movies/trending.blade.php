<h1>Trending Movies Today</h1>

@foreach ($trendingMovies as $movie)
    <div>
        <h2>{{ $movie['title'] }}</h2>
        <p>{{ $movie['overview'] }}</p>
        <a href="{{ route('movies.show', $movie['id']) }}">View Details</a>
    </div>
@endforeach
