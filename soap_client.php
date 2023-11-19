<?php
$client = new SoapClient(null, [
    'location' => 'http://localhost/soap_service.php',
    'uri' => 'http://localhost/soap_service.php',
]);

try {
    $result = $client->getUsers();
    echo "<pre>";
    print_r($result);
    echo "</pre>";
} catch (SoapFault $e) {
    echo "Hiba: " . $e->getMessage();
}
