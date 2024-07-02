<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommonModel extends Model
{
    use HasFactory;

function getAPI($apiName){
// dd(env('API_URL').$apiName);
$curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_URL').$apiName,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'Accept-Language: en-GB,en-US;q=0.9,en;q=0.8',
            'Cache-Control: no-cache',
            'Connection: keep-alive',
            'DNT: 1',
            'Pragma: no-cache',
            'Upgrade-Insecure-Requests: 1',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36'
        ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);


        $responseArray = json_decode($response, true);
        // dd($responseArray);
        return $responseArray;


    }

    function postAPI($apiName,$data){
        // dd($data);
        // dd(env('API_URL').$apiName);
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => env('API_URL').$apiName,
          // CURLOPT_URL =>'http://148.72.213.39:8080/'.$apiName,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>$data,
          CURLOPT_HTTPHEADER => array(
            'Accept: */*',
            'Accept-Language: en-GB,en-US;q=0.9,en;q=0.8',
            'Cache-Control: no-cache',
            'Connection: keep-alive',
            'Content-Type: application/json',
            'DNT: 1',
            'Origin: http://148.72.213.39:8080',
            'Pragma: no-cache',
            'Referer: http://148.72.213.39:8080/patient_page',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
            'X-Requested-With: XMLHttpRequest'
          ),
        ));
       
        $response = curl_exec($curl);
        
        curl_close($curl);
        $responseArray = json_decode($response, true);
                return $responseArray;
        
            }

}
