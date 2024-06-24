<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CastDetailController extends Controller
{
    public function show($name)
    {
        // Process the name parameter to replace underscores with spaces
        $processedName = str_replace('_', ' ', $name);

        // Define the SPARQL query
        $sparqlQuery = "
            PREFIX ex: <http://example.org/>
            SELECT ?birthday ?name ?picture ?placeOfBirth ?profileLink WHERE {
                ?person a ex:Person ;
                        ex:hasName \"$processedName\" ;
                        ex:hasBirthday ?birthday ;
                        ex:hasName ?name ;
                        ex:hasPicture ?picture ;
                        ex:hasPlaceOfBirth ?placeOfBirth ;
                        ex:hasProfileLink ?profileLink .
            }
        ";

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

            if (!empty($results)) {
                $castDetails = $results[0];

                // Replace 'NaN' with the placeholder image URL
                $placeholderImage = 'https://upload.wikimedia.org/wikipedia/en/b/b1/Portrait_placeholder.png';
                if ($castDetails['picture'] === 'NaN') {
                    $castDetails['picture'] = $placeholderImage;
                }
            } else {
                $castDetails = null;
            }

            return view('castDetail', ['castDetails' => $castDetails, 'castName' => $processedName]);
        } else {
            return response()->json(['error' => 'Failed to fetch cast details'], 500);
        }
    }
}