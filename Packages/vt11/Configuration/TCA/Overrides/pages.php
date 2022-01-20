<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile('vt11','Configuration/TSconfig/BackendLayouts.tsconfig','Default Backendlayouts');