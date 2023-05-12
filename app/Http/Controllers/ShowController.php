<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;


class ShowController extends Controller
{
    public function index() {
        return response()->file(base_path('res.json'));
    }

    public function getEligiblity() {
        $client = new \GuzzleHttp\Client([
            'headers' => [
                'authorization' => 'Bearer <ONEDERFUL_ACCESS_TOKEN>',
                'content-type' => ' application/json'
            ],
        ]);
        $request = $client->request('POST', 'https://production.onederful.co/eligibility', [
            'body' => '{
                "subscriber":{
                    "first_name":"XXX",
                    "last_name":"XXX",
                    "dob":"XX/XX/XXXX",
                    "member_id":"XXXX"
                },
                "provider":{"npi":"XXXXX"},
                "payer":{"id":"PRINCIPAL"},
                "version":"v2"
            }'
        ]);
        return $response;
    }
}
