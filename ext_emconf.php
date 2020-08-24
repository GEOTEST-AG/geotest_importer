<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'GEOTEST Adressen importer',
    'description' => 'Importiert die GEOTEST Adressen',
    'category' => 'plugin',
    'author' => 'Christoph Suter',
    'author_company' => 'GEOTEST AG',
    'author_email' => 'christoph.suter@geotest.ch',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.7.0-10.9.99',
            'tt_address' => '4.0.0-5.99.99',
        ]
    ],
	'suggests' => [
		'tt_address' => '3.0.0-5.99.99',
	],
];
