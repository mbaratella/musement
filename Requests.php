<?php
require 'vendor/autoload.php';

class Requests
{
    protected string $musementBaseUrl = "https://api.musement.com/";
    protected string $weatherBaseUrl = "http://api.weatherapi.com/";
    protected string $apiKey = "06f26e70e8334bf7b88133006212202";

    /**
     * Requests constructor.
     */
    public function __construct() {}

    /**
     * Get cities from api.musement
     *
     * @param string $id
     * @param array $params
     * @return false|\Psr\Http\Message\StreamInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getMusementCities($id = "", $params = []) {
        try {
            $client = new GuzzleHttp\Client();
            $res = $client->request('GET', $this->musementBaseUrl . "api/v3/cities/$id", $params);
            return $res->getBody();
        }
        catch (Exception $ex) {
            echo "<p><strong>".$ex->getCode()."</strong> - ".$ex->getMessage()."</p>";
            return false;
        }
    }

    /**
     * Get city weather from api.weatherapi
     *
     * @param $lat
     * @param $lng
     * @param array $params
     * @return false|\Psr\Http\Message\StreamInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCityWeather($lat, $lng, $params = []){
        try {
            $client = new GuzzleHttp\Client();
            $res = $client->request('GET', $this->weatherBaseUrl . "v1/forecast.json?key=". $this->apiKey."&q=$lat,$lng&days=2", $params);
            return $res->getBody();
        }
        catch (Exception $ex) {
            echo "<p><strong>".$ex->getCode()."</strong> - ".$ex->getMessage()."</p>";
            return false;
        }
    }
}