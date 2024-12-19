<?php

return [ 
    'super_admin' => [
        'name' => 'Super Admin',
        'modules' => [
            'users' => [
                config('permissions.user_create'),
                config('permissions.user_edit'),
                config('permissions.user_delete'),
                config('permissions.user_view'),
            ],
            'settings' => [
                config('permissions.settings_create'),
                config('permissions.settings_edit'),
                config('permissions.settings_delete'),
                config('permissions.settings_view'),
            ],
        ],
    ],
    
    'admin' => [
        'name' => 'Admin',
        'modules' => [
            'users' => [
                config('permissions.user_create'),
                config('permissions.user_edit'),
                config('permissions.user_view'),
            ],
            'settings' => [
                config('permissions.settings_create'),
                config('permissions.settings_edit'),
                config('permissions.settings_view'),
            ],
        ],
    ],
    
    'user' => [
        'name' => 'User',
        'modules' => [
            'users' => [config('permissions.user_view')],
            'settings' => [config('permissions.settings_view')],
        ],
    ],
];