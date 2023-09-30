<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class LoginController extends Controller
{
    public function validasi(Request $request)
    {
        $title = "Login";
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        try {

            $client = new Client();
            $uri = "http://localhost:3000/login";
            $req = $client->request('POST', $uri, [
                'json' => [
                    'username' => $username,
                    'password' => $password
                ]
            ]);
            $status = $req->getStatusCode();
            if ($status == 400 || $status == 500) {
                return redirect()->route('utama')->with('error', 'Login failed');
            } else if ($status == 200) {
                return redirect()->route('dashboard')->with('username', $username);
            } else {
                return redirect()->route('utama')->with('error', 'Login failed');
            }
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $status = $response->getStatusCode();
                $errorMessage = json_decode($response->getBody()->getContents(), true);
            } else {
                $errorMessage = $e->getMessage();
            }

            return redirect()->back()->with('error', 'Login failed');
        }
    }
}
