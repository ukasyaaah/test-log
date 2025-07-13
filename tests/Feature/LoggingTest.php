<?php

use Illuminate\Support\Facades\Log;

use function PHPUnit\Framework\assertTrue;

test('loggingTest', function () {
    Log::info('Hello Info');
    Log::warning('Hello Warning');
    Log::error('Hello Error');
    Log::critical('Hello Critical');

    assertTrue(true);
});

test('logInfo', function () {
    Log::info('Hello Info', ['User' => 'Ukhasyah']);
    assertTrue(true);
});
