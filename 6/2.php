<?php
function sendGetRequest($url, $headers = []) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

function sendPostJson($url, $data) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

function sendGetCustom($url, $params) {
    $query = http_build_query($params);
    $fullUrl = $url . '?' . $query;
    $ch = curl_init($fullUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

echo "Get func";
print_r(sendGetRequest(
    'https://jsonplaceholder.typicode.com/posts/1',
    ['User-Agent: NotTorBrowsUser']
)) . "\n\n";

echo "Post with Json";
print_r(sendPostJson(
    'https://jsonplaceholder.typicode.com/posts',
    ['title' => '123', 'body' => '1', 'userId' => 1]
)) . "\n\n";

echo "Get with params";
print_r(sendGetCustom("https://jsonplaceholder.typicode.com/posts/1", ['userId' => 1])) . "\n\n";
?>
