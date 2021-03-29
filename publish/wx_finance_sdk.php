<?php

declare(strict_types=1);
/**
 * This file is part of MoChat.
 * @link     https://mo.chat
 * @document https://mochat.wiki
 * @contact  group@mo.chat
 * @license  https://github.com/mochat-cloud/mochat/blob/master/LICENSE
 */
return [
    'default'   => 'php-ffi',
    'providers' => [
        'php-ext' => [
            'driver' => \MoChat\WeWorkFinanceSDK\Provider\PHPExtProvider::class,
        ],
        'php-ffi' => [
            'driver' => \MoChat\WeWorkFinanceSDK\Provider\FFIProvider::class,
        ],
    ],
];
