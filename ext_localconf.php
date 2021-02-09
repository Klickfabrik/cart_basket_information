<?php
defined('TYPO3_MODE') || die('Access denied.');

// Plugin: cart_products - listTemplateLayouts
/*
$GLOBALS['TYPO3_CONF_VARS']['EXT']['cart_products']['templateLayouts']['products'][] = ['Textbox & Hover', 'box_hover'];
$GLOBALS['TYPO3_CONF_VARS']['EXT']['cart_products']['templateLayouts']['products'][] = ['Textbox & Infos', 'box_infos'];
$GLOBALS['TYPO3_CONF_VARS']['EXT']['cart_products']['templateLayouts']['teaser_products'][] = ['Textbox & Hover', 'box_hover'];
$GLOBALS['TYPO3_CONF_VARS']['EXT']['cart_products']['templateLayouts']['teaser_products'][] = ['Textbox & Infos', 'box_infos'];
*/

/** @var \TYPO3\CMS\Extbase\SignalSlot\Dispatcher $signalSlotDispatcher */
$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
$signalSlotDispatcher->connect(
    \Extcode\CartProducts\Utility\ProductUtility::class,
    'changeNewCartProduct',
    \Klickfabrik\CartBasketInformation\Slots\AddInformationSlot::class,
    'addDetails'
);