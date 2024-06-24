<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieFilterController extends Controller
{
    public function getMovies()
    {
        // Define the SPARQL query
        $sparqlQuery = '
            PREFIX ex: <http://example.org/>
            SELECT ?rank ?title ?poster ?imdbRating ?imdbVotes ?rottenRating WHERE {
                ?movie a ex:Movie ;
                       ex:hasRank ?rank ;
                       ex:hasTitle ?title ;
                       ex:hasPoster ?poster ;
                       ex:hasIMDBRating ?imdbRating ;
                       ex:hasIMDBVotes ?imdbVotes ;
                       ex:hasRottenRating ?rottenRating .
                       
            }
            ORDER BY ?rank
        ';

        // Define the request data
        $requestData = [
            'query' => $sparqlQuery
        ];

        // Create a new request instance
        $request = Request::create('/api/query', 'POST', $requestData);

        // Dispatch the request to the appropriate route
        $response = app()->handle($request);

        // Check if the response is successful
        if ($response->getStatusCode() === 200) {
            // Extract the JSON response body
            $results = json_decode($response->getContent(), true);
            $movies = [];
            foreach ($results as $row) {
                $imdbRating = number_format((float) $row['imdbRating'], 1);
                $movies[] = [
                    'rank' => $row['rank'],
                    'title' => $row['title'],
                    'poster' => $row['poster'],
                    'IMDB_rating' => $imdbRating,
                    'IMDB_vote' => $row['imdbVotes'],
                    'rotten_rating' => $row['rottenRating'],
                ];
            }

            return response()->json($movies);
        } else {
            return response()->json(['error' => 'Failed to fetch movies'], 500);
        }
    }
}