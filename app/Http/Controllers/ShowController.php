<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;


class ShowController extends Controller
{
    public $clientid = "e48b75bc-d7e6-4773-aaf3-38f8346a6272";
    public $clientsecret = "k9wjhcLt6nbdYsKtShN8fqrQLRTUbg";

    public $token = "";
    public function index() {
        return response()->file(base_path('res.json'));
    }

    public function getToken() {
        $client = new \GuzzleHttp\Client(['headers' => [
            'Content-Type' => 'application/x-www-form-urlencoded',
        ]]);
        $res = $client->request('POST', 'https://api.pverify.com/Token',[
            'form_params' =>  [
                'Client_Id' => $this->clientid,
                'Client_Secret' => $this->clientsecret,
                'grant_type' => 'client_credentials'
            ],
        ]);
        $json = json_decode($res->getBody());
        return $json->access_token;
    }

    public function postEligbility() {
        $json = $this->getToken();
        $client = new \GuzzleHttp\Client(['headers' => [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$json,
            'Client-API-Id' => $this->clientid
        ]]);
        $res = $client->request('POST', 'https://api.pverify.com/api/DentalEligibilitySummary',[
            'body' =>  '{
                "payerCode": "DE0159",
                "payerName": "Delta Dental of New Jersey",
            
                "provider": {
                    "firstName": "Sirisha",
                    "middleName": "",
                    "lastName": "Nemallapudi",
                    "npi": "1427006147",
                    "TaxId":"123456789"
                },
                "subscriber": {
                    "firstName": "Ramesh",
                    "dob": "06/12/1973",
                    "lastName": "Billa",
                    "memberID": "1520575556"
                },
                "dependent": null,
            
                "isSubscriberPatient": "True",
                "doS_StartDate": "02/02/2021",
                "doS_EndDate": "02/02/2024",
            
                "PracticeTypeCode": "86",
                "referenceId": "Pat MRN",
                "Location": "Any location Name",
                "IncludeHtmlResponse": false
            
            }',
        ]);
        $json2 = json_decode($res->getBody());
        $res2 = $client->request('GET','https://api.pverify.com/API/GetEligibilitySummary/'.$json2->RequestID);
        $data = json_decode($res2->getBody(),true);
        
        return view('report')->with('data',$data);
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
