<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Typo3 Vite',
    'description' => 'Vite for Typo3',
    'category' => 'fe',
    'author' => 'crazy252',
    'author_email' => 'crazy252.cg@gmail.com',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'version' => '1.1.6',
    'constraints' => [
        'depends' => [
            'typo3' => '10.0.0-13.4.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
