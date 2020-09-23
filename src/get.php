<?php
include "./vendor/autoload.php";
use \GuzzleHttp\Client;

class GetTest
{
    protected $format = 'json';

    public function action_index()
    {
        $client = new Client([
            'base_uri' => 'http://zipcloud.ibsnet.co.jp',
        ]);

        $response = $client->request('GET', $uri, []);
        $list = json_decode($response->getBody()->getContents(), true);

        var_dump($list);
    }
}

$gt = new GetTest();
$gt->action_index();

