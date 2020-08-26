<?php
include(__DIR__ . '/settings.inc.php');
////////////////////Über die Zugangsdaten kann direkt ein Accesstoken geholt werden. Dieser ist eine Stunde lang gültig:
// --- 3-User --- //
////////////////////Getting the Accesstoken with the Client-Credentials:

$curl_request->set_options(array('user_pwd' => $api_username . ':' . $api_password));

echo '<pre>';
print_r($curl_request->request(
	$authorization_host . 'token.php',
	array(
		'grant_type' => 'client_credentials'
	),
	'POST',
	$token_header
));
echo '</pre>';