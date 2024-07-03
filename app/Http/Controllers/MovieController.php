<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('TMDB_API_KEY');
    }

    public function trending()
    {
        // Récupérer les films tendances du jour
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey
        ])->get("https://api.themoviedb.org/3/trending/movie/day");

        if ($response->successful()) {
            $data = $response->json();

            if (isset($data['results'])) {
                $trendingMovies = $data['results'];
                return view('movies.trending', compact('trendingMovies'));
            } else {
                // Afficher le contenu de la réponse pour débogage
                dd($data);
            }
        } else {
            // Afficher un message d'erreur si la requête a échoué
            dd($response->status(), $response->body());
        }
    }

    public function show($id)
    {
        // Récupérer les détails d'un film spécifique
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey
        ])->get("https://api.themoviedb.org/3/movie/{$id}");

        if ($response->successful()) {
            $movie = $response->json();
            return view('movies.show', compact('movie'));
        } else {
            // Afficher un message d'erreur si la requête a échoué
            dd($response->status(), $response->body());
        }
    }
}
