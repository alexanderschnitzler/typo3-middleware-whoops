<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Whoops',
    'description' => 'An extension that registers middlewares/whoops as a TYPO3 middleware',
    'category' => 'middleware',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'Alexander Schnitzler',
    'author_email' => '',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
