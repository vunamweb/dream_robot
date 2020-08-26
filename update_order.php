<?php
include(__DIR__ . '/settings.inc.php');
//POST order/{order_id}/
///////////////Einen Auftrag aktualisieren:
// --- 5 --- //
///////////////Update order:
echo '<pre>';
print_r($curl_request->request(
	$rest_host . 'order/' . $order_id . '/',
	array(
		'order' => array(
			//Die aktuelle Notiz mit einer neuen Notiz überschreiben.
			'infos' => 'New notezz.',
            'invoice_number' => 12345,
			'status' => array(
				//Angekommen Status setzen.
				//Set arrived status.
				'is_arrived' => 1
			)
		),
	),
	'POST',
	$rest_header
));
echo '</pre>';