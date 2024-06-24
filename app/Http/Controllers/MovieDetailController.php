<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MovieDetailController extends Controller
{
    public function show($rank)
    {
        // Define the SPARQL queries
        $sparqlQueries = [
            "PREFIX ex: <http://example.org/>

            SELECT ?rank ?year ?title ?poster ?imdbRating ?imdbVotes ?rottenRating ?duration ?imdbLink ?rottenLink ?rottenVotes ?storyline
            WHERE {
                ?movie a ex:Movie ;
                    ex:hasRank ?rank ;
                    ex:hasYear ?year ;
                    ex:hasTitle ?title ;
                    ex:hasPoster ?poster ;
                    ex:hasIMDBRating ?imdbRating ;
                    ex:hasIMDBVotes ?imdbVotes ;
                    ex:hasRottenRating ?rottenRating ;
                    ex:hasDuration ?duration ;
                    ex:hasIMDBLink ?imdbLink ;
                    ex:hasRottenLink ?rottenLink ;
                    ex:hasRottenVotes ?rottenVotes ;
                    ex:hasStoryline ?storyline ;
                FILTER (?rank = $rank)
            }",

            "PREFIX ex: <http://example.org/>

            SELECT ?castName
            WHERE {
                ?movie a ex:Movie .
                ?movie ex:hasRank $rank .
                ?movie ex:hasCast ?cast .
                ?cast ex:hasName ?castName .
            }
            LIMIT 3",

            "PREFIX ex: <http://example.org/>

            SELECT ?directorName
            WHERE {
                ?movie a ex:Movie .
                ?movie ex:hasRank $rank .
                ?movie ex:hasDirector ?director .
                ?director ex:hasName ?directorName .
            }
            LIMIT 3",

            "PREFIX ex: <http://example.org/>

            SELECT ?writerName
            WHERE {
                ?movie a ex:Movie .
                ?movie ex:hasRank $rank .
                ?movie ex:hasWriter ?writer .
                ?writer ex:hasName ?writerName .
            }
            LIMIT 3",

            "PREFIX ex: <http://example.org/>

            SELECT ?genreName
            WHERE {
                ?movie a ex:Movie .
                ?movie ex:hasRank $rank .
                ?movie ex:hasGenre ?genre .
                ?genre ex:hasGenreName ?genreName .
            }
            LIMIT 3",
        ];

        // Initialize an array to store results
        $results = [];

        // Loop through queries and execute them
        foreach ($sparqlQueries as $sparqlQuery) {
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
                $queryResults = json_decode($response->getContent(), true);
                $results[] = $queryResults;
                Log::info($results);
            } else {
                return abort(404, 'Movie not found');
            }
        }

        // Extract results for each entity
        $movieDetails = isset($results[0]) ? $results[0][0] : null;
        $castNames = isset($results[1]) ? $results[1] : [];
        $directorNames = isset($results[2]) ? $results[2] : [];
        $writerNames = isset($results[3]) ? $results[3] : [];
        $genreNames = isset($results[4]) ? $results[4] : [];

        // Preprocess IMDB_rating to format it to one decimal place
        if ($movieDetails) {
            $movieDetails['imdbRating'] = number_format((float) $movieDetails['imdbRating'], 1);
        }

        return view('movieDetail', compact('movieDetails', 'castNames', 'directorNames', 'writerNames', 'genreNames'));
    }
}