<?php

namespace App\Services;

use EasyRdf\Sparql\Client as SparqlClient;
use Illuminate\Support\Facades\Log;

class RdfService
{
    protected $fusekiEndpoint;

    public function __construct()
    {
        // Set the Fuseki server endpoint
        $this->fusekiEndpoint = 'http://localhost:3030/movie/sparql';
    }

    public function query($sparqlQuery)
    {
        try {
            // Create a SparqlClient instance with the Fuseki endpoint
            $sparqlClient = new SparqlClient($this->fusekiEndpoint);
            $results = $sparqlClient->query($sparqlQuery);

            return $this->convertResultsToArray($results);
        } catch (\Exception $e) {
            Log::error('SPARQL query failed: ' . $e->getMessage());
            return null;
        }
    }

    protected function convertResultsToArray($results)
    {
        $output = [];
        foreach ($results as $row) {
            $outputRow = [];
            foreach ($row as $key => $value) {
                $outputRow[$key] = (string) $value;
            }
            $output[] = $outputRow;
        }
        return $output;
    }
}