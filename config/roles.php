<?php

return [ 
    'super_admin' => [
        'name' => 'Super Admin',
        'modules' => [
            'users' => [
                config('permissions.user_access'), config('permissions.user_create'), config('permissions.user_show'), config('permissions.user_edit'), config('permissions.user_delete'), 
            ],
            'settings' => [
                config('permissions.setting_access'), config('permissions.setting_create'), config('permissions.setting_show'), config('permissions.setting_edit'), config('permissions.setting_delete'),
            ],
        ],
    ],
    
    'admin' => [
        'name' => 'Admin',
        'modules' => [
            'users' => [
                config('permissions.user_access'), config('permissions.user_create'), config('permissions.user_show'), config('permissions.user_edit'), 
            ],
            'settings' => [
                config('permissions.setting_access'), config('permissions.setting_create'), config('permissions.setting_show'), config('permissions.setting_edit'),
            ],
        ],
    ],
    
    'user' => [
        'name' => 'User',
        'modules' => [
            'users' => [config('permissions.user_show')],
            'settings' => [config('permissions.setting_show')],
        ],
    ],
];