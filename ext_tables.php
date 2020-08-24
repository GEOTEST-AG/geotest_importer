<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}


// Register sprite icons for new tables
/** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
        'tx_geotestimport-department',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        [
                'source' => 'EXT:geotest_importer/Resources/Public/Icons/Department.svg'
        ]
);
$iconRegistry->registerIcon(
        'tx_geotestimport-team',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        [
                'source' => 'EXT:geotest_importer/Resources/Public/Icons/Team.svg'
        ]
);