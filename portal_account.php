<?php
include(__DIR__ . '/settings.inc.php');
//GET admin/portal_account/
//////////////////Alle Portalaccount-IDs (mit Namen) abrufen. (Für die Auftragsanfragen "order/", aber auch generell kann es wichtig sein, eine Standard-Portalaccount-ID zu übergeben.)
// --- 03.1 --- //
//////////////////Select all Portal-Account IDs (incl. name).
echo '<pre>';
print_r($curl_request->request(
	$rest_host . 'admin/portal_account/',
	array(),
	'GET',
	$rest_header
));
echo '</pre>';