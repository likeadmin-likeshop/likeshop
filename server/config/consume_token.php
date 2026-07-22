<?php

use think\facade\Env;

$enabled = Env::get('consume_token.enabled', false);
if (is_string($enabled)) {
    $enabled = in_array(strtolower($enabled), ['1', 'true', 'on', 'yes'], true);
}

$ttl = (int) Env::get('consume_token.ttl_seconds', 600);

return [
    // Disabled by default. Enable it in server/.env after all clients are updated.
    'enabled' => (bool) $enabled,
    // Keep the ticket short-lived even if a deployment sets an unsafe value.
    'ttl' => min(max($ttl, 1), 600),
];
