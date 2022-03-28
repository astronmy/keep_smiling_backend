<?php
namespace App\Http\Controllers;

class APIController extends Controller
{
    public function response($data = null, $code = 200){
        $response = [
            'error' => 0
        ];
        # Concat error 0 with $data
        if ($data) {
            $response = array_merge($response, $data);
        }
        
        return response()->json($response, $code);

    }
    public function error($error, $message,  $code = 404){
        $response = [
            'error' => $error,
            'message' => $message
        ];
        return response()->json($response, $code);
    }
}
