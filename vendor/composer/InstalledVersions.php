<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-main',
    'version' => 'dev-main',
    'aliases' => 
    array (
    ),
    'reference' => '1b81960dbf91f47573e18646248dd93bfeb31536',
    'name' => 'laravel/laravel',
  ),
  'versions' => 
  array (
    'acacha/admin-lte-template-laravel' => 
    array (
      'pretty_version' => '2.0.12',
      'version' => '2.0.12.0',
      'aliases' => 
      array (
      ),
      'reference' => '0674e87d972659c15c67c2e92d289921892bbda5',
    ),
    'asm89/stack-cors' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c163e2b614550aedcf71165db2473d936abbced6',
    ),
    'barryvdh/laravel-cors' => 
    array (
      'pretty_version' => 'v0.11.0',
      'version' => '0.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6ba64a654b4258a3ecc11aba6614c932b3442e30',
    ),
    'classpreloader/classpreloader' => 
    array (
      'pretty_version' => '3.2.0',
      'version' => '3.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4729e438e0ada350f91148e7d4bb9809342575ff',
    ),
    'cordoval/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'davedevelopment/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'dnoegel/php-xdg-base-dir' => 
    array (
      'pretty_version' => '0.1',
      'version' => '0.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '265b8593498b997dc2d31e75b89f053b5cc9621a',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => 'v1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5527a48b7313d15261292c149e55e26eae771b0a',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '185b8868aa9bf7159f5f953ed5afb2d7fcdc3bda',
    ),
    'fzaninotto/faker' => 
    array (
      'pretty_version' => 'v1.7.1',
      'version' => '1.7.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd3ed4cc37051c1ca52d22d76b437d14809fc7e0d',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '6.3.0',
      'version' => '6.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f4db5a78a5ea468d4831de7f0bf9d9415e348699',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => 'v1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a59da6cf61d80060647ff4d3eb2c03a2bc694646',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '1.4.2',
      'version' => '1.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f5b8a8512e2b58b0071a7280e39f14f72e05d87c',
    ),
    'hamcrest/hamcrest-php' => 
    array (
      'pretty_version' => 'v1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b37020aa976fa52d3de9aa904aa2522dc518f79c',
    ),
    'illuminate/auth' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/broadcasting' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/bus' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/cache' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/config' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/console' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/container' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/cookie' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/database' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/encryption' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/events' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/exception' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/filesystem' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/hashing' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/http' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/log' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/mail' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/notifications' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/pagination' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/pipeline' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/queue' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/redis' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/routing' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/session' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/support' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/translation' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/validation' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'illuminate/view' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'jakub-onderka/php-console-color' => 
    array (
      'pretty_version' => '0.1',
      'version' => '0.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e0b393dacf7703fc36a4efc3df1435485197e6c1',
    ),
    'jakub-onderka/php-console-highlighter' => 
    array (
      'pretty_version' => 'v0.3.2',
      'version' => '0.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '7daa75df45242c8d5b75a22c00a201e7954e4fb5',
    ),
    'jeremeamia/superclosure' => 
    array (
      'pretty_version' => '2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5707d5821b30b9a07acfb4d76949784aaa0e9ce9',
    ),
    'kodova/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'laravel/framework' => 
    array (
      'pretty_version' => 'v5.3.31',
      'version' => '5.3.31.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e641e75fc5b26ad0ba8c19b7e83b08cad1d03b89',
    ),
    'laravel/laravel' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
      ),
      'reference' => '1b81960dbf91f47573e18646248dd93bfeb31536',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '1.0.43',
      'version' => '1.0.43.0',
      'aliases' => 
      array (
      ),
      'reference' => '1ce7cc142d906ba58dc54c82915d355a9191c8a8',
    ),
    'mockery/mockery' => 
    array (
      'pretty_version' => '0.9.9',
      'version' => '0.9.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '6fdb61243844dc924071d3404bb23994ea0b6856',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fd8c787753b3a2ad11bc60c063cff1358a32a3b4',
    ),
    'mtdowling/cron-expression' => 
    array (
      'pretty_version' => 'v1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '9504fa9ea681b586028adaaa0877db4aecf32bad',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3b8a3a99ba1f6a3952ac2747d989303cbd6b7a3e',
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '1.26.4',
      'version' => '1.26.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e3d9014279133a3cccc01f6a691322a2d5a6a87b',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v3.1.5',
      'version' => '3.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bb87e28e7d7b8d9a7fda231d37457c9210faf6ce',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v2.0.11',
      'version' => '2.0.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '5da4d3c796c275c55f057af5a643ae297d96b4d8',
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '4.3.0',
      'version' => '4.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '94fd0001232e47129dd3504189fa1c7225010d08',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '0.4.0',
      'version' => '0.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9c977708995954784726e25d0cd1dddf4e65b0f7',
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => '1.7.5',
      'version' => '1.7.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dfd6be44111a7c41c2e884a336cc4f461b3b2401',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '4.0.8',
      'version' => '4.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ef7b2f56815df854e66ceaee8ebe9393ae36a40d',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '1.4.5',
      'version' => '1.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '730b01bc3e867237eaac355e06a36b85dd93a8b4',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '1.0.9',
      'version' => '1.0.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '3dcf38ca72b158baf0bc245e9184d3fdffa9c46f',
    ),
    'phpunit/php-token-stream' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '791198a2c6254db10131eecfe8c06670700904db',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '5.7.27',
      'version' => '5.7.27.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b7803aeca3ccb99ad0a506fa80b64cd6a56bbc0c',
    ),
    'phpunit/phpunit-mock-objects' => 
    array (
      'pretty_version' => '3.4.4',
      'version' => '3.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a23b761686d50a560cc56233b9ecf49597cc9118',
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '4ebe3a8bf773a19edfe0a84b6585ba3d401b724d',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0',
      ),
    ),
    'psy/psysh' => 
    array (
      'pretty_version' => 'v0.8.17',
      'version' => '0.8.17.0',
      'aliases' => 
      array (
      ),
      'reference' => '5069b70e8c4ea492c2b5939b6eddc78bfe41cfec',
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '3.7.3',
      'version' => '3.7.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '44abcdad877d9a46685a3a4d221e3b2c4b87cb76',
    ),
    'rhumsaa/uuid' => 
    array (
      'replaced' => 
      array (
        0 => '3.7.3',
      ),
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '2b7424b55f5047b47ac6e5ccb20b2aea4011d9be',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '1.4.3',
      'version' => '1.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '7f066a26a962dbe58ddea9f72a4e82874a3975a4',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5795ffe5dc5b02460c3e34222fee8cbe245d8fac',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ce474bdd1a34744d7ac5d6aad3a46d48d9bac4c4',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bc37d50fea7d017d3d340f230811c9f1d7280af4',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1311872ac850040a79c3c058bea3e22d0f09cbb7',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2c3ba150cbec723aa057506e73a8d33bdb286c9a',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ce990bb21759f94aeafd30209e8cfcdfa8bc3f52',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '99732be0ddb3361e16ad77b68ba41efc8e979019',
    ),
    'swiftmailer/swiftmailer' => 
    array (
      'pretty_version' => 'v5.4.9',
      'version' => '5.4.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '7ffc1ea296ed14bf8260b6ef11b80208dbadba91',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v3.1.10',
      'version' => '3.1.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '047f16485d68c083bd5d9b73ff16f9cb9c1a9f52',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v3.1.10',
      'version' => '3.1.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '722a87478a72d95dc2a3bcf41dc9c2d13fd4cb2d',
    ),
    'symfony/debug' => 
    array (
      'pretty_version' => 'v3.1.10',
      'version' => '3.1.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6661361626b3cf5cf2089df98b3b5006a197e85',
    ),
    'symfony/dom-crawler' => 
    array (
      'pretty_version' => 'v3.1.10',
      'version' => '3.1.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '7eede2a901a19928494194f7d1815a77b9a473a0',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v3.4.6',
      'version' => '3.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '58990682ac3fdc1f563b7e705452921372aad11d',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v3.1.10',
      'version' => '3.1.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '59687a255d1562f2c17b012418273862083d85f7',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v3.1.10',
      'version' => '3.1.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cef0ad49a2e90455cfc649522025b5a2929648c0',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v3.1.10',
      'version' => '3.1.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c830387dec1b48c100473d10a6a356c3c3ae2a13',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '78be803ce01e55d3491c1397cf1c64beb9c1b63b',
    ),
    'symfony/polyfill-php56' => 
    array (
      'pretty_version' => 'v1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ebc999ce5f14204c5150b9bd15f8f04e621409d8',
    ),
    'symfony/polyfill-util' => 
    array (
      'pretty_version' => 'v1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e17c808ec4228026d4f5a8832afa19be85979563',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v3.1.10',
      'version' => '3.1.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '2605753c5f8c531623d24d002825ebb1d6a22248',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v3.1.10',
      'version' => '3.1.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f25581d4eb0a82962c291917f826166f0dcd8a9a',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v3.1.10',
      'version' => '3.1.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd5a20fab5f63f44c233c69b3041c3cb1d4945e45',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v3.1.10',
      'version' => '3.1.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '16df11647e5b992d687cb4eeeb9a882d5f5c26b9',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v3.3.16',
      'version' => '3.3.16.0',
      'aliases' => 
      array (
      ),
      'reference' => 'af615970e265543a26ee712c958404eb9b7ac93d',
    ),
    'tightenco/collect' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.3.31',
      ),
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3cc116adbe4b11be5ec557bf1d24dc5e3a21d18c',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0df1908962e7a3071564e857d86874dad1ef204a',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
