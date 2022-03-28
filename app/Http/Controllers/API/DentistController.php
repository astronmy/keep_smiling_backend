<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\APIController;
use App\Models\Dentist;
use Illuminate\Http\Request;

class DentistController extends APIController
{
    public function list(Request $request)
    {
        $result = Dentist::select(
            'dentists.name',
            'dentists.surname',
            'dentists.gender',
            'dentists.email',
            'countries.name as country name',
            'dentists.created_at'
        )
            ->join('countries', 'countries.id', 'dentists.country_id')
            ->get();
        
        $success['data'] = $result;
        
        return $this->response($success);
    }
}
