<?php 

namespace PagseguroApi\Util;

use Exception;

final class ApiRest implements RequestInterface {

    private $url;
    private $default_headers;

    const POST = "POST";
    const GET = "GET";
    const OPTIONS = "OPTIONS";
    const PUT = "PUT";
    const DELETE = "DELETE";

    public function __construct($url, $default_headers = []) {
        $this->url = $url;
        $this->default_headers = $default_headers;
    }

    public function defaultRequest($endpoint = '', $method_type,  $headers = [], $postfields = [], $parse_response = true) {
        
        $curl = curl_init(); 

        $url = $this->url . $endpoint;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
        $req_headers =  array_merge($this->default_headers, $headers);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $req_headers);

        switch($method_type) {
            case self::POST:
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $postfields);
            break;
            case self::OPTIONS:
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "OPTIONS");
                curl_setopt($curl, CURLOPT_POSTFIELDS, $postfields);
            break;
            case self::DELETE:
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
                curl_setopt($curl, CURLOPT_POSTFIELDS, $postfields);
            break;
            case self::PUT:
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                curl_setopt($curl, CURLOPT_POSTFIELDS, $postfields);
            break;
            default:
                if ($method_type !== self::GET) {
                    throw new Exception("Method Type: '" . $method_type . "' is not allowed");
                }
            break;
        }
        
        $response = curl_exec($curl);
        if($parse_response) $response = json_decode($response);

        $http_code = curl_getinfo($curl)['http_code'];
        
        curl_close($curl);

        return [
            $response,
            $http_code,
            $req_headers, 
            $url
        ];

    }

}