<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function verify(Request $request)
    {

        $this->validate($request,[
            'response' => 'required'
        ]);

        $client = new Client();

        $response = $client->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'form_params' => [
                    'secret' => env('GOOGLE_RECAPTCHA_SECRET'),
                    'response' => $request->get('response')
                ]
            ]
        );

        $body = json_decode((string)$response->getBody());

        return response()->json($body);
    }
}
