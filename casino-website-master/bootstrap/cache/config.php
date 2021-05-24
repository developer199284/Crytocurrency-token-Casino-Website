<?php return array (
  'app' => 
  array (
    'version' => '1.9.7',
    'name' => 'Crypto Casino',
    'env' => 'production',
    'debug' => false,
    'log' => 'single',
    'url' => 'http://localhost',
    'asset_url' => NULL,
    'force_ssl' => '1',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:9n9bEqZK/RyhJAQn0sXjJmQl5k88kvco3driedy3t6A=',
    'cipher' => 'AES-256-CBC',
    'hash' => '5d4ec2645bd71a383fa33bf6b11e9f01',
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
      22 => 'App\\Providers\\AppServiceProvider',
      23 => 'App\\Providers\\AuthServiceProvider',
      24 => 'App\\Providers\\BroadcastServiceProvider',
      25 => 'App\\Providers\\EventServiceProvider',
      26 => 'App\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
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
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
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
        'driver' => 'token',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
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
  ),
  'broadcasting' => 
  array (
    'default' => 'pusher',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => '',
          'encrypted' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
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
        'path' => 'D:\\casino-website-master\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'gitdownloadcasino',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'gitdownloadcasino',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => 'InnoDB',
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'gitdownloadcasino',
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
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'gitdownloadcasino',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => 6379,
        'database' => 0,
      ),
      'cache' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => 6379,
        'database' => 1,
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\casino-website-master\\storage\\app',
      ),
      'logs' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\casino-website-master\\storage\\logs',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\casino-website-master\\storage\\app/public',
        'url' => '/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
      ),
    ),
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
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'D:\\casino-website-master\\storage\\logs/laravel.log',
        'level' => 'emergency',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'D:\\casino-website-master\\storage\\logs/laravel.log',
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
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'smtp.mailtrap.io',
    'port' => '2525',
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Crypto Casino',
    ),
    'encryption' => '',
    'username' => 'ro.cryptogroup@protonmail.com',
    'password' => 'BatPisicaRau123',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'D:\\casino-website-master\\resources\\views/vendor/mail',
      ),
    ),
    'log_channel' => NULL,
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
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\Models\\User',
      'key' => NULL,
      'secret' => NULL,
      'webhook' => 
      array (
        'secret' => NULL,
        'tolerance' => 300,
      ),
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'D:\\casino-website-master\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'crypto_casino_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'settings' => 
  array (
    'theme' => 'dark-purple',
    'format' => 
    array (
      'number' => 
      array (
        'decimals' => 2,
        'decimal_point' => '46',
        'thousands_separator' => '44',
      ),
    ),
    'accounts' => 
    array (
      'initial_balance' => '1000',
    ),
    'users' => 
    array (
      'email_verification' => false,
    ),
    'bots' => 
    array (
      'play_frequency' => '1',
      'select_count_min' => '100',
      'select_count_max' => '10000',
    ),
    'referral' => 
    array (
      'referee_sign_up_credits' => '50',
      'referrer_sign_up_credits' => '100',
      'referrer_deposit_pct' => '10',
      'referrer_game_bet_pct' => '20',
    ),
    'gtm_container_id' => '',
    'recaptcha' => 
    array (
      'public_key' => '',
      'secret_key' => '',
    ),
    'backend' => 
    array (
      'dashboard' => 
      array (
        'cache_time' => 60,
      ),
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'D:\\casino-website-master\\resources\\views',
    ),
    'compiled' => 'D:\\casino-website-master\\storage\\framework\\views',
  ),
  'debug-server' => 
  array (
    'host' => 'tcp://127.0.0.1:9912',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'game-american-bingo' => 
  array (
    'version' => '1.0.0',
    'min_bet' => '1',
    'max_bet' => '50',
    'bet_change_amount' => '1',
    'default_bet_amount' => '1',
    'payouts' => 
    array (
      1 => '5',
      2 => '5',
      3 => '10',
      4 => '25',
    ),
  ),
  'game-blackjack' => 
  array (
    'version' => '1.1.1',
    'min_bet' => '1',
    'max_bet' => '50',
    'bet_change_amount' => '1',
    'default_bet_amount' => '1',
  ),
  'game-dice' => 
  array (
    'version' => '1.1.1',
    'min_bet' => '1',
    'max_bet' => '50',
    'bet_change_amount' => '10',
    'min_win_chance' => '1',
    'max_win_chance' => '98',
    'house_edge' => '1',
    'default_bet_amount' => '1',
    'animation_duration' => 0.3,
  ),
  'game-keno' => 
  array (
    'version' => '1.0.0',
    'min_bet' => '1',
    'max_bet' => '50',
    'bet_change_amount' => '1',
    'default_bet_amount' => '1',
    'draw_count' => '20',
    'payouts' => 
    array (
      1 => '0',
      2 => '0',
      3 => '0',
      4 => '1',
      5 => '5',
      6 => '10',
      7 => '25',
      8 => '125',
      9 => '500',
      10 => '1000',
    ),
  ),
  'game-multi-slots' => 
  array (
    'version' => '1.0.0',
    'titles' => 
    array (
      0 => 'Crypto Slots',
      1 => 'Rust Weapons',
      2 => 'Rust Weapons - cloned',
      3 => 'Crypto Slots - cloned',
    ),
    'min_bet' => 
    array (
      0 => '1',
      1 => '5',
      2 => '1',
      3 => '1',
    ),
    'max_bet' => 
    array (
      0 => '500',
      1 => '500',
      2 => '500',
      3 => '500',
    ),
    'bet_change_amount' => 
    array (
      0 => '1',
      1 => '6',
      2 => '1',
      3 => '1',
    ),
    'default_bet' => 
    array (
      0 => '1',
      1 => '5',
      2 => '1',
      3 => '1',
    ),
    'default_lines' => 
    array (
      0 => '10',
      1 => '5',
      2 => '10',
      3 => '10',
    ),
    'max_lines' => 
    array (
      0 => '20',
      1 => '10',
      2 => '20',
      3 => '20',
    ),
    'symbols' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'filename' => 'eth.png',
          'scatter' => false,
          'wild' => false,
          'w1' => '0',
          'w1t' => 'x',
          'w2' => '0',
          'w2t' => 'x',
          'w3' => '10',
          'w3t' => 'x',
          'w4' => '20',
          'w4t' => 'x',
          'w5' => '50',
          'w5t' => 'x',
          'idx' => 0,
          'el' => 
          array (
          ),
        ),
        1 => 
        array (
          'filename' => 'btc.png',
          'scatter' => false,
          'wild' => true,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => '0',
          'w2t' => 'x',
          'w3' => '50',
          'w3t' => 'x',
          'w4' => '100',
          'w4t' => 'x',
          'w5' => '150',
          'w5t' => 'x',
          'idx' => 1,
          'el' => 
          array (
          ),
        ),
        2 => 
        array (
          'filename' => 'nxt.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => '0',
          'w2t' => 'x',
          'w3' => '5',
          'w3t' => 'x',
          'w4' => '15',
          'w4t' => 'x',
          'w5' => '20',
          'w5t' => 'x',
          'idx' => 2,
          'el' => 
          array (
          ),
        ),
        3 => 
        array (
          'filename' => 'zec.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '10',
          'w3t' => 'x',
          'w4' => '20',
          'w4t' => 'x',
          'w5' => '30',
          'w5t' => 'x',
          'idx' => 3,
          'el' => 
          array (
          ),
        ),
        4 => 
        array (
          'filename' => 'ltc.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '20',
          'w3t' => 'x',
          'w4' => '30',
          'w4t' => 'x',
          'w5' => '50',
          'w5t' => 'x',
          'idx' => 4,
          'el' => 
          array (
          ),
        ),
        5 => 
        array (
          'filename' => 'ppc.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => '2',
          'w2t' => 'x',
          'w3' => '5',
          'w3t' => 'x',
          'w4' => '10',
          'w4t' => 'x',
          'w5' => '15',
          'w5t' => 'x',
          'idx' => 5,
          'el' => 
          array (
          ),
        ),
        6 => 
        array (
          'filename' => 'ledger.png',
          'scatter' => true,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '0',
          'w3t' => 'x',
          'w4' => '50',
          'w4t' => 'x',
          'w5' => '100',
          'w5t' => 'x',
          'idx' => 6,
          'el' => 
          array (
          ),
        ),
        7 => 
        array (
          'filename' => 'xmr.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => '0',
          'w2t' => 'x',
          'w3' => '15',
          'w3t' => 'x',
          'w4' => '25',
          'w4t' => 'x',
          'w5' => '45',
          'w5t' => 'x',
          'idx' => 7,
          'el' => 
          array (
          ),
        ),
        8 => 
        array (
          'filename' => 'xrp.png',
          'scatter' => false,
          'wild' => false,
          'w1' => '0',
          'w1t' => 'x',
          'w2' => '0',
          'w2t' => 'x',
          'w3' => '15',
          'w3t' => 'x',
          'w4' => '30',
          'w4t' => 'x',
          'w5' => '50',
          'w5t' => 'x',
          'idx' => 8,
          'el' => 
          array (
          ),
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'filename' => 'sym-1566867232-6865-22.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '10',
          'w3t' => 'x',
          'w4' => '20',
          'w4t' => 'x',
          'w5' => '50',
          'w5t' => 'x',
          'idx' => '0',
          'el' => 
          array (
          ),
        ),
        1 => 
        array (
          'filename' => 'sym-1566867239-1893-27.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '50',
          'w3t' => 'x',
          'w4' => '100',
          'w4t' => 'x',
          'w5' => '150',
          'w5t' => 'x',
          'idx' => '1',
          'el' => 
          array (
          ),
        ),
        2 => 
        array (
          'filename' => 'sym-1566867241-3853-29.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '5',
          'w3t' => 'x',
          'w4' => '15',
          'w4t' => 'x',
          'w5' => '20',
          'w5t' => 'x',
          'idx' => '2',
          'el' => 
          array (
          ),
        ),
        3 => 
        array (
          'filename' => 'sym-1566867243-7495-29.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '10',
          'w3t' => 'x',
          'w4' => '20',
          'w4t' => 'x',
          'w5' => '30',
          'w5t' => 'x',
          'idx' => '3',
          'el' => 
          array (
          ),
        ),
        4 => 
        array (
          'filename' => 'sym-1566867245-5438-30.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '20',
          'w3t' => 'x',
          'w4' => '30',
          'w4t' => 'x',
          'w5' => '50',
          'w5t' => 'x',
          'idx' => '4',
          'el' => 
          array (
          ),
        ),
        5 => 
        array (
          'filename' => 'sym-1566867247-8274-20.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '5',
          'w3t' => 'x',
          'w4' => '10',
          'w4t' => 'x',
          'w5' => '15',
          'w5t' => 'x',
          'idx' => '5',
          'el' => 
          array (
          ),
        ),
        6 => 
        array (
          'filename' => 'sym-1566867249-9793-25.png',
          'scatter' => true,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => 0,
          'w3t' => 'x',
          'w4' => '50',
          'w4t' => 'x',
          'w5' => '100',
          'w5t' => 'x',
          'idx' => '6',
          'el' => 
          array (
          ),
        ),
        7 => 
        array (
          'filename' => 'sym-1566867254-5819-18.png',
          'scatter' => false,
          'wild' => true,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '15',
          'w3t' => 'x',
          'w4' => '30',
          'w4t' => 'x',
          'w5' => '50',
          'w5t' => 'x',
          'idx' => '7',
          'el' => 
          array (
          ),
        ),
        8 => 
        array (
          'filename' => 'sym-1566867256-6831-13.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '15',
          'w3t' => 'x',
          'w4' => '25',
          'w4t' => 'x',
          'w5' => '45',
          'w5t' => 'x',
          'idx' => '8',
          'el' => 
          array (
          ),
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'filename' => 'sym-1566867232-6865-22.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '10',
          'w3t' => 'x',
          'w4' => '20',
          'w4t' => 'x',
          'w5' => '50',
          'w5t' => 'x',
          'idx' => '0',
          'el' => 
          array (
          ),
        ),
        1 => 
        array (
          'filename' => 'sym-1566867239-1893-27.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '50',
          'w3t' => 'x',
          'w4' => '100',
          'w4t' => 'x',
          'w5' => '150',
          'w5t' => 'x',
          'idx' => '1',
          'el' => 
          array (
          ),
        ),
        2 => 
        array (
          'filename' => 'sym-1566867241-3853-29.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '5',
          'w3t' => 'x',
          'w4' => '15',
          'w4t' => 'x',
          'w5' => '20',
          'w5t' => 'x',
          'idx' => '2',
          'el' => 
          array (
          ),
        ),
        3 => 
        array (
          'filename' => 'sym-1566867243-7495-29.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '10',
          'w3t' => 'x',
          'w4' => '20',
          'w4t' => 'x',
          'w5' => '30',
          'w5t' => 'x',
          'idx' => '3',
          'el' => 
          array (
          ),
        ),
        4 => 
        array (
          'filename' => 'sym-1566867245-5438-30.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '20',
          'w3t' => 'x',
          'w4' => '30',
          'w4t' => 'x',
          'w5' => '50',
          'w5t' => 'x',
          'idx' => '4',
          'el' => 
          array (
          ),
        ),
        5 => 
        array (
          'filename' => 'sym-1566867247-8274-20.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '5',
          'w3t' => 'x',
          'w4' => '10',
          'w4t' => 'x',
          'w5' => '15',
          'w5t' => 'x',
          'idx' => '5',
          'el' => 
          array (
          ),
        ),
        6 => 
        array (
          'filename' => 'sym-1566867249-9793-25.png',
          'scatter' => true,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => 0,
          'w3t' => 'x',
          'w4' => '50',
          'w4t' => 'x',
          'w5' => '100',
          'w5t' => 'x',
          'idx' => '6',
          'el' => 
          array (
          ),
        ),
        7 => 
        array (
          'filename' => 'sym-1566867254-5819-18.png',
          'scatter' => false,
          'wild' => true,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '15',
          'w3t' => 'x',
          'w4' => '30',
          'w4t' => 'x',
          'w5' => '50',
          'w5t' => 'x',
          'idx' => '7',
          'el' => 
          array (
          ),
        ),
        8 => 
        array (
          'filename' => 'sym-1566867256-6831-13.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '15',
          'w3t' => 'x',
          'w4' => '25',
          'w4t' => 'x',
          'w5' => '45',
          'w5t' => 'x',
          'idx' => '8',
          'el' => 
          array (
          ),
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'filename' => 'eth.png',
          'scatter' => false,
          'wild' => false,
          'w1' => '0',
          'w1t' => 'x',
          'w2' => '0',
          'w2t' => 'x',
          'w3' => '10',
          'w3t' => 'x',
          'w4' => '20',
          'w4t' => 'x',
          'w5' => '50',
          'w5t' => 'x',
          'idx' => 0,
          'el' => 
          array (
          ),
        ),
        1 => 
        array (
          'filename' => 'btc.png',
          'scatter' => false,
          'wild' => true,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => '0',
          'w2t' => 'x',
          'w3' => '50',
          'w3t' => 'x',
          'w4' => '100',
          'w4t' => 'x',
          'w5' => '150',
          'w5t' => 'x',
          'idx' => 1,
          'el' => 
          array (
          ),
        ),
        2 => 
        array (
          'filename' => 'nxt.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => '0',
          'w2t' => 'x',
          'w3' => '5',
          'w3t' => 'x',
          'w4' => '15',
          'w4t' => 'x',
          'w5' => '20',
          'w5t' => 'x',
          'idx' => 2,
          'el' => 
          array (
          ),
        ),
        3 => 
        array (
          'filename' => 'zec.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '10',
          'w3t' => 'x',
          'w4' => '20',
          'w4t' => 'x',
          'w5' => '30',
          'w5t' => 'x',
          'idx' => 3,
          'el' => 
          array (
          ),
        ),
        4 => 
        array (
          'filename' => 'ltc.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '20',
          'w3t' => 'x',
          'w4' => '30',
          'w4t' => 'x',
          'w5' => '50',
          'w5t' => 'x',
          'idx' => 4,
          'el' => 
          array (
          ),
        ),
        5 => 
        array (
          'filename' => 'ppc.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => '2',
          'w2t' => 'x',
          'w3' => '5',
          'w3t' => 'x',
          'w4' => '10',
          'w4t' => 'x',
          'w5' => '15',
          'w5t' => 'x',
          'idx' => 5,
          'el' => 
          array (
          ),
        ),
        6 => 
        array (
          'filename' => 'ledger.png',
          'scatter' => true,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '0',
          'w3t' => 'x',
          'w4' => '50',
          'w4t' => 'x',
          'w5' => '100',
          'w5t' => 'x',
          'idx' => 6,
          'el' => 
          array (
          ),
        ),
        7 => 
        array (
          'filename' => 'xmr.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => '0',
          'w2t' => 'x',
          'w3' => '15',
          'w3t' => 'x',
          'w4' => '25',
          'w4t' => 'x',
          'w5' => '45',
          'w5t' => 'x',
          'idx' => 7,
          'el' => 
          array (
          ),
        ),
        8 => 
        array (
          'filename' => 'xrp.png',
          'scatter' => false,
          'wild' => false,
          'w1' => '0',
          'w1t' => 'x',
          'w2' => '0',
          'w2t' => 'x',
          'w3' => '15',
          'w3t' => 'x',
          'w4' => '30',
          'w4t' => 'x',
          'w5' => '50',
          'w5t' => 'x',
          'idx' => 8,
          'el' => 
          array (
          ),
        ),
      ),
    ),
    'reels' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 0,
          1 => 1,
          2 => 2,
          3 => 3,
          4 => 4,
          5 => 5,
          6 => 6,
          7 => 7,
          8 => 8,
        ),
        1 => 
        array (
          0 => 1,
          1 => 2,
          2 => 3,
          3 => 4,
          4 => 5,
          5 => 6,
          6 => 7,
          7 => 8,
          8 => 0,
        ),
        2 => 
        array (
          0 => 2,
          1 => 3,
          2 => 4,
          3 => 5,
          4 => 6,
          5 => 7,
          6 => 8,
          7 => 0,
          8 => 1,
        ),
        3 => 
        array (
          0 => 3,
          1 => 4,
          2 => 5,
          3 => 6,
          4 => 7,
          5 => 8,
          6 => 0,
          7 => 1,
          8 => 2,
        ),
        4 => 
        array (
          0 => 4,
          1 => 5,
          2 => 6,
          3 => 7,
          4 => 8,
          5 => 0,
          6 => 1,
          7 => 2,
          8 => 3,
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 0,
          1 => 7,
          2 => 6,
          3 => 6,
        ),
        1 => 
        array (
          0 => 1,
          1 => 8,
          2 => 5,
          3 => 4,
        ),
        2 => 
        array (
          0 => 2,
          1 => 7,
          2 => 4,
          3 => 2,
        ),
        3 => 
        array (
          0 => 3,
          1 => 6,
          2 => 3,
          3 => 0,
        ),
        4 => 
        array (
          0 => 4,
          1 => 5,
          2 => 2,
          3 => 1,
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          0 => 0,
          1 => 7,
          2 => 6,
          3 => 6,
        ),
        1 => 
        array (
          0 => 1,
          1 => 8,
          2 => 5,
          3 => 4,
        ),
        2 => 
        array (
          0 => 2,
          1 => 7,
          2 => 4,
          3 => 2,
        ),
        3 => 
        array (
          0 => 3,
          1 => 6,
          2 => 3,
          3 => 0,
        ),
        4 => 
        array (
          0 => 4,
          1 => 5,
          2 => 2,
          3 => 1,
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          0 => 0,
          1 => 1,
          2 => 2,
          3 => 3,
          4 => 4,
          5 => 5,
          6 => 6,
          7 => 7,
          8 => 8,
        ),
        1 => 
        array (
          0 => 1,
          1 => 2,
          2 => 3,
          3 => 4,
          4 => 5,
          5 => 6,
          6 => 7,
          7 => 8,
          8 => 0,
        ),
        2 => 
        array (
          0 => 2,
          1 => 3,
          2 => 4,
          3 => 5,
          4 => 6,
          5 => 7,
          6 => 8,
          7 => 0,
          8 => 1,
        ),
        3 => 
        array (
          0 => 3,
          1 => 4,
          2 => 5,
          3 => 6,
          4 => 7,
          5 => 8,
          6 => 0,
          7 => 1,
          8 => 2,
        ),
        4 => 
        array (
          0 => 4,
          1 => 5,
          2 => 6,
          3 => 7,
          4 => 8,
          5 => 0,
          6 => 1,
          7 => 2,
          8 => 3,
        ),
      ),
    ),
  ),
  'game-roulette' => 
  array (
    'version' => '1.2.1',
    'min_bet' => '1',
    'max_bet' => '50',
    'bet_change_amount' => '1',
    'default_bet_amount' => '1',
  ),
  'game-slots' => 
  array (
    'version' => '1.3.0',
    'min_bet' => '1',
    'max_bet' => '500',
    'bet_change_amount' => '1',
    'default_bet' => '1',
    'default_lines' => '10',
    'symbols' => 
    array (
      0 => 
      array (
        'filename' => 'apple.png',
        'scatter' => false,
        'wild' => false,
        'w1' => '0',
        'w1t' => 'x',
        'w2' => '2',
        'w2t' => 'x',
        'w3' => '5',
        'w3t' => 'x',
        'w4' => '25',
        'w4t' => 'x',
        'w5' => '100',
        'w5t' => 'x',
        'idx' => 0,
        'el' => 
        array (
        ),
      ),
      1 => 
      array (
        'filename' => 'bar.png',
        'scatter' => false,
        'wild' => true,
        'w1' => 0,
        'w1t' => 'x',
        'w2' => '10',
        'w2t' => 'x',
        'w3' => '100',
        'w3t' => 'x',
        'w4' => '200',
        'w4t' => 'x',
        'w5' => '500',
        'w5t' => 'x',
        'idx' => 1,
        'el' => 
        array (
        ),
      ),
      2 => 
      array (
        'filename' => 'bell.png',
        'scatter' => false,
        'wild' => false,
        'w1' => 0,
        'w1t' => 'x',
        'w2' => '2',
        'w2t' => 'x',
        'w3' => '5',
        'w3t' => 'x',
        'w4' => '25',
        'w4t' => 'x',
        'w5' => '100',
        'w5t' => 'x',
        'idx' => 2,
        'el' => 
        array (
        ),
      ),
      3 => 
      array (
        'filename' => 'cherry.png',
        'scatter' => false,
        'wild' => false,
        'w1' => 0,
        'w1t' => 'x',
        'w2' => 0,
        'w2t' => 'x',
        'w3' => '50',
        'w3t' => 'x',
        'w4' => '150',
        'w4t' => 'x',
        'w5' => '500',
        'w5t' => 'x',
        'idx' => 3,
        'el' => 
        array (
        ),
      ),
      4 => 
      array (
        'filename' => 'lemon.png',
        'scatter' => false,
        'wild' => false,
        'w1' => 0,
        'w1t' => 'x',
        'w2' => 0,
        'w2t' => 'x',
        'w3' => '30',
        'w3t' => 'x',
        'w4' => '100',
        'w4t' => 'x',
        'w5' => '200',
        'w5t' => 'x',
        'idx' => 4,
        'el' => 
        array (
        ),
      ),
      5 => 
      array (
        'filename' => 'orange.png',
        'scatter' => false,
        'wild' => false,
        'w1' => 0,
        'w1t' => 'x',
        'w2' => 0,
        'w2t' => 'x',
        'w3' => '10',
        'w3t' => 'x',
        'w4' => '40',
        'w4t' => 'x',
        'w5' => '160',
        'w5t' => 'x',
        'idx' => 5,
        'el' => 
        array (
        ),
      ),
      6 => 
      array (
        'filename' => 'plum.png',
        'scatter' => false,
        'wild' => false,
        'w1' => 0,
        'w1t' => 'x',
        'w2' => 0,
        'w2t' => 'x',
        'w3' => '10',
        'w3t' => 'x',
        'w4' => '30',
        'w4t' => 'x',
        'w5' => '120',
        'w5t' => 'x',
        'idx' => 6,
        'el' => 
        array (
        ),
      ),
      7 => 
      array (
        'filename' => 'seven.png',
        'scatter' => true,
        'wild' => false,
        'w1' => 0,
        'w1t' => 'x',
        'w2' => '2',
        'w2t' => 'x',
        'w3' => '5',
        'w3t' => 'x',
        'w4' => '10',
        'w4t' => 'x',
        'w5' => '100',
        'w5t' => 'x',
        'idx' => 7,
        'el' => 
        array (
        ),
      ),
      8 => 
      array (
        'filename' => 'water-melon.png',
        'scatter' => false,
        'wild' => false,
        'w1' => '0',
        'w1t' => 'x',
        'w2' => '0',
        'w2t' => 'x',
        'w3' => '5',
        'w3t' => 'x',
        'w4' => '25',
        'w4t' => 'x',
        'w5' => '100',
        'w5t' => 'x',
        'idx' => 8,
        'el' => 
        array (
        ),
      ),
    ),
    'reels' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
      ),
      1 => 
      array (
        0 => 1,
        1 => 2,
        2 => 3,
        3 => 4,
        4 => 5,
        5 => 6,
        6 => 7,
        7 => 8,
        8 => 0,
      ),
      2 => 
      array (
        0 => 2,
        1 => 3,
        2 => 4,
        3 => 5,
        4 => 6,
        5 => 7,
        6 => 8,
        7 => 0,
        8 => 1,
      ),
      3 => 
      array (
        0 => 3,
        1 => 4,
        2 => 5,
        3 => 6,
        4 => 7,
        5 => 8,
        6 => 0,
        7 => 1,
        8 => 2,
      ),
      4 => 
      array (
        0 => 4,
        1 => 5,
        2 => 6,
        3 => 7,
        4 => 8,
        5 => 0,
        6 => 1,
        7 => 2,
        8 => 3,
      ),
    ),
  ),
  'game-video-poker' => 
  array (
    'version' => '1.1.1',
    'min_bet' => '1',
    'max_bet' => '50',
    'bet_change_amount' => '1',
    'default_bet_amount' => '1',
    'default_bet_coins' => '1',
    'paytable' => '[[0,1,2,3,4,6,9,25,50,250],[0,2,4,6,8,12,18,50,100,500],[0,3,6,9,12,18,27,75,150,750],[0,4,8,12,16,24,36,100,200,1000],[0,5,10,15,20,30,45,125,250,4000]]',
  ),
  'installer' => 
  array (
    'version' => '1.0.0',
  ),
  'payments' => 
  array (
    'version' => '1.4.1',
    'currency' => 'USD',
    'rate' => '100',
    'deposit_min' => '100',
    'deposit_max' => '999999999',
    'withdrawal_min' => '100',
    'withdrawal_max' => '999999999',
    'withdrawal_auto_max' => '0',
    'min_total_deposit_to_withdraw' => '0',
    'coinpayments' => 
    array (
      'merchant_id' => '',
      'public_key' => '',
      'private_key' => '',
      'secret_key' => '',
      'withdrawals_auto_confirm' => false,
    ),
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
