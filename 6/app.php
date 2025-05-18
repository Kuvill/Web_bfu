<?php

class ApiClient {
    private $baseUrl;
    private $headers;
    private $authToken;

    public function __construct(string $baseUrl, string $authToken) {
        $this->baseUrl = $baseUrl;
        $this->authToken = $authToken;
        $this->headers = ['Content-Type: application/json'];
    }

    private function sendRequest(string $method, string $endpoint, string $data = null) : array {
        $url = $this->baseUrl . $endpoint;
        $ch = curl_init($url);
    }
}

?>
