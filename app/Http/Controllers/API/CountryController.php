<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\APIController;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends APIController
{
    public function list(Request $request)
    {
        $result = Country::orderBy("name", "asc")->get();
        $success['data'] = $result;
        return $this->response($success);
    }
}
