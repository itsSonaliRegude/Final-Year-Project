<?php

// Initialize cURL session
$curl = curl_init();

// Set the API endpoint URL
$url = 'https://www.boredapi.com/api/activity';

// Set cURL options
curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true, // Return the response as a string
    CURLOPT_HTTPHEADER => [
        'Authorization: Bearer YOUR_ACCESS_TOKEN', // Include any required headers
        'Content-Type: application/json', // Example of setting the content type
    ],
]);

// Execute the cURL request
$response = curl_exec($curl);

// Check for errors
if (curl_errno($curl)) {
    $error_message = curl_error($curl);
    echo "cURL Error: " . $error_message; // Output error message
} else {
    // Output API response
    echo "API Response: " . $response;
    // Process API response
    $decoded_response = json_decode($response, true);
    // Handle response data
}

// Close cURL session
curl_close($curl);

?>

