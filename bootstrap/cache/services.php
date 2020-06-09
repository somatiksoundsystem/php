<?php return array(
    'providers' =>
        array(
            0 => 'Illuminate\\Bus\\BusServiceProvider',
            1 => 'Illuminate\\Cache\\CacheServiceProvider',
            2 => 'Illuminate\\Cookie\\CookieServiceProvider',
            3 => 'Illuminate\\Database\\DatabaseServiceProvider',
            4 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
            5 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
            6 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
            7 => 'Illuminate\\Hashing\\HashServiceProvider',
            8 => 'Illuminate\\Mail\\MailServiceProvider',
            9 => 'Illuminate\\Notifications\\NotificationServiceProvider',
            10 => 'Illuminate\\Pagination\\PaginationServiceProvider',
            11 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
            12 => 'Illuminate\\Queue\\QueueServiceProvider',
            13 => 'Illuminate\\Redis\\RedisServiceProvider',
            14 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
            15 => 'Illuminate\\Session\\SessionServiceProvider',
            16 => 'Illuminate\\Translation\\TranslationServiceProvider',
            17 => 'Illuminate\\Validation\\ValidationServiceProvider',
            18 => 'Illuminate\\View\\ViewServiceProvider',
            19 => 'Carbon\\Laravel\\ServiceProvider',
            20 => 'App\\Providers\\AppServiceProvider',
            21 => 'App\\Providers\\RouteServiceProvider',
        ),
    'eager' =>
        array(
            0 => 'Illuminate\\Cookie\\CookieServiceProvider',
            1 => 'Illuminate\\Database\\DatabaseServiceProvider',
            2 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
            3 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
            4 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
            5 => 'Illuminate\\Notifications\\NotificationServiceProvider',
            6 => 'Illuminate\\Pagination\\PaginationServiceProvider',
            7 => 'Illuminate\\Session\\SessionServiceProvider',
            8 => 'Illuminate\\View\\ViewServiceProvider',
            9 => 'Carbon\\Laravel\\ServiceProvider',
            10 => 'App\\Providers\\AppServiceProvider',
            11 => 'App\\Providers\\RouteServiceProvider',
        ),
    'deferred' =>
        array(
            'Illuminate\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
            'Illuminate\\Contracts\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
            'Illuminate\\Contracts\\Bus\\QueueingDispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
            'cache' => 'Illuminate\\Cache\\CacheServiceProvider',
            'cache.store' => 'Illuminate\\Cache\\CacheServiceProvider',
            'cache.psr6' => 'Illuminate\\Cache\\CacheServiceProvider',
            'memcached.connector' => 'Illuminate\\Cache\\CacheServiceProvider',
            'hash' => 'Illuminate\\Hashing\\HashServiceProvider',
            'hash.driver' => 'Illuminate\\Hashing\\HashServiceProvider',
            'mail.manager' => 'Illuminate\\Mail\\MailServiceProvider',
            'mailer' => 'Illuminate\\Mail\\MailServiceProvider',
            'Illuminate\\Mail\\Markdown' => 'Illuminate\\Mail\\MailServiceProvider',
            'Illuminate\\Contracts\\Pipeline\\Hub' => 'Illuminate\\Pipeline\\PipelineServiceProvider',
            'queue' => 'Illuminate\\Queue\\QueueServiceProvider',
            'queue.worker' => 'Illuminate\\Queue\\QueueServiceProvider',
            'queue.listener' => 'Illuminate\\Queue\\QueueServiceProvider',
            'queue.failer' => 'Illuminate\\Queue\\QueueServiceProvider',
            'queue.connection' => 'Illuminate\\Queue\\QueueServiceProvider',
            'redis' => 'Illuminate\\Redis\\RedisServiceProvider',
            'redis.connection' => 'Illuminate\\Redis\\RedisServiceProvider',
            'auth.password' => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
            'auth.password.broker' => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
            'translator' => 'Illuminate\\Translation\\TranslationServiceProvider',
            'translation.loader' => 'Illuminate\\Translation\\TranslationServiceProvider',
            'validator' => 'Illuminate\\Validation\\ValidationServiceProvider',
            'validation.presence' => 'Illuminate\\Validation\\ValidationServiceProvider',
        ),
    'when' =>
        array(
            'Illuminate\\Bus\\BusServiceProvider' =>
                array(),
            'Illuminate\\Cache\\CacheServiceProvider' =>
                array(),
            'Illuminate\\Hashing\\HashServiceProvider' =>
                array(),
            'Illuminate\\Mail\\MailServiceProvider' =>
                array(),
            'Illuminate\\Pipeline\\PipelineServiceProvider' =>
                array(),
            'Illuminate\\Queue\\QueueServiceProvider' =>
                array(),
            'Illuminate\\Redis\\RedisServiceProvider' =>
                array(),
            'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider' =>
                array(),
            'Illuminate\\Translation\\TranslationServiceProvider' =>
                array(),
            'Illuminate\\Validation\\ValidationServiceProvider' =>
                array(),
        ),
);
