<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CastController extends Controller
{
    public function show(int $rank)
    {
        // Define the SPARQL query to get the movie title
        $sparqlQueryTitle = "
            PREFIX ex: <http://example.org/>
            SELECT ?title WHERE {
                ?movie a ex:Movie ;
                       ex:hasRank $rank ;
                       ex:hasTitle ?title .
            }
        ";

        // Define the SPARQL query to get the cast members
        $sparqlQueryCast = "
            PREFIX ex: <http://example.org/>
            SELECT ?name ?picture WHERE {
                ?movie a ex:Movie ;
                       ex:hasRank $rank ;
                       ex:hasCast ?cast .
                ?cast ex:hasName ?name ;
                      ex:hasPicture ?picture .
            }
        ";

        // Define the request data for title
        $requestDataTitle = [
            'query' => $sparqlQueryTitle
        ];

        // Define the request data for cast
        $requestDataCast = [
            'query' => $sparqlQueryCast
        ];

        // Create new request instances
        $requestTitle = Request::create('/api/query', 'POST', $requestDataTitle);
        $requestCast = Request::create('/api/query', 'POST', $requestDataCast);

        // Dispatch the requests to the appropriate routes
        $responseTitle = app()->handle($requestTitle);
        $responseCast = app()->handle($requestCast);

        // Check if the responses are successful
        if ($responseTitle->getStatusCode() === 200 && $responseCast->getStatusCode() === 200) {
            // Extract the JSON response bodies
            $titleResult = json_decode($responseTitle->getContent(), true);
            $castResult = json_decode($responseCast->getContent(), true);

            // Extract title and cast members from results
            $movieTitle = !empty($titleResult[0]['title']) ? $titleResult[0]['title'] : 'Unknown Movie';

            // Replace 'NaN' with the placeholder image URL
            $placeholderImage = 'https://upload.wikimedia.org/wikipedia/en/b/b1/Portrait_placeholder.png';
            foreach ($castResult as &$castMember) {
                if ($castMember['picture'] === 'NaN') {
                    $castMember['picture'] = $placeholderImage;
                }
            }

            return view('cast', ['castMembers' => $castResult, 'movieTitle' => $movieTitle]);
        } else {
            return response()->json(['error' => 'Failed to fetch cast members or movie title'], 500);
        }
    }
}
