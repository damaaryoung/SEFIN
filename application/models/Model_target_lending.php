<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use GuzzleHttp\Client;


class Model_target_lending extends ci_model
{
    public function show()
    {       
        $client = new Client();
        $headers = ['headers' => ['Content-Type' => 'application/json', 
        'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJCUFIgS3JlZGl0IE1hbmRpcmkgSW5kb25lc2lhIiwiaWQiOjE1MTEsIm5payI6IjAyMjAxMDE0NyIsInVzZW5hbWUiOiJhcnlvIiwia2RfY2FiYW5nIjpudWxsLCJkaXZpc2lfaWQiOiJJVCIsImphYmF0YW4iOiJJVCBTVEFGRiIsImVtYWlsIjoiaXRAa3JlZGl0bWFuZGlyaS5jby5pZCIsIm5hbWEiOiJIQVJZTyBGQUpBUiBCSEFHQVNLT1JPIiwiaWF0IjoxNjAxOTQ4ODQwLCJleHAiOjE2MDMxNTg0NDB9.EUR-bBVEea1hSk0R-VW5ibvGajX1qkeDdvxtkQ3FKhc']];
        $response = $client->getAsync('http://103.31.232.146/API_WEBTOOL3/api/master/target', $headers)->then(
	    function ($response) {
                return json_decode($response->getBody()->getContents(), true);
            }, function ($exception) {
               return $exception->getMessage();
               
      });
    $rspJson= $response->wait();

}
}