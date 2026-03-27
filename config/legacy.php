<?php

return [
    'base_url' => env('LEGACY_BASE_URL', 'http://127.0.0.1:8000/old'),
    'timeout' => (int) env('LEGACY_TIMEOUT', 5),
    'retries' => (int) env('LEGACY_RETRIES', 1),

    // "http" is recommended. Keep "include" only as temporary bridge.
    'bridge_driver' => env('LEGACY_BRIDGE_DRIVER', 'http'),

    // Relative to project root; used only by include bridge.
    'include_allow_root' => env('LEGACY_INCLUDE_ALLOW_ROOT', 'public/old'),

    'endpoints' => [
        'dashboard' => env('LEGACY_DASHBOARD_ENDPOINT', '/api/dashboard.php'),
        'users' => env('LEGACY_USERS_ENDPOINT', '/api/users.php'),
    ],

    'scripts' => [
        'dashboard' => env('LEGACY_DASHBOARD_SCRIPT', 'public/old/api/dashboard.php'),
        'users' => env('LEGACY_USERS_SCRIPT', 'public/old/api/users.php'),
    ],

    'features' => [
        'dashboard_native' => (bool) env('LEGACY_FEATURE_DASHBOARD_NATIVE', true),
        'users_native' => (bool) env('LEGACY_FEATURE_USERS_NATIVE', true),
    ],
];
