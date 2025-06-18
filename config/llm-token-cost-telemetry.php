<?php

return [
    'enabled' => env('LLM_TOKEN_COST_TELEMETRY_ENABLED', true),
    'timeout' => env('LLM_TOKEN_COST_TELEMETRY_TIMEOUT', 30),
    'log_channel' => env('LLM_TOKEN_COST_TELEMETRY_LOG', 'stack'),
];
