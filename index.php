<?php
require_once ("Requests.php");
require_once ("City.php");

$request = new Requests();
step1($request);

function step1(Requests $request) {
    $response = $request->getMusementCities();
    if($response !== false) {
        $results = \GuzzleHttp\json_decode($response, true);
        if(!empty($results)) {
            foreach ($results as $res) {
                $city =  new City($res["id"], $res["name"], $res["latitude"], $res["longitude"]);
                printWeather($city, $request);
            }
        }
        else {
            echo "<p>Empty result on api.musement.com</p>";
        }
    }
}

function printWeather(City $city, Requests $request) {
    $response = $request->getCityWeather($city->getLatitude(), $city->getLongitude());
    if($response !== false) {
        $results = \GuzzleHttp\json_decode($response, true);
        if(!empty($results)) {
            $forecast = $results['forecast']['forecastday'];
            $day1 = $forecast[0];
            $weather1 = $day1["day"]["condition"]["text"];
            $day2 = $forecast[1];
            $weather2 = $day2["day"]["condition"]["text"];
            $city->setWeather1($weather1);
            $city->setWeather2($weather2);
            echo "Processed city ".$city->getName()." | $weather1 - $weather2 <br>";
        }
        else {
            echo "<p>Empty result on api.weatherapi.com</p>";
        }
    }
}
