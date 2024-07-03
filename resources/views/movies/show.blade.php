<h1>{{ $movie['title'] }}</h1>

<p>{{ $movie['overview'] }}</p>
<p>Release Date: {{ $movie['release_date'] }}</p>
<p>Rating: {{ $movie['vote_average'] }}</p>
<img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }} Poster">
