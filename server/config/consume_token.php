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
    // Paths that still require login/token when applicable, but do not require X-Consume-Token.
    // Synced with the Java front/admin consume-token exclude list and mapped to this ThinkPHP API.
    'exclude_paths' => [
        '/api/account/consumeToken',
        '/api/account/passwordKey',
        '/api/account/updateUser',
        '/api/payment/notifyMnp',
        '/api/payment/notifyOa',
        '/api/payment/notifyApp',
        '/api/payment/aliNotify',
        '/api/pay/wx/notify/**',
        '/api/pay/ali/notify/**',
        '/api/channel/oa/callback',
        '/api/consumeToken',
        '/api/system/consumeToken',
        '/api/system/passwordKey',
        '/api/login/passwordKey',
        '/api/user/updateUser',
    ],
];
