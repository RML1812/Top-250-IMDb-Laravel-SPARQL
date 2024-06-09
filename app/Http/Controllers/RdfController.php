<?php

namespace App\Http\Controllers;

use App\Services\RdfService;
use Illuminate\Http\Request;

class RdfController extends Controller
{
    protected $rdfService;

    public function __construct(RdfService $rdfService)
    {
        $this->rdfService = $rdfService;
    }

    public function query(Request $request)
    {
        $request->validate([
            'query' => 'required|string'
        ]);

        $sparqlQuery = $request->input('query');
        $results = $this->rdfService->query($sparqlQuery);

        return response()->json($results);
    }
}