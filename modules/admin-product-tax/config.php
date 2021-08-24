<?php

return [
    '__name' => 'admin-product-tax',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/admin-product-tax.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/admin-product-tax' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'product-tax' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libForm' => [
        'forms' => [
            'admin.product.edit' => [
                'tax' => [
                    'label' => 'Tax',
                    'type' => 'number',
                    'position' => 'left-bottom-right-left',
                    'rules' => [
                        'numeric' => [
                            'min' => 0,
                            'max' => 100
                        ]
                    ]
                ]
            ]
        ]
    ]
];
