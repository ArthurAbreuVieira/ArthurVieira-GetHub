<?php

namespace ArthurVieira\GetHub;

abstract class GetHub
{
  private static $url = "https://api.github.com/";

  private static $headerOptions = [
    "http" => [
      "ignore_errors" => true,
      "method" => "GET",
      "header" => [
        "User-Agent: ArthurMendes\\GetHub"
      ]
    ]
  ];

  private static function getData($url)
  {
    $context = stream_context_create(self::$headerOptions);

    $data = file_get_contents($url, false, $context);

    $statusCode = self::getStatusCode($http_response_header);

    if(self::verifyStatusCode($statusCode)){
      return json_decode($data, true);
    }else{
      return [
        "message" => "Data not found"
      ];
    }
  }

  private static function getStatusCode($http_reponse){
    $statusCode = explode(" ",$http_reponse[0]);
    foreach($statusCode as $value){
      if(is_numeric($value)){
        $statusCode = $value;
        break;
      }
    }
    return $statusCode;
  }

  private static function verifyStatusCode($statusCode)
  {
    if($statusCode != 200){
      return false;       
    }
    return true;
  }

  public static function getUser($nickname)
  {
    $url = self::$url."users/".$nickname;
    return self::getData($url);
  }

  public static function getAllRepos($nickname)
  {
    $url = self::$url."users/".$nickname."/repos";
    return self::getData($url);
  }

  public static function getRepo($nickname, $repository)
  {
    $url = self::$url."repos/".$nickname."/".$repository;
    return self::getData($url);
  }
}
