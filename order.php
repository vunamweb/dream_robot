<?php

include(__DIR__ . '/settings.inc.php');

//POST order/

///////////////Einen einfachen Beispielauftrag anlegen (wenn keine Standardportalaccount ID im Token hinterlegt ist, muss die portal_account_id übergeben werden, damit der Auftrag zugeordnet werden kann. Siehe 3.1):

// --- 4 --- //

///////////////Create order:

echo '<pre>';

print_r($curl_request->request(

	$rest_host . 'order/',

	array(

		'portal_account_id' => $portal_account_id,

		'order' => array(

			'customer' => array(

				'email' => 'my.customers@mail.adress',
				
				

				'address' => array(

					'name' => 'Max Mustermann',

				)

			),

			'line' => array(

				0 => array(

					'id' => 0,

					'name' => 'Example article 1',

					'quantity' => 5,

					'price' => 34.50,

				),

				1 => array(

					'id' => 1,

					'name' => 'Example article 2',

					'quantity' => 35,

					'price' => 4.25,

				),

			)

		)

	),

	'POST',

	$rest_header

));

echo '</pre>';