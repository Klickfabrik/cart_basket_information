<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "cart_basket_information"
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 *
 * Thanks to:
 * Tobias Kummer <tobi@tobik.ch>
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Cart - Basket Information',
    'description' => 'Allow to display more information into the basket',
    'category' => 'plugin',
    'author' => 'Marc Finnern',
    'author_email' => 'typo3@klickfabrik.net',
    'state' => 'stable',
    'uploadfolder' => 1,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-9.5.99',
            'cart' => '6.0.0',
            'cart_products' => '2.3.0'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
