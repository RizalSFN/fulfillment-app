<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAll()
    {
        $client = new Client();
        $uri = "https://2b61-2001-448a-3032-f7fb-89ea-24c9-b35-ba97.ngrok.io";
        $response = $client->get($uri, ["Accept" => "application/json"])->getBody()->getContents();
        $response_json = json_decode($response);
        $result = response()->json($response_json, 200);
        return $result;
    }
}
