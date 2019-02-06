<?php

namespace Dvsa\Olcs\Test;

use Dvsa\Olcs\RouteUtils\ChildRouteGenerator;

class ChildRouteGeneratorTest extends \PHPUnit\Framework\TestCase
{
    public function testGetUpdatedRoutes()
    {
        $stubDir = __DIR__ . '/child-routes-stub';
        $routes = [
            'api' => [
                'child_routes' => [
                    'test' => [
                        'child_routes' => [

                        ]
                    ]
                ]
            ]
        ];

        $expected = [
            'api' => [
                'child_routes' => [
                    'test' => [
                        'child_routes' => [
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

                        ]
                    ]
                ]
            ]
        ];

        $childRootGenerator = new ChildRouteGenerator($routes, $stubDir);
        $updatedRoutes = $childRootGenerator->getUpdatedRoutes('api');
        $this->assertSame($expected, $updatedRoutes);
    }
}