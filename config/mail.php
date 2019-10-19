<?php

return [

    

    'driver' => env('MAIL_DRIVER', 'smtp'),

   

    'host' => env('MAIL_HOST', 'mailtrap.io'),

   

    'port' => env('MAIL_PORT', 2525),

   

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    

    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    
    'username' => env('MAIL_USERNAME'),

    'password' => env('MAIL_PASSWORD'),

   
    'sendmail' => '/usr/sbin/sendmail -bs',

   

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Log Channel
    |--------------------------------------------------------------------------
    |
    | If you are using the "log" driver, you may specify the logging channel
    | if you prefer to keep mail messages separate from other log entries
    | for simpler reading. Otherwise, the default channel will be used.
    |
    */

    'log_channel' => env('MAIL_LOG_CHANNEL'),

];
