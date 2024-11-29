
<?php
// Zeno Pay API endpoint
$url = "https://api.zeno.africa";


$name = $_POST['name'];
$meter = $_POST['meter'];
$submeter = $_POST['submeter'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$amount = $_POST['package']; 
// API Credentials for API request
$api_key = '';
$secret_key = '';
$account_id = '';


$timestamp = time() + 30; 

// Order data for API request
$orderData = [
    'create_order' => 1,
    'buyer_email' => $phone . "info@rodline.co.tz", 
    'buyer_name' => $name,
    'buyer_phone' => $phone,
    'amount' => $amount,
    'account_id' => $account_id,
    'api_key' => $api_key,
    'secret_key' => $secret_key,
    'timestamp' => $timestamp 
];

$queryString = http_build_query($orderData);


$options = [
    'http' => [
        'method'  => 'POST',
        'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
        'content' => $queryString,
    ],
];
$context = stream_context_create($options);

// Send request to Zeno Pay API
$response = file_get_contents($url, false, $context);

// Check for errors in the API request
if ($response === FALSE) {
    die("Error: Unable to connect to the Zeno Pay API.");
}

// Decode the API response
$responseData = json_decode($response, true);


if (isset($responseData['payment_url'])) {
    
    header("Location: " . $responseData['payment_url']);
    exit;
} elseif (isset($responseData['status']) && $responseData['status'] === 'success') {
   
    header("Location: success.php?message=Payment successful! Thank you.");
    exit;
} else {
    // Display error message
    echo "Error: " . $responseData['message'];
}
