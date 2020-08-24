<?php

return [
        'ctrl' => [
                'title' => 'LLL:EXT:geotest_importer/Resources/Private/Language/locallang_db.xlf:tx_geotestimport.filialen',
                'label' => 'filiale',
                'tstamp' => 'tstamp',
                'crdate' => 'crdate',
                'cruser_id' => 'cruser_id',
                'default_sortby' => 'ORDER BY filiale',
                'delete' => 'deleted',
                'enablecolumns' => [
                        'disabled' => 'hidden',
                ],
                'searchFields' => 'id,filiale',
                'typeicon_classes' => [
                        'default' => 'tx_externalimport_tut-department'
                ],
                'external' => [
                        0 => [
                                'connector' => 'csv',
                                'parameters' => [
                                        'filename' => 'EXT:geotest_importer/Resources/Private/Data/filialen.csv',
                                        'delimiter' => ";",
                                        'text_qualifier' => '',
                                        'skip_rows' => 1,
                                        'encoding' => 'utf8'
                                ],
                                'data' => 'array',
                                'referenceUid' => 'id',
                                'pid' => 39,
                                'priority' => 10,
                                'group' => 'geotest_import',
                                'description' => 'Import der Filialen'
                        ]
                ]
        ],
        'interface' => [
                'showRecordFieldList' => 'id, filiale'
        ],
        'columns' => [
                
                'id' => [
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
                                        'field' => 'id'
                                ]
                        ]
                ],
                'filiale' => [
                        'exclude' => 0,
                        'label' => 'LLL:EXT:geotest_importer/Resources/Private/Language/locallang_db.xlftx_geotestimport.filiale',
                        'config' => [
                                'type' => 'input',
                                'size' => 30,
                                'eval' => 'required,trim',
                        ],
                        'external' => [
                                0 => [
                                        'field' => 'filiale'
                                ]
                        ]
                ],
        ],
        'types' => [
                '0' => ['showitem' => 'id, filiale']
        ]
];
