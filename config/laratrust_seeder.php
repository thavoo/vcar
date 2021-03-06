<?php

return [
    'role_structure' => [
        'administrador' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            // 'profile' => 'r,u'
        ],
        'usuario' => [
            'users' => 'r,',
            // 'profile' => 'r,u'
        ],
        // 'user' => [
        //     'profile' => 'r,u'
        // ],
    ],
    'permission_structure' => [
        // 'cru_user' => [
        //     'profile' => 'c,r,u'
        // ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
