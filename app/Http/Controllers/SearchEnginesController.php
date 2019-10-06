<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RestClient;
use RestClientException;

class SearchEnginesController extends Controller
{
    //
    public function getRemoteSearchEngines(){

        require('C:\xampp\htdocs\serp\resources\files\RestClient.php');
//You can download this file from here https://api.dataforseo.com/_examples/php/_php_RestClient.zip

        try {
            //Instead of 'login' and 'password' use your credentials from https://my.dataforseo.com/login
            $client = new RestClient('https://api.dataforseo.com/', null, 'cozmutavlad@yahoo.com', 'EEX3NeUe4OI1raLD');

            $se_get_result = $client->get('v2/cmn_se');

            print_r($se_get_result);

            //do something with search result

        } catch (RestClientException $e) {
            echo "\n";
            print "HTTP code: {$e->getHttpCode()}\n";
            print "Error code: {$e->getCode()}\n";
            print "Message: {$e->getMessage()}\n";
            print  $e->getTraceAsString();
            echo "\n";
            exit();
        }

        $client = null;

    }
}
