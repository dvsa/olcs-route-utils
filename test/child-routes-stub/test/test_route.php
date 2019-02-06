<?php
return [
    'registration' => [
        'type' => 'segment',
        'options' => [
            'route' => ':action[/:id][/]',
            'constraints' => [
                'action' => '(add|edit)',
                'id' => '[0-9]+'
            ],
            'defaults' => [
                'controller' => 'controller',
                'action' => 'index',
            ]
        ]
    ]
];
