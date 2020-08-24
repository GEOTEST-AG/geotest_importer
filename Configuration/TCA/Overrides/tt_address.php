<?php

use TYPO3\CMS\Core\Utility\GeneralUtility;

// Add a new column for containing the external id
$tempColumns = [
        'external_id' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:geotest_importer/Resources/Private/Language/locallang_db.xlf:tx_geotestimport.id',
            'config' => [
                'type' => 'input',
                'size' => 10,
                'max' => 4,
                'eval' => 'required,trim',
            ],
            'external' => [
                0 => [
                    'field' => 'uid'
                ]
            ]
        ],
        'fachbereich_id' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:geotest_import/Resources/Private/Language/locallang_db.xlf:tx_geotestimport.fachbereich',
                'config' => [
                        'type' => 'input',
                        'size' => '20'
                ]
        ],
		'filiale_id' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:geotest_import/Resources/Private/Language/locallang_db.xlf:tx_geotestimport.filiale',
                'config' => [
                        'type' => 'input',
                        'size' => '20'
                ]
        ],
		'verwaltungsrat' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:geotest_import/Resources/Private/Language/locallang_db.xlf:tx_geotestimport.verwaltungsrat',
                'config' => [
                        'type' => 'check',
                        'size' => '20'
                ]
        ],
		'gl' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:geotest_import/Resources/Private/Language/locallang_db.xlf:tx_geotestimport.gl',
                'config' => [
                        'type' => 'check',
                        'size' => '20'
                ]
        ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_address',
        $tempColumns
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tt_address',
        'fachbereich_id, filiale_id, verwaltungsrat, gl'
);

$connectionString = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class)->get('geotest_importer', 'connectionString');

// Add the external information to the ctrl section
$GLOBALS['TCA']['tt_address']['ctrl']['external'] = [
                        0 => [
                                'connector' => 'sql',
                                'parameters' => [
                                        
                                    "driver" => "pdo_mysql",
                                    "uri" =>  $connectionString,
                                    "query" => "SELECT * FROM tt_address",
                                    "fetchMode" => 4
										
                                ],
                                'data' => 'array',
                                'referenceUid' => 'external_id',
                                'priority' => 50,
                                'pid' => 39,
                                'group' => 'geotest_import',
                                'description' => 'Import aller GEOTEST Personen'
                        ]
                ];
// Add the external information for each column
$GLOBALS['TCA']['tt_address']['columns']['first_name']['external'] = [
        0 => [
                'field' => 'first_name'
        ]
];
$GLOBALS['TCA']['tt_address']['columns']['last_name']['external'] = [
        0 => [
                'field' => 'last_name'
        ]
];
$GLOBALS['TCA']['tt_address']['columns']['title']['external'] = [
        0 => [
                'field' => 'title'
        ]
];
$GLOBALS['TCA']['tt_address']['columns']['position']['external'] = [
        0 => [
                'field' => 'position'
        ]
];
$GLOBALS['TCA']['tt_address']['columns']['address']['external'] = [
        0 => [
                'field' => 'address'
        ]
];
$GLOBALS['TCA']['tt_address']['columns']['city']['external'] = [
        0 => [
                'field' => 'city'
        ]
];
$GLOBALS['TCA']['tt_address']['columns']['zip']['external'] = [
        0 => [
                'field' => 'zip'
        ]
];
$GLOBALS['TCA']['tt_address']['columns']['email']['external'] = [
        0 => [
                'field' => 'email'
        ]
];
$GLOBALS['TCA']['tt_address']['columns']['phone']['external'] = [
        0 => [
                'field' => 'phone'
        ]
];
$GLOBALS['TCA']['tt_address']['columns']['mobile']['external'] = [
        0 => [
                'field' => 'mobile'
        ]
];
$GLOBALS['TCA']['tt_address']['columns']['fachbereich_id']['external'] = [
        0 => [
                'field' => 'fachbereich_id'
        ]
];
$GLOBALS['TCA']['tt_address']['columns']['filiale_id']['external'] = [
        0 => [
                'field' => 'filiale_id'
        ]
];
$GLOBALS['TCA']['tt_address']['columns']['description']['external'] = [
    0 => [
        'field' => 'description'
    ]
];
$GLOBALS['TCA']['tt_address']['columns']['verwaltungsrat']['external'] = [
    0 => [
        'field' => 'verwaltungsrat'
    ]
];
$GLOBALS['TCA']['tt_address']['columns']['gl']['external'] = [
    0 => [
        'field' => 'gl'
    ]
];

