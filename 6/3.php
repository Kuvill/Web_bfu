<?php

function sendRequestSafe($url, $method = 'GET', $data = null) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    if ($method == 'POST') {
        curl_setopt($ch, CURLOPT_POST, true);
    } elseif ($method != 'GET') {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    }

    if ($data) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    }

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        throw new Exception("cURL Error: $error");
    }

    if ($httpCode >= 400) {
        throw new Exception("HTTP Error: Code $httpCode");
    }

    return json_decode($response, true);
}

echo "Success: ";
print_r(sendRequestSafe('https://jsonplaceholder.typicode.com/posts/1')) . "\n";

try {
    sendRequestSafe('https://jsonplaceholder.typicode.com/posts/9999999'). "\n";
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}

try {
    sendRequestSafe('https://zachet-po-diffuram.ru') . "\n";
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}

?>
