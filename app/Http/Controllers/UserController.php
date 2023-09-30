<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAll()
    {
        $client = new Client();
        $uri = "http://localhost:3000";
        $response = $client->get($uri, ["Accept" => "application/json"]);
        $result = json_decode($response->getBody()->getContents(), true);
        return view('users', [
            "data" => $result,
            "title" => "users"
        ]);
    }
}
