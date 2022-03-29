<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\APIController;
use App\Models\Dentist;
use Illuminate\Http\Request;

class DentistController extends APIController
{
    public function list(Request $request)
    {
        $query = Dentist::select(
            'dentists.id',
            'dentists.name',
            'dentists.surname',
            'dentists.gender',
            'dentists.email',
            'dentists.country_id',
            'countries.name as country_name',
            'dentists.created_at'
        )
            ->join('countries', 'countries.id', 'dentists.country_id');
        
        if ($request->has("name") && $request->get("name")) {
            $query->where("dentists.name", "LIKE", $request->get("name")."%");
        }
        if ($request->has("surname") && $request->get("surname")) {
            $query->where("dentists.surname", "LIKE", $request->get("surname")."%");
        }
        if ($request->has("country") && $request->get("country")) {
            $query->where("dentists.country_id", $request->get("country"));
        }
        if ($request->has("created") && $request->get("created")) {
            $query->whereDate("dentists.created_at", $request->get("created"));
        }
        
        $success['data'] = $query->get();
        
        return $this->response($success);
    }
}
