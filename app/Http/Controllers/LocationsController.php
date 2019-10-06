<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RestClient;
use RestClientException;
use GuzzleHttp\Client;
class LocationsController extends Controller
{
    //

    public function getRemoteLocations(){



 require('C:\xampp\htdocs\serp\resources\files\RestClient.php');
//You can download this file from here https://api.dataforseo.com/_examples/php/_php_RestClient.zip

try {
    //Instead of 'login' and 'password' use your credentials from https://my.dataforseo.com/login
    $client = new RestClient('https://api.dataforseo.com/', null, 'cozmutavlad@yahoo.com', 'EEX3NeUe4OI1raLD');

    $loc_get_result = $client->get('v2/cmn_locations');

    print_r($loc_get_result);



    //do something with locations

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
