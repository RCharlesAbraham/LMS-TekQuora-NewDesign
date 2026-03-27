<?php return array (
  'concurrency' => 
  array (
    'default' => 'process',
  ),
  'activitylog' => 
  array (
    'enabled' => true,
    'delete_records_older_than_days' => 365,
    'default_log_name' => 'default',
    'default_auth_driver' => NULL,
    'subject_returns_soft_deleted_models' => false,
    'activity_model' => 'Spatie\\Activitylog\\Models\\Activity',
    'table_name' => 'activity_log',
    'database_connection' => NULL,
  ),
  'analytics' => 
  array (
    'view_id' => NULL,
    'service_account_credentials_json' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\app\\analytics/service-account-credentials.json',
    'cache_lifetime_in_minutes' => 1440,
    'cache' => 
    array (
      'store' => 'file',
    ),
  ),
  'apidoc' => 
  array (
    'type' => 'static',
    'output_folder' => 'public/docs',
    'laravel' => 
    array (
      'autoload' => false,
      'docs_url' => '/doc',
      'middleware' => 
      array (
      ),
    ),
    'router' => 'laravel',
    'storage' => 'local',
    'base_url' => 'http://uxseven.com/infix_lms3/',
    'postman' => 
    array (
      'enabled' => false,
      'name' => NULL,
      'description' => NULL,
      'auth' => NULL,
    ),
    'routes' => 
    array (
      0 => 
      array (
        'match' => 
        array (
          'domains' => 
          array (
            0 => '*',
          ),
          'prefixes' => 
          array (
            0 => 'api/*',
          ),
          'versions' => 
          array (
            0 => 'v1',
          ),
        ),
        'include' => 
        array (
        ),
        'exclude' => 
        array (
        ),
        'apply' => 
        array (
          'headers' => 
          array (
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer {token}',
          ),
          'response_calls' => 
          array (
            'methods' => 
            array (
              0 => 'GET',
            ),
            'config' => 
            array (
              'app.env' => 'documentation',
              'app.debug' => false,
            ),
            'cookies' => 
            array (
            ),
            'queryParams' => 
            array (
            ),
            'bodyParams' => 
            array (
            ),
          ),
        ),
      ),
    ),
    'strategies' => 
    array (
      'metadata' => 
      array (
        0 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\Metadata\\GetFromDocBlocks',
      ),
      'urlParameters' => 
      array (
        0 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\UrlParameters\\GetFromUrlParamTag',
      ),
      'queryParameters' => 
      array (
        0 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\QueryParameters\\GetFromQueryParamTag',
      ),
      'headers' => 
      array (
        0 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\RequestHeaders\\GetFromRouteRules',
      ),
      'bodyParameters' => 
      array (
        0 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\BodyParameters\\GetFromBodyParamTag',
      ),
      'responses' => 
      array (
        0 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\Responses\\UseTransformerTags',
        1 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\Responses\\UseResponseTag',
        2 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\Responses\\UseResponseFileTag',
        3 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\Responses\\UseApiResourceTags',
        4 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\Responses\\ResponseCalls',
      ),
    ),
    'logo' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\resources\\views/api/logo.png',
    'default_group' => 'general',
    'example_languages' => 
    array (
      0 => 'php',
      1 => 'javascript',
      2 => 'python',
    ),
    'fractal' => 
    array (
      'serializer' => NULL,
    ),
    'faker_seed' => NULL,
    'routeMatcher' => 'Mpociot\\ApiDoc\\Matching\\RouteMatcher',
  ),
  'app' => 
  array (
    'name' => 'LMS | Learning Management System',
    'env' => 'local',
    'debug' => false,
    'url' => 'http://127.0.0.1:8001',
    'frontend_url' => 'http://localhost:3000',
    'asset_url' => NULL,
    'timezone' => 'Asia/Kuala_Lumpur',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'cipher' => 'AES-256-CBC',
    'key' => 'base64:1T4330e65n1pm3YrVPAgaRws8ppVtZ4rTNcUeujl2CE=',
    'previous_keys' => 
    array (
    ),
    'maintenance' => 
    array (
      'driver' => 'file',
      'store' => 'database',
    ),
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'App\\Providers\\CustomValidationServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\AuthServiceProvider',
      25 => 'App\\Providers\\BroadcastServiceProvider',
      26 => 'App\\Providers\\EventServiceProvider',
      27 => 'App\\Providers\\RouteServiceProvider',
      28 => 'App\\Providers\\GeneralSettingsServiceProvider',
      29 => 'App\\Providers\\BackendServiceProvider',
      30 => 'Stevebauman\\Location\\LocationServiceProvider',
      31 => 'Anand\\LaravelPaytmWallet\\PaytmWalletServiceProvider',
      32 => 'App\\Providers\\TranslationServiceProvider',
      33 => 'Yajra\\DataTables\\DataTablesServiceProvider',
      34 => 'App\\Providers\\MailConfigServiceProvider',
      35 => 'App\\Providers\\RepositoryServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Toastr' => 'Brian2694\\Toastr\\Facades\\Toastr',
      'Location' => 'Stevebauman\\Location\\Facades\\Location',
      'PaytmWallet' => 'Anand\\LaravelPaytmWallet\\Facades\\PaytmWallet',
      'Paystack' => 'Unicodeveloper\\Paystack\\Facades\\Paystack',
      'PDF' => 'Barryvdh\\DomPDF\\Facade',
    ),
    'app_sync' => false,
    'demo_mode' => false,
    'has_demo_module' => false,
    'demo_theme' => false,
    'demo_reset_time' => 720,
    'is_localhost' => true,
    'allow_custom_domain' => false,
    'short_url' => '127.0.0.1:8001',
    'debug_blacklist' => 
    array (
      '_COOKIE' => 
      array (
      ),
      '_SERVER' => 
      array (
        0 => 'ALLUSERSPROFILE',
        1 => 'AMDRMSDKPATH',
        2 => 'APPDATA',
        3 => 'ChocolateyInstall',
        4 => 'ChocolateyLastPathUpdate',
        5 => 'CHROME_CRASHPAD_PIPE_NAME',
        6 => 'CommonProgramFiles',
        7 => 'CommonProgramFiles(x86)',
        8 => 'CommonProgramW6432',
        9 => 'COMPUTERNAME',
        10 => 'ComSpec',
        11 => 'CURSOR_AGENT',
        12 => 'CURSOR_EXTENSION_HOST_ROLE',
        13 => 'CURSOR_TRACE_ID',
        14 => 'CURSOR_WORKSPACE_LABEL',
        15 => 'DriverData',
        16 => 'EFC_11792_1592913036',
        17 => 'EFC_11792_344590478',
        18 => 'FORCE_COLOR',
        19 => 'HOMEDRIVE',
        20 => 'HOMEPATH',
        21 => 'JAVA_HOME',
        22 => 'LOCALAPPDATA',
        23 => 'LOGONSERVER',
        24 => 'NO_COLOR',
        25 => 'NUMBER_OF_PROCESSORS',
        26 => 'OneDrive',
        27 => 'OS',
        28 => 'Path',
        29 => 'PATHEXT',
        30 => 'PROCESSOR_ARCHITECTURE',
        31 => 'PROCESSOR_IDENTIFIER',
        32 => 'PROCESSOR_LEVEL',
        33 => 'PROCESSOR_REVISION',
        34 => 'ProgramData',
        35 => 'ProgramFiles',
        36 => 'ProgramFiles(x86)',
        37 => 'ProgramW6432',
        38 => 'PSExecutionPolicyPreference',
        39 => 'PSModulePath',
        40 => 'PUBLIC',
        41 => 'SESSIONNAME',
        42 => 'SystemDrive',
        43 => 'SystemRoot',
        44 => 'TEMP',
        45 => 'TERM',
        46 => 'TMP',
        47 => 'USERDOMAIN',
        48 => 'USERDOMAIN_ROAMINGPROFILE',
        49 => 'USERNAME',
        50 => 'USERPROFILE',
        51 => 'VSCODE_CODE_CACHE_PATH',
        52 => 'VSCODE_CRASH_REPORTER_PROCESS_TYPE',
        53 => 'VSCODE_CWD',
        54 => 'VSCODE_ESM_ENTRYPOINT',
        55 => 'VSCODE_HANDLES_UNCAUGHT_ERRORS',
        56 => 'VSCODE_IPC_HOOK',
        57 => 'VSCODE_NLS_CONFIG',
        58 => 'VSCODE_PID',
        59 => 'VSCODE_PROCESS_TITLE',
        60 => 'windir',
        61 => '_ZO_DOCTOR',
        62 => 'PHP_SELF',
        63 => 'SCRIPT_NAME',
        64 => 'SCRIPT_FILENAME',
        65 => 'PATH_TRANSLATED',
        66 => 'DOCUMENT_ROOT',
        67 => 'REQUEST_TIME_FLOAT',
        68 => 'REQUEST_TIME',
        69 => 'argv',
        70 => 'argc',
        71 => 'SHELL_VERBOSITY',
        72 => 'APP_NAME',
        73 => 'APP_ENV',
        74 => 'APP_KEY',
        75 => 'APP_DEBUG',
        76 => 'DEBUGBAR_ENABLED',
        77 => 'APP_URL',
        78 => 'APP_SYNC',
        79 => 'LOG_CHANNEL',
        80 => 'DB_CONNECTION',
        81 => 'DB_HOST',
        82 => 'DB_PORT',
        83 => 'DB_DATABASE',
        84 => 'DB_USERNAME',
        85 => 'DB_PASSWORD',
        86 => 'BROADCAST_DRIVER',
        87 => 'CACHE_DRIVER',
        88 => 'QUEUE_CONNECTION',
        89 => 'SESSION_DRIVER',
        90 => 'SESSION_LIFETIME',
        91 => 'REDIS_HOST',
        92 => 'REDIS_PASSWORD',
        93 => 'REDIS_PORT',
        94 => 'MAIL_DRIVER',
        95 => 'MAIL_HOST',
        96 => 'MAIL_PORT',
        97 => 'MAIL_USERNAME',
        98 => 'MAIL_PASSWORD',
        99 => 'MAIL_ENCRYPTION',
        100 => 'MAIL_FROM_ADDRESS',
        101 => 'MAIL_FROM_NAME',
        102 => 'AWS_ACCESS_KEY_ID',
        103 => 'AWS_SECRET_ACCESS_KEY',
        104 => 'AWS_DEFAULT_REGION',
        105 => 'AWS_BUCKET',
        106 => 'PUSHER_APP_ID',
        107 => 'PUSHER_APP_KEY',
        108 => 'PUSHER_APP_SECRET',
        109 => 'PUSHER_APP_CLUSTER',
        110 => 'MIX_PUSHER_APP_KEY',
        111 => 'MIX_PUSHER_APP_CLUSTER',
        112 => 'TIME_ZONE',
        113 => 'VIMEO_CLIENT',
        114 => 'VIMEO_SECRET',
        115 => 'VIMEO_ACCESS',
        116 => 'VIMEO_COMMON_USE',
        117 => 'VIMEO_UPLOAD_TYPE',
        118 => 'ZOOM_CLIENT_KEY',
        119 => 'ZOOM_CLIENT_SECRET',
        120 => 'BBB_SECURITY_SALT',
        121 => 'BBB_SERVER_BASE_URL',
        122 => 'PAYPAL_CLIENT_ID',
        123 => 'PAYPAL_CLIENT_SECRET',
        124 => 'IS_PAYPAL_LOCALHOST',
        125 => 'STRIPE_KEY',
        126 => 'STRIPE_SECRET',
        127 => 'RAZOR_KEY',
        128 => 'RAZOR_SECRET',
        129 => 'PAYTM_ENVIRONMENT',
        130 => 'PAYTM_MERCHANT_ID',
        131 => 'PAYTM_MERCHANT_KEY',
        132 => 'PAYTM_MERCHANT_WEBSITE',
        133 => 'PAYTM_CHANNEL',
        134 => 'PAYTM_INDUSTRY_TYPE',
        135 => 'PAYSTACK_PUBLIC_KEY',
        136 => 'PAYSTACK_SECRET_KEY',
        137 => 'PAYSTACK_PAYMENT_URL',
        138 => 'MERCHANT_EMAIL',
        139 => 'BANK_NAME',
        140 => 'BRANCH_NAME',
        141 => 'ACCOUNT_NUMBER',
        142 => 'ACCOUNT_HOLDER',
        143 => 'ACCOUNT_TYPE',
        144 => 'FIXER_ACCESS_KEY',
        145 => 'Instamojo_API_AUTH',
        146 => 'Instamojo_API_AUTH_TOKEN',
        147 => 'Instamojo_URL',
        148 => 'MIDTRANS_SERVER_KEY',
        149 => 'MIDTRANS_ENV',
        150 => 'MIDTRANS_SANITIZE',
        151 => 'MIDTRANS_3DS',
        152 => 'PAYEER_MERCHANT',
        153 => 'PAYEER_KEY',
        154 => 'AWEBER_TOKEN_KEY',
        155 => 'AWEBER_TOKEN_SECRET',
        156 => 'MailChimp_API',
        157 => 'MailChimp_Status',
        158 => 'GET_RESPONSE_API',
        159 => 'GET_RESPONSE_STATUS',
        160 => 'PESAPAL_KEY',
        161 => 'PESAPAL_SECRET',
        162 => 'PESAPAL_IS_LIVE',
        163 => 'PESAPAL_CALLBACK',
        164 => 'FORCE_HTTPS',
        165 => 'IS_LOCALHOST',
        166 => 'MEMCACHED_PERSISTENT_ID',
        167 => 'MEMCACHED_HOST',
        168 => 'MEMCACHED_PASSWORD',
        169 => 'MEMCACHED_PORT',
        170 => 'MEMCACHED_USERNAME',
        171 => 'NOCAPTCHA_SITEKEY',
        172 => 'NOCAPTCHA_SECRET',
        173 => 'NOCAPTCHA_IS_INVISIBLE',
        174 => 'NOCAPTCHA_FOR_LOGIN',
        175 => 'NOCAPTCHA_FOR_REG',
        176 => 'NOCAPTCHA_FOR_CONTACT',
        177 => 'MOBILPAY_MERCHANT_ID',
        178 => 'MOBILPAY_PUBLIC_KEY_PATH',
        179 => 'MOBILPAY_PRIVATE_KEY_PATH',
        180 => 'MOBILPAY_TEST_MODE',
        181 => 'VDOCIPHER_API_SECRET',
        182 => 'GOOGLE_CLIENT_ID',
        183 => 'GOOGLE_CLIENT_SECRET',
        184 => 'FACEBOOK_CLIENT_ID',
        185 => 'FACEBOOK_CLIENT_SECRET',
        186 => 'ALLOW_GOOGLE_LOGIN',
        187 => 'ALLOW_FACEBOOK_LOGIN',
        188 => 'BKASH_APP_KEY',
        189 => 'BKASH_APP_SECRET',
        190 => 'BKASH_USERNAME',
        191 => 'BKASH_PASSWORD',
        192 => 'IS_BKASH_LOCALHOST',
        193 => 'ACELLE_STATUS',
        194 => 'ACELLE_API_URL',
        195 => 'ACELLE_API_TOKEN',
        196 => 'FCM_SECRET_KEY',
      ),
      '_ENV' => 
      array (
        0 => 'SHELL_VERBOSITY',
        1 => 'APP_NAME',
        2 => 'APP_ENV',
        3 => 'APP_KEY',
        4 => 'APP_DEBUG',
        5 => 'DEBUGBAR_ENABLED',
        6 => 'APP_URL',
        7 => 'APP_SYNC',
        8 => 'LOG_CHANNEL',
        9 => 'DB_CONNECTION',
        10 => 'DB_HOST',
        11 => 'DB_PORT',
        12 => 'DB_DATABASE',
        13 => 'DB_USERNAME',
        14 => 'DB_PASSWORD',
        15 => 'BROADCAST_DRIVER',
        16 => 'CACHE_DRIVER',
        17 => 'QUEUE_CONNECTION',
        18 => 'SESSION_DRIVER',
        19 => 'SESSION_LIFETIME',
        20 => 'REDIS_HOST',
        21 => 'REDIS_PASSWORD',
        22 => 'REDIS_PORT',
        23 => 'MAIL_DRIVER',
        24 => 'MAIL_HOST',
        25 => 'MAIL_PORT',
        26 => 'MAIL_USERNAME',
        27 => 'MAIL_PASSWORD',
        28 => 'MAIL_ENCRYPTION',
        29 => 'MAIL_FROM_ADDRESS',
        30 => 'MAIL_FROM_NAME',
        31 => 'AWS_ACCESS_KEY_ID',
        32 => 'AWS_SECRET_ACCESS_KEY',
        33 => 'AWS_DEFAULT_REGION',
        34 => 'AWS_BUCKET',
        35 => 'PUSHER_APP_ID',
        36 => 'PUSHER_APP_KEY',
        37 => 'PUSHER_APP_SECRET',
        38 => 'PUSHER_APP_CLUSTER',
        39 => 'MIX_PUSHER_APP_KEY',
        40 => 'MIX_PUSHER_APP_CLUSTER',
        41 => 'TIME_ZONE',
        42 => 'VIMEO_CLIENT',
        43 => 'VIMEO_SECRET',
        44 => 'VIMEO_ACCESS',
        45 => 'VIMEO_COMMON_USE',
        46 => 'VIMEO_UPLOAD_TYPE',
        47 => 'ZOOM_CLIENT_KEY',
        48 => 'ZOOM_CLIENT_SECRET',
        49 => 'BBB_SECURITY_SALT',
        50 => 'BBB_SERVER_BASE_URL',
        51 => 'PAYPAL_CLIENT_ID',
        52 => 'PAYPAL_CLIENT_SECRET',
        53 => 'IS_PAYPAL_LOCALHOST',
        54 => 'STRIPE_KEY',
        55 => 'STRIPE_SECRET',
        56 => 'RAZOR_KEY',
        57 => 'RAZOR_SECRET',
        58 => 'PAYTM_ENVIRONMENT',
        59 => 'PAYTM_MERCHANT_ID',
        60 => 'PAYTM_MERCHANT_KEY',
        61 => 'PAYTM_MERCHANT_WEBSITE',
        62 => 'PAYTM_CHANNEL',
        63 => 'PAYTM_INDUSTRY_TYPE',
        64 => 'PAYSTACK_PUBLIC_KEY',
        65 => 'PAYSTACK_SECRET_KEY',
        66 => 'PAYSTACK_PAYMENT_URL',
        67 => 'MERCHANT_EMAIL',
        68 => 'BANK_NAME',
        69 => 'BRANCH_NAME',
        70 => 'ACCOUNT_NUMBER',
        71 => 'ACCOUNT_HOLDER',
        72 => 'ACCOUNT_TYPE',
        73 => 'FIXER_ACCESS_KEY',
        74 => 'Instamojo_API_AUTH',
        75 => 'Instamojo_API_AUTH_TOKEN',
        76 => 'Instamojo_URL',
        77 => 'MIDTRANS_SERVER_KEY',
        78 => 'MIDTRANS_ENV',
        79 => 'MIDTRANS_SANITIZE',
        80 => 'MIDTRANS_3DS',
        81 => 'PAYEER_MERCHANT',
        82 => 'PAYEER_KEY',
        83 => 'AWEBER_TOKEN_KEY',
        84 => 'AWEBER_TOKEN_SECRET',
        85 => 'MailChimp_API',
        86 => 'MailChimp_Status',
        87 => 'GET_RESPONSE_API',
        88 => 'GET_RESPONSE_STATUS',
        89 => 'PESAPAL_KEY',
        90 => 'PESAPAL_SECRET',
        91 => 'PESAPAL_IS_LIVE',
        92 => 'PESAPAL_CALLBACK',
        93 => 'FORCE_HTTPS',
        94 => 'IS_LOCALHOST',
        95 => 'MEMCACHED_PERSISTENT_ID',
        96 => 'MEMCACHED_HOST',
        97 => 'MEMCACHED_PASSWORD',
        98 => 'MEMCACHED_PORT',
        99 => 'MEMCACHED_USERNAME',
        100 => 'NOCAPTCHA_SITEKEY',
        101 => 'NOCAPTCHA_SECRET',
        102 => 'NOCAPTCHA_IS_INVISIBLE',
        103 => 'NOCAPTCHA_FOR_LOGIN',
        104 => 'NOCAPTCHA_FOR_REG',
        105 => 'NOCAPTCHA_FOR_CONTACT',
        106 => 'MOBILPAY_MERCHANT_ID',
        107 => 'MOBILPAY_PUBLIC_KEY_PATH',
        108 => 'MOBILPAY_PRIVATE_KEY_PATH',
        109 => 'MOBILPAY_TEST_MODE',
        110 => 'VDOCIPHER_API_SECRET',
        111 => 'GOOGLE_CLIENT_ID',
        112 => 'GOOGLE_CLIENT_SECRET',
        113 => 'FACEBOOK_CLIENT_ID',
        114 => 'FACEBOOK_CLIENT_SECRET',
        115 => 'ALLOW_GOOGLE_LOGIN',
        116 => 'ALLOW_FACEBOOK_LOGIN',
        117 => 'BKASH_APP_KEY',
        118 => 'BKASH_APP_SECRET',
        119 => 'BKASH_USERNAME',
        120 => 'BKASH_PASSWORD',
        121 => 'IS_BKASH_LOCALHOST',
        122 => 'ACELLE_STATUS',
        123 => 'ACELLE_API_URL',
        124 => 'ACELLE_API_TOKEN',
        125 => 'FCM_SECRET_KEY',
      ),
      '_POST' => 
      array (
        0 => 'password',
      ),
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'passport',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'backup' => 
  array (
    'name' => 'Backup',
    'backup' => 
    array (
      'name' => 'LMS | Learning Management System',
      'source' => 
      array (
        'files' => 
        array (
          'include' => 
          array (
            0 => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old',
          ),
          'exclude' => 
          array (
            0 => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\vendor',
            1 => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\node_modules',
          ),
          'follow_links' => false,
          'ignore_unreadable_directories' => false,
          'relative_path' => NULL,
        ),
        'databases' => 
        array (
          0 => 'mysql',
        ),
      ),
      'database_dump_compressor' => NULL,
      'database_dump_file_extension' => '',
      'destination' => 
      array (
        'filename_prefix' => '',
        'disks' => 
        array (
          0 => 'local',
        ),
      ),
      'temporary_directory' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\storage\\app/backup-temp',
      'password' => NULL,
      'encryption' => 'default',
    ),
    'notifications' => 
    array (
      'notifications' => 
      array (
        'Spatie\\Backup\\Notifications\\Notifications\\BackupHasFailed' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFound' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailed' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\BackupWasSuccessful' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\HealthyBackupWasFound' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessful' => 
        array (
          0 => 'mail',
        ),
      ),
      'notifiable' => 'Spatie\\Backup\\Notifications\\Notifiable',
      'mail' => 
      array (
        'to' => 'your@example.com',
        'from' => 
        array (
          'address' => 'admin@lms.com',
          'name' => 'System Admin',
        ),
      ),
      'slack' => 
      array (
        'webhook_url' => '',
        'channel' => NULL,
        'username' => NULL,
        'icon' => NULL,
      ),
    ),
    'monitor_backups' => 
    array (
      0 => 
      array (
        'name' => 'LMS | Learning Management System',
        'disks' => 
        array (
          0 => 'local',
        ),
        'health_checks' => 
        array (
          'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays' => 1,
          'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumStorageInMegabytes' => 5000,
        ),
      ),
    ),
    'cleanup' => 
    array (
      'strategy' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
      'default_strategy' => 
      array (
        'keep_all_backups_for_days' => 7,
        'keep_daily_backups_for_days' => 16,
        'keep_weekly_backups_for_weeks' => 8,
        'keep_monthly_backups_for_months' => 4,
        'keep_yearly_backups_for_years' => 2,
        'delete_oldest_backups_when_using_more_megabytes_than' => 5000,
      ),
    ),
  ),
  'bigbluebutton' => 
  array (
    'BBB_SECURITY_SALT' => '8cd8ef52e8e101574e400365b55e11a6',
    'BBB_SERVER_BASE_URL' => 'http://test-install.blindsidenetworks.com/bigbluebutton/',
    'hash_algorithm' => 'sha1',
    'servers' => 
    array (
      'server1' => 
      array (
        'BBB_SECURITY_SALT' => '',
        'BBB_SERVER_BASE_URL' => '',
      ),
      'server2' => 
      array (
        'BBB_SECURITY_SALT' => '',
        'BBB_SERVER_BASE_URL' => '',
      ),
    ),
    'create' => 
    array (
      'passwordLength' => 8,
      'welcomeMessage' => NULL,
      'dialNumber' => NULL,
      'maxParticipants' => 0,
      'logoutUrl' => NULL,
      'record' => false,
      'duration' => 0,
      'isBreakout' => false,
      'moderatorOnlyMessage' => NULL,
      'autoStartRecording' => false,
      'allowStartStopRecording' => true,
      'webcamsOnlyForModerator' => false,
      'logo' => NULL,
      'copyright' => NULL,
      'muteOnStart' => false,
      'lockSettingsDisableCam' => false,
      'lockSettingsDisableMic' => false,
      'lockSettingsDisablePrivateChat' => false,
      'lockSettingsDisablePublicChat' => false,
      'lockSettingsDisableNote' => false,
      'lockSettingsLockedLayout' => false,
      'lockSettingsLockOnJoin' => false,
      'lockSettingsLockOnJoinConfigurable' => false,
      'guestPolicy' => 'ALWAYS_ACCEPT',
    ),
    'join' => 
    array (
      'redirect' => true,
      'joinViaHtml5' => true,
    ),
    'getRecordings' => 
    array (
      'state' => 'any',
    ),
  ),
  'broadcasting' => 
  array (
    'default' => NULL,
    'connections' => 
    array (
      'reverb' => 
      array (
        'driver' => 'reverb',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'host' => NULL,
          'port' => 443,
          'scheme' => 'https',
          'useTLS' => true,
        ),
        'client_options' => 
        array (
        ),
      ),
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => 'f7ee8c40a4b3803e21dbf7ee8c40a4b3803e21db',
        'secret' => '5d3e0dd46823ad980cd35d3e0dd46823ad980cd3',
        'app_id' => '11591801159180',
        'options' => 
        array (
          'cluster' => 'ap2ap2',
          'useTLS' => true,
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'array' => 
      array (
        'driver' => 'array',
      ),
      'session' => 
      array (
        'driver' => 'session',
        'key' => '_cache',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => '',
        'sasl' => 
        array (
          0 => '',
          1 => '',
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '',
            'port' => '',
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => 'AKIAVJGGAKPVAF4CTMa',
        'secret' => '6AB9NNLD0aTu+kzMQkiOOcTAM0k9LpZYnAA7l4V/',
        'region' => 'ap-south-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
      'failover' => 
      array (
        'driver' => 'failover',
        'stores' => 
        array (
          0 => 'database',
          1 => 'array',
        ),
      ),
      'none' => 
      array (
        'driver' => 'null',
      ),
      'apc' => 
      array (
        'driver' => 'apc',
      ),
    ),
    'prefix' => 'lms_learning_management_system_cache',
  ),
  'captcha' => 
  array (
    'secret' => NULL,
    'sitekey' => NULL,
    'options' => 
    array (
      'timeout' => 30,
    ),
    'for_login' => 'false',
    'for_reg' => 'false',
    'for_contact' => 'false',
    'is_invisible' => 'false',
  ),
  'coinbase' => 
  array (
    'apiKey' => '',
    'apiVersion' => '',
    'webhookSecret' => '',
    'webhookJobs' => 
    array (
      'charge:created' => 'Modules\\Coinbase\\Jobs\\HandleCreatedCharge',
      'charge:confirmed' => 'Modules\\Coinbase\\Jobs\\HandleConfirmedCharge',
    ),
    'webhookModel' => 'Shakurov\\Coinbase\\Models\\CoinbaseWebhookCall',
    'name' => 'Coinbase',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'lms_old',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'lms_old',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => 'InnoDB',
        'options' => 
        array (
        ),
      ),
      'mariadb' => 
      array (
        'driver' => 'mariadb',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'lms_old',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'lms_old',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'lms_old',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
      'mysql_md' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => NULL,
        'username' => NULL,
        'password' => NULL,
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => 'InnoDB',
        'options' => 
        array (
        ),
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'options' => 
      array (
        'cluster' => 'predis',
        'prefix' => 'lms_learning_management_system_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => '',
        'port' => '6379',
        'database' => 0,
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => '',
        'port' => '6379',
        'database' => 1,
      ),
    ),
  ),
  'datatables' => 
  array (
    'search' => 
    array (
      'smart' => true,
      'multi_term' => true,
      'case_insensitive' => true,
      'use_wildcards' => false,
      'starts_with' => false,
    ),
    'index_column' => 'DT_RowIndex',
    'engines' => 
    array (
      'eloquent' => 'Yajra\\DataTables\\EloquentDataTable',
      'query' => 'Yajra\\DataTables\\QueryDataTable',
      'collection' => 'Yajra\\DataTables\\CollectionDataTable',
      'resource' => 'Yajra\\DataTables\\ApiResourceDataTable',
    ),
    'builders' => 
    array (
    ),
    'nulls_last_sql' => ':column :direction NULLS LAST',
    'error' => NULL,
    'columns' => 
    array (
      'excess' => 
      array (
        0 => 'rn',
        1 => 'row_num',
      ),
      'escape' => '*',
      'raw' => 
      array (
        0 => 'action',
      ),
      'blacklist' => 
      array (
        0 => 'password',
        1 => 'remember_token',
      ),
      'whitelist' => '*',
    ),
    'json' => 
    array (
      'header' => 
      array (
      ),
      'options' => 0,
    ),
    'callback' => 
    array (
      0 => '$',
      1 => '$.',
      2 => 'function',
    ),
  ),
  'debugbar' => 
  array (
    'enabled' => false,
    'hide_empty_tabs' => true,
    'except' => 
    array (
      0 => 'telescope*',
      1 => 'horizon*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\storage\\debugbar',
      'connection' => NULL,
      'provider' => '',
    ),
    'editor' => 'phpstorm',
    'remote_sites_path' => NULL,
    'local_sites_path' => NULL,
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'ajax_handler_auto_show' => true,
    'ajax_handler_enable_tab' => true,
    'defer_datasets' => false,
    'error_handler' => false,
    'error_level' => 32767,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => false,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => false,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => false,
      'gate' => false,
      'session' => true,
      'symfony_request' => true,
      'mail' => false,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => true,
      'livewire' => false,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'backtrace_exclude_paths' => 
        array (
        ),
        'timeline' => true,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => true,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_middleware' => 
    array (
    ),
    'route_domain' => NULL,
    'theme' => 'auto',
    'debug_backtrace_limit' => 50,
  ),
  'dompdf' => 
  array (
    'show_warnings' => false,
    'public_path' => NULL,
    'convert_entities' => true,
    'options' => 
    array (
      'font_dir' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\storage\\fonts',
      'font_cache' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\storage\\fonts',
      'temp_dir' => 'C:\\Users\\Charl\\AppData\\Local\\Temp',
      'chroot' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old',
      'allowed_protocols' => 
      array (
        'data://' => 
        array (
          'rules' => 
          array (
          ),
        ),
        'file://' => 
        array (
          'rules' => 
          array (
          ),
        ),
        'http://' => 
        array (
          'rules' => 
          array (
          ),
        ),
        'https://' => 
        array (
          'rules' => 
          array (
          ),
        ),
      ),
      'artifactPathValidation' => NULL,
      'log_output_file' => NULL,
      'enable_font_subsetting' => false,
      'pdf_backend' => 'CPDF',
      'default_media_type' => 'screen',
      'default_paper_size' => 'a4',
      'default_paper_orientation' => 'portrait',
      'default_font' => 'serif',
      'dpi' => 96,
      'enable_php' => false,
      'enable_javascript' => true,
      'enable_remote' => false,
      'allowed_remote_hosts' => NULL,
      'font_height_ratio' => 1.1,
      'enable_html5_parser' => true,
    ),
    'orientation' => 'portrait',
    'defines' => 
    array (
      'font_dir' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\public\\fonts/',
      'font_cache' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\public\\fonts/',
      'temp_dir' => 'C:\\Users\\Charl\\AppData\\Local\\Temp',
      'chroot' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old',
      'enable_font_subsetting' => false,
      'pdf_backend' => 'CPDF',
      'default_media_type' => 'screen',
      'default_paper_size' => 'a4',
      'default_font' => 'serif',
      'dpi' => 96,
      'enable_php' => false,
      'enable_javascript' => true,
      'enable_remote' => true,
      'font_height_ratio' => 1.1,
      'enable_html5_parser' => false,
    ),
  ),
  'excel' => 
  array (
    'exports' => 
    array (
      'chunk_size' => 1000,
      'pre_calculate_formulas' => false,
      'strict_null_comparison' => false,
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'line_ending' => '
',
        'use_bom' => false,
        'include_separator_line' => false,
        'excel_compatibility' => false,
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'imports' => 
    array (
      'read_only' => true,
      'ignore_empty' => false,
      'heading_row' => 
      array (
        'formatter' => 'slug',
      ),
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'escape_character' => '\\',
        'contiguous' => false,
        'input_encoding' => 'UTF-8',
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'extension_detector' => 
    array (
      'xlsx' => 'Xlsx',
      'xlsm' => 'Xlsx',
      'xltx' => 'Xlsx',
      'xltm' => 'Xlsx',
      'xls' => 'Xls',
      'xlt' => 'Xls',
      'ods' => 'Ods',
      'ots' => 'Ods',
      'slk' => 'Slk',
      'xml' => 'Xml',
      'gnumeric' => 'Gnumeric',
      'htm' => 'Html',
      'html' => 'Html',
      'csv' => 'Csv',
      'tsv' => 'Csv',
      'pdf' => 'Dompdf',
    ),
    'value_binder' => 
    array (
      'default' => 'Maatwebsite\\Excel\\DefaultValueBinder',
    ),
    'cache' => 
    array (
      'driver' => 'memory',
      'batch' => 
      array (
        'memory_limit' => 60000,
      ),
      'illuminate' => 
      array (
        'store' => NULL,
      ),
    ),
    'transactions' => 
    array (
      'handler' => 'db',
    ),
    'temporary_files' => 
    array (
      'local_path' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\storage\\framework/laravel-excel',
      'remote_disk' => NULL,
      'remote_prefix' => NULL,
      'force_resync_remote' => NULL,
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\storage\\app/public',
        'url' => 'http://127.0.0.1:8001/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => 'AKIAVJGGAKPVAF4CTMa',
        'secret' => '6AB9NNLD0aTu+kzMQkiOOcTAM0k9LpZYnAA7l4V/',
        'region' => 'ap-south-1',
        'bucket' => NULL,
        'url' => NULL,
        'visibility' => 'public',
      ),
      'google' => 
      array (
        'driver' => 'google',
        'clientId' => NULL,
        'clientSecret' => NULL,
        'redirect' => NULL,
      ),
      'dropbox' => 
      array (
        'driver' => 'dropbox',
        'key' => NULL,
        'secret' => NULL,
        'authorization_token' => NULL,
      ),
      'custom' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old/public/uploads',
      ),
      'hls' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old/public/uploads/hls',
      ),
      'root' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old',
      ),
      'contabo' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => true,
        'throw' => false,
      ),
      'do' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'endpoint' => NULL,
      ),
      'Wasabi' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'endpoint' => NULL,
      ),
      'b2' => 
      array (
        'driver' => 'b2',
        'accountId' => NULL,
        'applicationKey' => NULL,
        'bucketName' => NULL,
        'bucketId' => NULL,
      ),
    ),
    'links' => 
    array (
      'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\public\\storage' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\storage\\app/public',
    ),
    'cloud' => 's3',
  ),
  'flutterwave' => 
  array (
    'publicKey' => '',
    'secretKey' => '',
    'secretHash' => '',
  ),
  'google-analytics-4-measurement-protocol' => 
  array (
    'measurement_id' => NULL,
    'api_secret' => NULL,
    'client_id_session_key' => 'google-analytics-4-measurement-protocol.client_id',
  ),
  'google2fa' => 
  array (
    'enabled' => true,
    'lifetime' => 0,
    'keep_alive' => true,
    'auth' => 'auth',
    'guard' => '',
    'session_var' => 'google2fa',
    'otp_input' => 'one_time_password',
    'window' => 1,
    'forbid_old_passwords' => false,
    'otp_secret_column' => 'google2fa_secret',
    'view' => 'frontend.infixlmstheme.auth.google2fa',
    'error_messages' => 
    array (
      'wrong_otp' => 'The \'One Time Password\' typed was wrong.',
      'cannot_be_empty' => 'One Time Password cannot be empty.',
      'unknown' => 'An unknown error has occurred. Please try again.',
    ),
    'throw_exceptions' => true,
    'qrcode_image_backend' => 'svg',
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
    'rehash_on_login' => true,
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'laravel-ffmpeg' => 
  array (
    'ffmpeg' => 
    array (
      'binaries' => '/bin/ffmpeg',
      'threads' => 12,
    ),
    'ffprobe' => 
    array (
      'binaries' => '/bin/ffprobe',
    ),
    'timeout' => 3600,
    'log_channel' => 'stack',
    'temporary_files_root' => 'C:\\Users\\Charl\\AppData\\Local\\Temp',
    'temporary_files_encrypted_hls' => 'C:\\Users\\Charl\\AppData\\Local\\Temp',
  ),
  'laravelpwa' => 
  array (
    'name' => 'LMS | Learning Management System',
    'manifest' => 
    array (
      'name' => 'LMS | Learning Management System',
      'short_name' => 'LMS | Learning Management System',
      'start_url' => 'http://127.0.0.1:8001',
      'background_color' => '#ffffff',
      'theme_color' => '#000000',
      'display' => 'standalone',
      'orientation' => 'any',
      'status_bar' => 'black',
      'icons' => 
      array (
        '72x72' => 
        array (
          'path' => 'public/images/icons/icon-72x72.png',
          'purpose' => 'any',
        ),
        '96x96' => 
        array (
          'path' => 'public/images/icons/icon-96x96.png',
          'purpose' => 'any',
        ),
        '128x128' => 
        array (
          'path' => 'public/images/icons/icon-128x128.png',
          'purpose' => 'any',
        ),
        '144x144' => 
        array (
          'path' => 'public/images/icons/icon-144x144.png',
          'purpose' => 'any',
        ),
        '152x152' => 
        array (
          'path' => 'public/images/icons/icon-152x152.png',
          'purpose' => 'any',
        ),
        '192x192' => 
        array (
          'path' => 'public/images/icons/icon-192x192.png',
          'purpose' => 'any',
        ),
        '384x384' => 
        array (
          'path' => 'public/images/icons/icon-384x384.png',
          'purpose' => 'any',
        ),
        '512x512' => 
        array (
          'path' => 'public/images/icons/icon-512x512.png',
          'purpose' => 'any',
        ),
      ),
      'splash' => 
      array (
        '640x1136' => 'public/images/icons/splash-640x1136.png',
        '750x1334' => 'public/images/icons/splash-750x1334.png',
        '828x1792' => 'public/images/icons/splash-828x1792.png',
        '1125x2436' => 'public/images/icons/splash-1125x2436.png',
        '1242x2208' => 'public/images/icons/splash-1242x2208.png',
        '1242x2688' => 'public/images/icons/splash-1242x2688.png',
        '1536x2048' => 'public/images/icons/splash-1536x2048.png',
        '1668x2224' => 'public/images/icons/splash-1668x2224.png',
        '1668x2388' => 'public/images/icons/splash-1668x2388.png',
        '2048x2732' => 'public/images/icons/splash-2048x2732.png',
      ),
      'shortcuts' => 
      array (
        0 => 
        array (
          'name' => 'Home',
          'description' => 'Shortcut Link 1 Description',
          'url' => '/',
          'icons' => 
          array (
            'src' => '/images/icons/icon-72x72.png',
            'purpose' => 'any',
          ),
        ),
      ),
      'custom' => 
      array (
      ),
    ),
  ),
  'livewire' => 
  array (
    'class_namespace' => 'App\\Http\\Livewire',
    'view_path' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\resources\\views/livewire',
    'layout' => 'layouts.app',
    'lazy_placeholder' => NULL,
    'temporary_file_upload' => 
    array (
      'disk' => NULL,
      'rules' => NULL,
      'directory' => NULL,
      'middleware' => NULL,
      'preview_mimes' => 
      array (
        0 => 'png',
        1 => 'gif',
        2 => 'bmp',
        3 => 'svg',
        4 => 'wav',
        5 => 'mp4',
        6 => 'mov',
        7 => 'avi',
        8 => 'wmv',
        9 => 'mp3',
        10 => 'm4a',
        11 => 'jpg',
        12 => 'jpeg',
        13 => 'mpga',
        14 => 'webp',
        15 => 'wma',
      ),
      'max_upload_time' => 5,
      'cleanup' => true,
    ),
    'render_on_redirect' => false,
    'legacy_model_binding' => false,
    'inject_assets' => true,
    'navigate' => 
    array (
      'show_progress_bar' => true,
      'progress_bar_color' => '#2299dd',
    ),
    'inject_morph_markers' => true,
    'smart_wire_keys' => false,
    'pagination_theme' => 'bootstrap',
    'release_token' => 'a',
  ),
  'livewire-tables' => 
  array (
    'theme' => 'bootstrap-5',
    'cache_assets' => false,
    'inject_core_assets_enabled' => false,
    'inject_third_party_assets_enabled' => false,
    'enable_blade_directives' => false,
    'use_json_translations' => false,
    'script_base_path' => '/rappasoft/laravel-livewire-tables',
    'dateFilter' => 
    array (
      'defaultConfig' => 
      array (
        'format' => 'Y-m-d',
        'pillFormat' => 'd M Y',
      ),
    ),
    'dateTimeFilter' => 
    array (
      'defaultConfig' => 
      array (
        'format' => 'Y-m-d\\TH:i',
        'pillFormat' => 'd M Y - H:i',
      ),
    ),
    'dateRange' => 
    array (
      'defaultOptions' => 
      array (
      ),
      'defaultConfig' => 
      array (
        'allowInput' => true,
        'altFormat' => 'F j, Y',
        'ariaDateFormat' => 'F j, Y',
        'dateFormat' => 'Y-m-d',
        'earliestDate' => NULL,
        'latestDate' => NULL,
        'locale' => 'en',
      ),
    ),
    'numberRange' => 
    array (
      'defaultOptions' => 
      array (
        'min' => 0,
        'max' => 100,
      ),
      'defaultConfig' => 
      array (
        'minRange' => 0,
        'maxRange' => 100,
        'suffix' => '',
        'prefix' => '',
      ),
    ),
    'selectFilter' => 
    array (
      'defaultOptions' => 
      array (
      ),
      'defaultConfig' => 
      array (
      ),
    ),
    'multiSelectFilter' => 
    array (
      'defaultOptions' => 
      array (
      ),
      'defaultConfig' => 
      array (
      ),
    ),
    'multiSelectDropdownFilter' => 
    array (
      'defaultOptions' => 
      array (
      ),
      'defaultConfig' => 
      array (
      ),
    ),
    'events' => 
    array (
      'enableUserForEvent' => true,
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'deprecations' => 
    array (
      'channel' => 'null',
      'trace' => false,
    ),
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'daily',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\storage\\logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'log',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'scheme' => NULL,
        'url' => NULL,
        'host' => 'smtp.mailtrap.io',
        'port' => '2525',
        'username' => '7afbe3a03cb8ec',
        'password' => '5456df993a535c',
        'timeout' => NULL,
        'local_domain' => '127.0.0.1',
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'resend' => 
      array (
        'transport' => 'resend',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs -i',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
        'retry_after' => 60,
      ),
      'roundrobin' => 
      array (
        'transport' => 'roundrobin',
        'mailers' => 
        array (
          0 => 'ses',
          1 => 'postmark',
        ),
        'retry_after' => 60,
      ),
    ),
    'from' => 
    array (
      'address' => 'admin@lms.com',
      'name' => 'System Admin',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\resources\\views/vendor/mail',
      ),
    ),
    'driver' => 'sendmail',
    'host' => 'smtp.mailtrap.io',
    'port' => '2525',
    'encryption' => 'tls',
    'username' => '7afbe3a03cb8ec',
    'password' => '5456df993a535c',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'log_channel' => NULL,
    'stream' => 
    array (
      'ssl' => 
      array (
        'allow_self_signed' => true,
        'verify_peer' => false,
        'verify_peer_name' => false,
      ),
    ),
  ),
  'mobilpay' => 
  array (
    'name' => 'Mobilpay',
    'merchant_id' => '',
    'public_key_path' => '',
    'private_key_path' => '',
    'testMode' => '',
    'currency' => 'RON',
    'confirm_url' => '',
    'cancel_url' => '',
    'return_url' => '',
  ),
  'modules' => 
  array (
    'namespace' => 'Modules',
    'stubs' => 
    array (
      'enabled' => false,
      'path' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old/vendor/nwidart/laravel-modules/src/Commands/stubs',
      'files' => 
      array (
        'routes/web' => 'Routes/web.php',
        'routes/api' => 'Routes/api.php',
        'views/index' => 'Resources/views/index.blade.php',
        'views/master' => 'Resources/views/layouts/master.blade.php',
        'scaffold/config' => 'Config/config.php',
        'composer' => 'composer.json',
        'assets/js/app' => 'Resources/assets/js/app.js',
        'assets/sass/app' => 'Resources/assets/sass/app.scss',
        'webpack' => 'webpack.mix.js',
        'package' => 'package.json',
      ),
      'replacements' => 
      array (
        'routes/web' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'routes/api' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'webpack' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'json' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
        ),
        'views/index' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'views/master' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'scaffold/config' => 
        array (
          0 => 'STUDLY_NAME',
        ),
        'composer' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'VENDOR',
          3 => 'AUTHOR_NAME',
          4 => 'AUTHOR_EMAIL',
          5 => 'MODULE_NAMESPACE',
        ),
      ),
      'gitkeep' => true,
    ),
    'paths' => 
    array (
      'modules' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\Modules',
      'assets' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\public\\modules',
      'migration' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\database/migrations',
      'generator' => 
      array (
        'config' => 
        array (
          'path' => 'Config',
          'generate' => true,
        ),
        'command' => 
        array (
          'path' => 'Console',
          'generate' => true,
        ),
        'migration' => 
        array (
          'path' => 'Database/Migrations',
          'generate' => true,
        ),
        'seeder' => 
        array (
          'path' => 'Database/Seeders',
          'generate' => true,
        ),
        'factory' => 
        array (
          'path' => 'Database/factories',
          'generate' => true,
        ),
        'model' => 
        array (
          'path' => 'Entities',
          'generate' => true,
        ),
        'controller' => 
        array (
          'path' => 'Http/Controllers',
          'generate' => true,
        ),
        'filter' => 
        array (
          'path' => 'Http/Middleware',
          'generate' => true,
        ),
        'request' => 
        array (
          'path' => 'Http/Requests',
          'generate' => true,
        ),
        'provider' => 
        array (
          'path' => 'Providers',
          'generate' => true,
        ),
        'assets' => 
        array (
          'path' => 'Resources/assets',
          'generate' => false,
        ),
        'lang' => 
        array (
          'path' => 'Resources/lang',
          'generate' => false,
        ),
        'views' => 
        array (
          'path' => 'Resources/views',
          'generate' => true,
        ),
        'test' => 
        array (
          'path' => 'Tests',
          'generate' => false,
        ),
        'repository' => 
        array (
          'path' => 'Repositories',
          'generate' => false,
        ),
        'event' => 
        array (
          'path' => 'Events',
          'generate' => false,
        ),
        'listener' => 
        array (
          'path' => 'Listeners',
          'generate' => false,
        ),
        'policies' => 
        array (
          'path' => 'Policies',
          'generate' => false,
        ),
        'rules' => 
        array (
          'path' => 'Rules',
          'generate' => false,
        ),
        'jobs' => 
        array (
          'path' => 'Jobs',
          'generate' => false,
        ),
        'emails' => 
        array (
          'path' => 'Emails',
          'generate' => false,
        ),
        'notifications' => 
        array (
          'path' => 'Notifications',
          'generate' => false,
        ),
        'resource' => 
        array (
          'path' => 'Transformers',
          'generate' => false,
        ),
      ),
    ),
    'auto-discover' => 
    array (
      'migrations' => true,
      'translations' => false,
    ),
    'commands' => 
    array (
      0 => 'Nwidart\\Modules\\Commands\\Actions\\CheckLangCommand',
      1 => 'Nwidart\\Modules\\Commands\\Actions\\DisableCommand',
      2 => 'Nwidart\\Modules\\Commands\\Actions\\DumpCommand',
      3 => 'Nwidart\\Modules\\Commands\\Actions\\EnableCommand',
      4 => 'Nwidart\\Modules\\Commands\\Actions\\InstallCommand',
      5 => 'Nwidart\\Modules\\Commands\\Actions\\ListCommand',
      6 => 'Nwidart\\Modules\\Commands\\Actions\\ModelPruneCommand',
      7 => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
      8 => 'Nwidart\\Modules\\Commands\\Actions\\ModuleDeleteCommand',
      9 => 'Nwidart\\Modules\\Commands\\Actions\\UnUseCommand',
      10 => 'Nwidart\\Modules\\Commands\\Actions\\UpdateCommand',
      11 => 'Nwidart\\Modules\\Commands\\Actions\\UseCommand',
      12 => 'Nwidart\\Modules\\Commands\\Database\\MigrateCommand',
      13 => 'Nwidart\\Modules\\Commands\\Database\\MigrateRefreshCommand',
      14 => 'Nwidart\\Modules\\Commands\\Database\\MigrateResetCommand',
      15 => 'Nwidart\\Modules\\Commands\\Database\\MigrateRollbackCommand',
      16 => 'Nwidart\\Modules\\Commands\\Database\\MigrateStatusCommand',
      17 => 'Nwidart\\Modules\\Commands\\Database\\SeedCommand',
      18 => 'Nwidart\\Modules\\Commands\\Make\\ActionMakeCommand',
      19 => 'Nwidart\\Modules\\Commands\\Make\\CastMakeCommand',
      20 => 'Nwidart\\Modules\\Commands\\Make\\ChannelMakeCommand',
      21 => 'Nwidart\\Modules\\Commands\\Make\\ClassMakeCommand',
      22 => 'Nwidart\\Modules\\Commands\\Make\\CommandMakeCommand',
      23 => 'Nwidart\\Modules\\Commands\\Make\\ComponentClassMakeCommand',
      24 => 'Nwidart\\Modules\\Commands\\Make\\ComponentViewMakeCommand',
      25 => 'Nwidart\\Modules\\Commands\\Make\\ControllerMakeCommand',
      26 => 'Nwidart\\Modules\\Commands\\Make\\EventMakeCommand',
      27 => 'Nwidart\\Modules\\Commands\\Make\\EventProviderMakeCommand',
      28 => 'Nwidart\\Modules\\Commands\\Make\\EnumMakeCommand',
      29 => 'Nwidart\\Modules\\Commands\\Make\\ExceptionMakeCommand',
      30 => 'Nwidart\\Modules\\Commands\\Make\\FactoryMakeCommand',
      31 => 'Nwidart\\Modules\\Commands\\Make\\InterfaceMakeCommand',
      32 => 'Nwidart\\Modules\\Commands\\Make\\HelperMakeCommand',
      33 => 'Nwidart\\Modules\\Commands\\Make\\JobMakeCommand',
      34 => 'Nwidart\\Modules\\Commands\\Make\\ListenerMakeCommand',
      35 => 'Nwidart\\Modules\\Commands\\Make\\MailMakeCommand',
      36 => 'Nwidart\\Modules\\Commands\\Make\\MiddlewareMakeCommand',
      37 => 'Nwidart\\Modules\\Commands\\Make\\MigrationMakeCommand',
      38 => 'Nwidart\\Modules\\Commands\\Make\\ModelMakeCommand',
      39 => 'Nwidart\\Modules\\Commands\\Make\\ModuleMakeCommand',
      40 => 'Nwidart\\Modules\\Commands\\Make\\NotificationMakeCommand',
      41 => 'Nwidart\\Modules\\Commands\\Make\\ObserverMakeCommand',
      42 => 'Nwidart\\Modules\\Commands\\Make\\PolicyMakeCommand',
      43 => 'Nwidart\\Modules\\Commands\\Make\\ProviderMakeCommand',
      44 => 'Nwidart\\Modules\\Commands\\Make\\RepositoryMakeCommand',
      45 => 'Nwidart\\Modules\\Commands\\Make\\RequestMakeCommand',
      46 => 'Nwidart\\Modules\\Commands\\Make\\ResourceMakeCommand',
      47 => 'Nwidart\\Modules\\Commands\\Make\\RouteProviderMakeCommand',
      48 => 'Nwidart\\Modules\\Commands\\Make\\RuleMakeCommand',
      49 => 'Nwidart\\Modules\\Commands\\Make\\ScopeMakeCommand',
      50 => 'Nwidart\\Modules\\Commands\\Make\\SeedMakeCommand',
      51 => 'Nwidart\\Modules\\Commands\\Make\\ServiceMakeCommand',
      52 => 'Nwidart\\Modules\\Commands\\Make\\TraitMakeCommand',
      53 => 'Nwidart\\Modules\\Commands\\Make\\TestMakeCommand',
      54 => 'Nwidart\\Modules\\Commands\\Make\\ViewMakeCommand',
      55 => 'Nwidart\\Modules\\Commands\\Publish\\PublishCommand',
      56 => 'Nwidart\\Modules\\Commands\\Publish\\PublishConfigurationCommand',
      57 => 'Nwidart\\Modules\\Commands\\Publish\\PublishMigrationCommand',
      58 => 'Nwidart\\Modules\\Commands\\Publish\\PublishTranslationCommand',
      59 => 'Nwidart\\Modules\\Commands\\ComposerUpdateCommand',
      60 => 'Nwidart\\Modules\\Commands\\LaravelModulesV6Migrator',
      61 => 'Nwidart\\Modules\\Commands\\ModuleDiscoverCommand',
      62 => 'Nwidart\\Modules\\Commands\\ModuleClearCompiledCommand',
      63 => 'Nwidart\\Modules\\Commands\\SetupCommand',
      64 => 'Nwidart\\Modules\\Commands\\UpdatePhpunitCoverage',
      65 => 'Nwidart\\Modules\\Commands\\Database\\MigrateFreshCommand',
    ),
    'scan' => 
    array (
      'enabled' => false,
      'paths' => 
      array (
        0 => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\modules/*',
      ),
    ),
    'composer' => 
    array (
      'vendor' => 'nwidart',
      'author' => 
      array (
        'name' => 'Nicolas Widart',
        'email' => 'n.widart@gmail.com',
      ),
    ),
    'register' => 
    array (
      'translations' => true,
      'files' => 'register',
    ),
    'activators' => 
    array (
      'file' => 
      array (
        'class' => 'Nwidart\\Modules\\Activators\\FileActivator',
        'statuses-file' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\modules_statuses.json',
      ),
    ),
    'activator' => 'file',
    'cache' => 
    array (
      'enabled' => true,
      'key' => 'laravel-modules',
      'lifetime' => 525600,
    ),
  ),
  'mollie' => 
  array (
    'key' => '',
    'webhooks' => 
    array (
      'enabled' => false,
      'path' => '/webhooks/mollie',
      'middleware' => 
      array (
        0 => 'Mollie\\Laravel\\Middleware\\ValidatesWebhookSignatures',
      ),
      'dispatcher' => 'Mollie\\Laravel\\EventWebhookDispatcher',
      'signing_secrets' => NULL,
    ),
  ),
  'paystack' => 
  array (
    'name' => 'PayStack',
    'publicKey' => 'pk_test_89020010dfdf46267926033e3a998f2bc914b6fb',
    'secretKey' => 'sk_test_8d981fa649a98d876e1c03c799106bb336582e50',
    'paymentUrl' => 'https://api.paystack.co',
    'merchantEmail' => 'spn19@spondonit.com',
  ),
  'pdf' => 
  array (
    'format' => 'A4',
    'author' => 'Infix LMS',
    'subject' => '',
    'keywords' => '',
    'creator' => 'Infix LMS',
    'display_mode' => 'fullpage',
  ),
  'pesapal' => 
  array (
    'name' => 'Pesapal',
    'consumer_key' => 'aa',
    'consumer_secret' => 'bb',
    'is_live' => true,
    'callback_url' => 'http://localhost/pesapal/success',
  ),
  'purifier' => 
  array (
    'encoding' => 'UTF-8',
    'finalize' => true,
    'ignoreNonStrings' => false,
    'cachePath' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\storage\\app/purifier',
    'cacheFileMode' => 493,
    'settings' => 
    array (
      'default' => 
      array (
        'HTML.Doctype' => 'HTML 4.01 Transitional',
        'HTML.Allowed' => 'div,b,strong,i,em,u,a[href|title],ul,ol,li,p[style],br,span[style],img[width|height|alt|src]',
        'CSS.AllowedProperties' => 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align',
        'AutoFormat.AutoParagraph' => true,
        'AutoFormat.RemoveEmpty' => true,
      ),
      'test' => 
      array (
        'Attr.EnableID' => 'true',
      ),
      'youtube' => 
      array (
        'HTML.SafeIframe' => 'true',
        'URI.SafeIframeRegexp' => '%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/)%',
      ),
      'custom_definition' => 
      array (
        'id' => 'html5-definitions',
        'rev' => 1,
        'debug' => false,
        'elements' => 
        array (
          0 => 
          array (
            0 => 'section',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          1 => 
          array (
            0 => 'nav',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          2 => 
          array (
            0 => 'article',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          3 => 
          array (
            0 => 'aside',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          4 => 
          array (
            0 => 'header',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          5 => 
          array (
            0 => 'footer',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          6 => 
          array (
            0 => 'address',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          7 => 
          array (
            0 => 'hgroup',
            1 => 'Block',
            2 => 'Required: h1 | h2 | h3 | h4 | h5 | h6',
            3 => 'Common',
          ),
          8 => 
          array (
            0 => 'figure',
            1 => 'Block',
            2 => 'Optional: (figcaption, Flow) | (Flow, figcaption) | Flow',
            3 => 'Common',
          ),
          9 => 
          array (
            0 => 'figcaption',
            1 => 'Inline',
            2 => 'Flow',
            3 => 'Common',
          ),
          10 => 
          array (
            0 => 'video',
            1 => 'Block',
            2 => 'Optional: (source, Flow) | (Flow, source) | Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
              'width' => 'Length',
              'height' => 'Length',
              'poster' => 'URI',
              'preload' => 'Enum#auto,metadata,none',
              'controls' => 'Bool',
            ),
          ),
          11 => 
          array (
            0 => 'source',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
            ),
          ),
          12 => 
          array (
            0 => 's',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          13 => 
          array (
            0 => 'var',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          14 => 
          array (
            0 => 'sub',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          15 => 
          array (
            0 => 'sup',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          16 => 
          array (
            0 => 'mark',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          17 => 
          array (
            0 => 'wbr',
            1 => 'Inline',
            2 => 'Empty',
            3 => 'Core',
          ),
          18 => 
          array (
            0 => 'ins',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
          19 => 
          array (
            0 => 'del',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            0 => 'iframe',
            1 => 'allowfullscreen',
            2 => 'Bool',
          ),
          1 => 
          array (
            0 => 'table',
            1 => 'height',
            2 => 'Text',
          ),
          2 => 
          array (
            0 => 'td',
            1 => 'border',
            2 => 'Text',
          ),
          3 => 
          array (
            0 => 'th',
            1 => 'border',
            2 => 'Text',
          ),
          4 => 
          array (
            0 => 'tr',
            1 => 'width',
            2 => 'Text',
          ),
          5 => 
          array (
            0 => 'tr',
            1 => 'height',
            2 => 'Text',
          ),
          6 => 
          array (
            0 => 'tr',
            1 => 'border',
            2 => 'Text',
          ),
        ),
      ),
      'custom_attributes' => 
      array (
        0 => 
        array (
          0 => 'a',
          1 => 'target',
          2 => 'Enum#_blank,_self,_target,_top',
        ),
      ),
      'custom_elements' => 
      array (
        0 => 
        array (
          0 => 'u',
          1 => 'Inline',
          2 => 'Inline',
          3 => 'Common',
        ),
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'AKIAVJGGAKPVAF4CTMa',
        'secret' => '6AB9NNLD0aTu+kzMQkiOOcTAM0k9LpZYnAA7l4V/',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'ap-south-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
      'deferred' => 
      array (
        'driver' => 'deferred',
      ),
      'failover' => 
      array (
        'driver' => 'failover',
        'connections' => 
        array (
          0 => 'database',
          1 => 'deferred',
        ),
      ),
    ),
    'batching' => 
    array (
      'database' => 'mysql',
      'table' => 'job_batches',
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'resend' => 
    array (
      'key' => NULL,
    ),
    'ses' => 
    array (
      'key' => 'AKIAVJGGAKPVAF4CTMa',
      'secret' => '6AB9NNLD0aTu+kzMQkiOOcTAM0k9LpZYnAA7l4V/',
      'region' => 'ap-south-1',
    ),
    'slack' => 
    array (
      'notifications' => 
      array (
        'bot_user_oauth_token' => NULL,
        'channel' => NULL,
      ),
    ),
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'facebook' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => 'http://127.0.0.1:8001/oauth/facebook/callback',
    ),
    'twitter' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'linkedin' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'google' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => 'http://127.0.0.1:8001/oauth/google/callback',
    ),
    'google-drive' => 
    array (
      'client_id' => NULL,
      'auth_uri' => 'https://accounts.google.com/o/oauth2/auth',
      'token_uri' => 'https://accounts.google.com/o/oauth2/token',
      'auth_provider_x509_cert_url' => 'https://www.googleapis.com/oauth2/v1/certs',
      'client_secret' => NULL,
      'redirect' => NULL,
      'redirect_uris' => 
      array (
        0 => 
        array (
          0 => NULL,
        ),
      ),
    ),
    'paytm' => 
    array (
      'env' => 'local',
      'merchant_id' => 'mmHPCS25768835616700',
      'merchant_key' => '&77cn6xIrDf#89TK',
      'merchant_website' => 'WEBSTAGING',
      'channel' => 'WEB',
      'industry_type' => 'Retail',
    ),
    'fcm' => 
    array (
      'key' => 'AAAArJGEBgs:APA91bEkFj7pB6Zn3BMok4IIDLJ9wmna7iHzPyZxSpcxkGPXhF7Nv-u-0gdzVbkGiP_OE8sreDAoILGJBhN8VHFitEPgkfbVvzRVPnbuB4JHj26HC9PZ4caMpHZ4FVxGMqCXc3P7WFCp',
    ),
    'google_calendar' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect_uri' => NULL,
      'scopes' => 
      array (
        0 => 'https://www.googleapis.com/auth/userinfo.email',
        1 => 'https://www.googleapis.com/auth/calendar',
      ),
      'approval_prompt' => 'force',
      'access_type' => 'offline',
      'include_granted_scopes' => true,
    ),
    'google_meet' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect_uri' => NULL,
      'scopes' => 
      array (
        0 => 'https://www.googleapis.com/auth/userinfo.email',
        1 => 'https://www.googleapis.com/auth/calendar',
      ),
      'approval_prompt' => 'force',
      'access_type' => 'offline',
      'include_granted_scopes' => true,
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'lms_learning_management_system_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
    'partitioned' => false,
  ),
  'snappy' => 
  array (
    'pdf' => 
    array (
      'enabled' => true,
      'binary' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\vendor\\wemersonjanuario\\wkhtmltopdf-windows\\bin\\64bit\\wkhtmltopdf',
      'timeout' => false,
      'options' => 
      array (
      ),
      'env' => 
      array (
      ),
    ),
    'image' => 
    array (
      'enabled' => true,
      'binary' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\vendor/h4cc/wkhtmltoimage-amd64/bin/wkhtmltopdf-amd64',
      'timeout' => false,
      'options' => 
      array (
      ),
      'env' => 
      array (
      ),
    ),
  ),
  'social' => 
  array (
    'allowFacebook' => 'false',
    'allowGoogle' => 'false',
  ),
  'sslcommerz' => 
  array (
    'projectPath' => NULL,
    'apiDomain' => '',
    'apiCredentials' => 
    array (
      'store_id' => '',
      'store_password' => '',
    ),
    'apiUrl' => 
    array (
      'make_payment' => '/gwprocess/v4/api.php',
      'transaction_status' => '/validator/api/merchantTransIDvalidationAPI.php',
      'order_validate' => '/validator/api/validationserverAPI.php',
      'refund_payment' => '/validator/api/merchantTransIDvalidationAPI.php',
      'refund_status' => '/validator/api/merchantTransIDvalidationAPI.php',
    ),
    'connect_from_localhost' => '',
    'success_url' => '/payment/sslcommerz/success',
    'failed_url' => '/payment/sslcommerz/fail',
    'cancel_url' => '/payment/sslcommerz/cancel',
    'ipn_url' => '/payment/sslcommerz/ipn',
  ),
  'toastr' => 
  array (
    'options' => 
    array (
      'closeButton' => true,
      'debug' => false,
      'newestOnTop' => true,
      'progressBar' => false,
      'positionClass' => 'toast-top-right',
      'preventDuplicates' => true,
      'onclick' => NULL,
      'showDuration' => '300',
      'hideDuration' => '1000',
      'timeOut' => '5000',
      'extendedTimeOut' => '1000',
      'showEasing' => 'swing',
      'hideEasing' => 'linear',
      'showMethod' => 'fadeIn',
      'hideMethod' => 'fadeOut',
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\resources\\views',
    ),
    'compiled' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\storage\\framework\\views',
  ),
  'vimeo' => 
  array (
    'default' => 'main',
    'connections' => 
    array (
      'main' => 
      array (
        'client_id' => 'your-client-id',
        'client_secret' => 'your-client-secret',
        'access_token' => NULL,
        'common_use' => 'false',
        'upload_type' => 'List',
      ),
      'alternative' => 
      array (
        'client_id' => 'your-alt-client-id',
        'client_secret' => 'your-alt-client-secret',
        'access_token' => NULL,
        'common_use' => false,
        'upload_type' => 'List',
      ),
    ),
  ),
  'zoom' => 
  array (
    'name' => 'Zoom',
    'baseUrl' => 'https://api.zoom.us/v2/',
    'token_life' => 604800,
    'authentication_method' => 'jwt',
    'max_api_calls_per_request' => '5',
  ),
  'blade-heroicons' => 
  array (
    'prefix' => 'heroicon',
    'fallback' => '',
    'class' => '',
    'attributes' => 
    array (
    ),
  ),
  'blade-icons' => 
  array (
    'sets' => 
    array (
    ),
    'class' => '',
    'attributes' => 
    array (
    ),
    'fallback' => '',
    'components' => 
    array (
      'disabled' => false,
      'default' => 'icon',
    ),
  ),
  'passport' => 
  array (
    'guard' => 'web',
    'private_key' => NULL,
    'public_key' => NULL,
    'connection' => NULL,
    'client_uuids' => false,
    'personal_access_client' => 
    array (
      'id' => NULL,
      'secret' => NULL,
    ),
  ),
  'flare' => 
  array (
    'key' => NULL,
    'flare_middleware' => 
    array (
      0 => 'Spatie\\FlareClient\\FlareMiddleware\\RemoveRequestIp',
      1 => 'Spatie\\FlareClient\\FlareMiddleware\\AddGitInformation',
      2 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddNotifierName',
      3 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddEnvironmentInformation',
      4 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddExceptionInformation',
      5 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddDumps',
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddLogs' => 
      array (
        'maximum_number_of_collected_logs' => 200,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddQueries' => 
      array (
        'maximum_number_of_collected_queries' => 200,
        'report_query_bindings' => true,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddJobs' => 
      array (
        'max_chained_job_reporting_depth' => 5,
      ),
      6 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddContext',
      7 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddExceptionHandledStatus',
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestBodyFields' => 
      array (
        'censor_fields' => 
        array (
          0 => 'password',
          1 => 'password_confirmation',
        ),
      ),
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestHeaders' => 
      array (
        'headers' => 
        array (
          0 => 'API-KEY',
          1 => 'Authorization',
          2 => 'Cookie',
          3 => 'Set-Cookie',
          4 => 'X-CSRF-TOKEN',
          5 => 'X-XSRF-TOKEN',
        ),
      ),
    ),
    'send_logs_as_events' => true,
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'auto',
    'enable_share_button' => true,
    'register_commands' => false,
    'solution_providers' => 
    array (
      0 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\BadMethodCallSolutionProvider',
      1 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\MergeConflictSolutionProvider',
      2 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\UndefinedPropertySolutionProvider',
      3 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\IncorrectValetDbCredentialsSolutionProvider',
      4 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingAppKeySolutionProvider',
      5 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\DefaultDbNameSolutionProvider',
      6 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\TableNotFoundSolutionProvider',
      7 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingImportSolutionProvider',
      8 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\InvalidRouteActionSolutionProvider',
      9 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\ViewNotFoundSolutionProvider',
      10 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\RunningLaravelDuskInProductionProvider',
      11 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingColumnSolutionProvider',
      12 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownValidationSolutionProvider',
      13 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingMixManifestSolutionProvider',
      14 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingViteManifestSolutionProvider',
      15 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingLivewireComponentSolutionProvider',
      16 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UndefinedViewVariableSolutionProvider',
      17 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\GenericLaravelExceptionSolutionProvider',
      18 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\OpenAiSolutionProvider',
      19 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\SailNetworkSolutionProvider',
      20 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownMysql8CollationSolutionProvider',
      21 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownMariadbCollationSolutionProvider',
    ),
    'ignored_solution_providers' => 
    array (
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
    'settings_file_path' => '',
    'recorders' => 
    array (
      0 => 'Spatie\\LaravelIgnition\\Recorders\\DumpRecorder\\DumpRecorder',
      1 => 'Spatie\\LaravelIgnition\\Recorders\\JobRecorder\\JobRecorder',
      2 => 'Spatie\\LaravelIgnition\\Recorders\\LogRecorder\\LogRecorder',
      3 => 'Spatie\\LaravelIgnition\\Recorders\\QueryRecorder\\QueryRecorder',
    ),
    'open_ai_key' => NULL,
    'with_stack_frame_arguments' => true,
    'argument_reducers' => 
    array (
      0 => 'Spatie\\Backtrace\\Arguments\\Reducers\\BaseTypeArgumentReducer',
      1 => 'Spatie\\Backtrace\\Arguments\\Reducers\\ArrayArgumentReducer',
      2 => 'Spatie\\Backtrace\\Arguments\\Reducers\\StdClassArgumentReducer',
      3 => 'Spatie\\Backtrace\\Arguments\\Reducers\\EnumArgumentReducer',
      4 => 'Spatie\\Backtrace\\Arguments\\Reducers\\ClosureArgumentReducer',
      5 => 'Spatie\\Backtrace\\Arguments\\Reducers\\DateTimeArgumentReducer',
      6 => 'Spatie\\Backtrace\\Arguments\\Reducers\\DateTimeZoneArgumentReducer',
      7 => 'Spatie\\Backtrace\\Arguments\\Reducers\\SymphonyRequestArgumentReducer',
      8 => 'Spatie\\LaravelIgnition\\ArgumentReducers\\ModelArgumentReducer',
      9 => 'Spatie\\LaravelIgnition\\ArgumentReducers\\CollectionArgumentReducer',
      10 => 'Spatie\\Backtrace\\Arguments\\Reducers\\StringableArgumentReducer',
    ),
  ),
  'datatables-buttons' => 
  array (
    'namespace' => 
    array (
      'base' => 'DataTables',
      'model' => 'App\\Models',
    ),
    'pdf_generator' => 'snappy',
    'snappy' => 
    array (
      'options' => 
      array (
        'no-outline' => true,
        'margin-left' => '0',
        'margin-right' => '0',
        'margin-top' => '10mm',
        'margin-bottom' => '10mm',
      ),
      'orientation' => 'landscape',
    ),
    'parameters' => 
    array (
      'dom' => 'Bfrtip',
      'order' => 
      array (
        0 => 
        array (
          0 => 0,
          1 => 'desc',
        ),
      ),
      'buttons' => 
      array (
        0 => 'excel',
        1 => 'csv',
        2 => 'pdf',
        3 => 'print',
        4 => 'reset',
        5 => 'reload',
      ),
    ),
    'generator' => 
    array (
      'columns' => 'id,add your columns,created_at,updated_at',
      'buttons' => 'excel,csv,pdf,print,reset,reload',
      'dom' => 'Bfrtip',
    ),
  ),
  'datatables-html' => 
  array (
    'namespace' => 'LaravelDataTables',
    'table' => 
    array (
      'class' => 'table',
      'id' => 'dataTableBuilder',
    ),
    'script' => 'datatables::script',
    'editor' => 'datatables::editor',
  ),
  'datatables-export' => 
  array (
    'method' => 'lazy',
    'chunk' => 1000,
    'disk' => 'local',
    's3_disk' => '',
    'mail_from' => 'admin@lms.com',
    'default_date_format' => 'yyyy-mm-dd',
    'date_formats' => 
    array (
      0 => 'mm/dd/yyyy',
      1 => 'yyyy-mm-dd',
      2 => 'dd/mm/yyyy',
      3 => 'd/m/yy',
      4 => 'd-m-yy',
      5 => 'd-m',
      6 => 'm-yy',
      7 => 'mm-dd-yy',
      8 => 'd-mmm-yy',
      9 => 'd-mmm',
      10 => 'mmm-yy',
      11 => 'm/d/yy h:mm',
      12 => 'd/m/yy h:mm',
      13 => 'h:mm AM/PM',
      14 => 'h:mm:ss AM/PM',
      15 => 'h:mm',
      16 => 'h:mm:ss',
      17 => 'mm:ss',
      18 => 'h:mm:ss',
      19 => 'i:s.S',
      20 => 'h:mm:ss;@',
      21 => 'yyyy/mm/dd;@',
      22 => 'm/d/yy h:mm',
      23 => 'd/m/yy h:mm',
      24 => 'h:mm AM/PM',
      25 => 'h:mm:ss AM/PM',
      26 => 'h:mm',
      27 => 'h:mm:ss',
      28 => 'mm:ss',
      29 => 'h:mm:ss',
      30 => 'i:s.S',
      31 => 'h:mm:ss;@',
    ),
    'text_formats' => 
    array (
      0 => '@',
      1 => 'General',
    ),
    'purge' => 
    array (
      'days' => 1,
    ),
  ),
  'browser-detect' => 
  array (
    'cache' => 
    array (
      'interval' => 10080,
      'prefix' => 'bd4_',
    ),
    'security' => 
    array (
      'max-header-length' => 2048,
    ),
  ),
  'location' => 
  array (
    'driver' => 'Stevebauman\\Location\\Drivers\\IpApi',
    'fallbacks' => 
    array (
      0 => 'Stevebauman\\Location\\Drivers\\Ip2locationio',
      1 => 'Stevebauman\\Location\\Drivers\\IpInfo',
      2 => 'Stevebauman\\Location\\Drivers\\GeoPlugin',
      3 => 'Stevebauman\\Location\\Drivers\\MaxMind',
    ),
    'position' => 'Stevebauman\\Location\\Position',
    'http' => 
    array (
      'timeout' => 3,
      'connect_timeout' => 3,
    ),
    'testing' => 
    array (
      'ip' => '66.102.0.0',
      'enabled' => true,
    ),
    'maxmind' => 
    array (
      'license_key' => NULL,
      'web' => 
      array (
        'enabled' => false,
        'user_id' => NULL,
        'locales' => 
        array (
          0 => 'en',
        ),
        'options' => 
        array (
          'host' => 'geoip.maxmind.com',
        ),
      ),
      'local' => 
      array (
        'type' => 'city',
        'path' => 'C:\\Users\\Charl\\LMS-TekQuora-NewDesign\\Infixlms-old\\database\\maxmind/GeoLite2-City.mmdb',
        'url' => 'https://download.maxmind.com/app/geoip_download_by_token?edition_id=GeoLite2-City&license_key=&suffix=tar.gz',
      ),
    ),
    'ip_api' => 
    array (
      'token' => NULL,
    ),
    'ipinfo' => 
    array (
      'token' => NULL,
    ),
    'ipdata' => 
    array (
      'token' => NULL,
    ),
    'ip2locationio' => 
    array (
      'token' => NULL,
    ),
    'kloudend' => 
    array (
      'token' => NULL,
    ),
  ),
  'datatables-fractal' => 
  array (
    'includes' => 'include',
    'serializer' => 'League\\Fractal\\Serializer\\DataArraySerializer',
  ),
  'appearance' => 
  array (
    'name' => 'Appearance',
  ),
  'bankpayment' => 
  array (
    'name' => 'BankPayment',
  ),
  'blog' => 
  array (
    'name' => 'Blog',
  ),
  'certificate' => 
  array (
    'name' => 'Certificate',
  ),
  'coupons' => 
  array (
    'name' => 'Coupons',
  ),
  'coursesetting' => 
  array (
    'name' => 'CourseSetting',
  ),
  'footersetting' => 
  array (
    'name' => 'FooterSetting',
  ),
  'frontendmanage' => 
  array (
    'name' => 'FrontendManage',
  ),
  'instamojo' => 
  array (
    'name' => 'Instamojo',
  ),
  'localization' => 
  array (
    'name' => 'Localization',
  ),
  'midtrans' => 
  array (
    'name' => 'Midtrans',
  ),
  'modulemanager' => 
  array (
    'name' => 'ModuleManager',
  ),
  'newsletter' => 
  array (
    'name' => 'Newsletter',
  ),
  'notificationsetup' => 
  array (
    'name' => 'NotificationSetup',
  ),
  'offlinepayment' => 
  array (
    'name' => 'OfflinePayment',
  ),
  'payeer' => 
  array (
    'name' => 'Payeer',
  ),
  'payment' => 
  array (
    'name' => 'Payment',
  ),
  'paymentmethodsetting' => 
  array (
    'name' => 'PaymentMethodSetting',
  ),
  'paytm' => 
  array (
    'name' => 'Paytm',
  ),
  'popupcontent' => 
  array (
    'name' => 'PopupContent',
  ),
  'quiz' => 
  array (
    'name' => 'Quiz',
  ),
  'razorpay' => 
  array (
    'name' => 'Razorpay',
  ),
  'rolepermission' => 
  array (
    'name' => 'RolePermission',
  ),
  'scorm' => 
  array (
    'name' => 'SCORM',
  ),
  'setting' => 
  array (
    'name' => 'Setting',
  ),
  'sidebarmanager' => 
  array (
    'name' => 'SidebarManager',
  ),
  'studentsetting' => 
  array (
    'name' => 'StudentSetting',
  ),
  'systemsetting' => 
  array (
    'name' => 'SystemSetting',
  ),
  'vdocipher' => 
  array (
    'name' => 'VdoCipher',
  ),
  'vimeosetting' => 
  array (
    'name' => 'VimeoSetting',
  ),
  'virtualclass' => 
  array (
    'name' => 'VirtualClass',
  ),
  'wallet' => 
  array (
    'name' => 'Wallet',
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
    'trust_project' => 'always',
  ),
);
