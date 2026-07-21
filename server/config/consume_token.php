<?php

use think\facade\Env;

return [
    // Disabled by default. Enable it in server/.env when all clients are updated.
    'enabled' => Env::get('consume_token.enabled', false),
    // Keep the ticket short-lived even if a deployment sets an unsafe value.
    'ttl' => min(max((int) Env::get('consume_token.ttl_seconds', 600), 1), 600),
];
