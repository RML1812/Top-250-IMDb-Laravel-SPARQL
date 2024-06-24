<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function filter(Request $request, $filter = null)
    {
        if ($filter) {
            $genres = explode(',', $filter);
            $filterCondition = '"' . implode('" || ?nameGenre = "', $genres) . '"';

            $sparqlQuery = "
                PREFIX ex: <http://example.org/>
                SELECT DISTINCT ?rank ?title ?poster ?imdbRating ?imdbVotes ?rottenRating WHERE {
                    ?movie a ex:Movie ;
                        ex:hasRank ?rank ;
                        ex:hasTitle ?title ;
                        ex:hasPoster ?poster ;
                        ex:hasIMDBRating ?imdbRating ;
                        ex:hasIMDBVotes ?imdbVotes ;
                        ex:hasRottenRating ?rottenRating ;
                        ex:hasGenre ?genre .
                    ?genre ex:hasGenreName ?nameGenre .
                    FILTER (?nameGenre = $filterCondition)
                }
                ORDER BY ?rank
            ";

            $requestData = ['query' => $sparqlQuery];
            $request = Request::create('/api/query', 'POST', $requestData);
            $response = app()->handle($request);

            if ($response->getStatusCode() === 200) {
                $results = json_decode($response->getContent(), true);
                $movies = array_map(function ($row) {
                    return [
                        'rank' => $row['rank'],
                        'title' => $row['title'],
                        'poster' => $row['poster'],
                        'IMDB_rating' => number_format((float) $row['imdbRating'], 1),
                        'IMDB_vote' => $row['imdbVotes'],
                        'rotten_rating' => $row['rottenRating'],
                    ];
                }, $results);

                return view('genre', compact('movies'));
            } else {
                return response()->json(['error' => 'Failed to fetch movies'], 500);
            }
        } else {
            return view('genre', ['movies' => []]);
        }
    }
}