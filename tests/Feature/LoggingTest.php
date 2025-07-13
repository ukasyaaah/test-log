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

test('withContext', function () {

    Log::withContext(['User' => 'Ukhasyah']);

    Log::info('Hello Info');
    Log::warning('Hello Warning');
    Log::error('Hello Error');
    Log::critical('Hello Critical');
    assertTrue(true);
});

test('withChannel', function () {

    // Kirim ke slack 
    $slackLogger = Log::channel('slack');
    $slackLogger->info('Hello Slack');

    // Kirim ke channel default
    Log::info('Halo Laravel');
    assertTrue(true);
});

test('withHandler', function () {
    $fileLogger = Log::channel('file');

    $fileLogger->info('Hello File');
    $fileLogger->warning('Hello File');
    $fileLogger->error('Hello File');
    $fileLogger->critical('Hello File');

    assertTrue(true);
});
