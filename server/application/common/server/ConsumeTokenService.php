<?php

namespace app\common\server;

use think\facade\Cache;

/**
 * Issues short-lived tickets bound to the current API login session.
 */
class ConsumeTokenService
{
    const CACHE_PREFIX = 'consume_token:';
    const TICKET_PREFIX = 'consume_token_ticket:';
    const VERSION = 'v1';
    const MAX_TTL = 600;

    public static function enabled()
    {
        return (bool) config('consume_token.enabled');
    }

    public static function ttl()
    {
        return min(max((int) config('consume_token.ttl'), 1), self::MAX_TTL);
    }

    public static function binding($login_token, $user_id)
    {
        return hash('sha256', 'api|' . (int) $user_id . '|' . hash('sha256', (string) $login_token));
    }

    public static function issue($login_token, $user_id)
    {
        $ttl = self::ttl();
        if (!self::enabled()) {
            return ['token' => '', 'expires_in' => $ttl];
        }

        $binding = self::binding($login_token, $user_id);
        $cache_key = self::CACHE_PREFIX . $binding;
        $cached = Cache::get($cache_key);
        if (is_array($cached) && !empty($cached['token']) && !empty($cached['expires_at'])
            && $cached['expires_at'] > time() && self::validFormat($cached['token'])
            && self::ticketMatches($cached['token'], $binding)) {
            return [
                'token' => $cached['token'],
                'expires_in' => max(1, $cached['expires_at'] - time()),
            ];
        }

        $token = self::create();
        $expires_at = time() + $ttl;
        $ticket = [
            'binding' => $binding,
            'expires_at' => $expires_at,
        ];

        if (!Cache::set(self::TICKET_PREFIX . hash('sha256', $token), $ticket, $ttl)) {
            throw new \RuntimeException('消费Token签发失败');
        }

        Cache::set($cache_key, ['token' => $token, 'expires_at' => $expires_at], $ttl);
        return ['token' => $token, 'expires_in' => $ttl];
    }

    public static function validate($request, $login_token, $user_id)
    {
        if (!self::enabled() || self::isExcluded($request)) {
            return true;
        }

        $token = $request->header('X-Consume-Token');
        if (!is_string($token) || $token === '' || !self::validFormat($token)) {
            return false;
        }

        $binding = self::binding($login_token, $user_id);
        return self::ticketMatches($token, $binding);
    }

    private static function isExcluded($request)
    {
        return strtolower($request->controller()) === 'account'
            && strtolower($request->action()) === 'consumetoken';
    }

    private static function create()
    {
        return self::VERSION . '.' . rtrim(strtr(base64_encode(random_bytes(32)), '+/', '-_'), '=');
    }

    private static function validFormat($token)
    {
        return preg_match('/^' . self::VERSION . '\\.[A-Za-z0-9_-]{43}$/', $token) === 1;
    }

    private static function ticketMatches($token, $binding)
    {
        $ticket = Cache::get(self::TICKET_PREFIX . hash('sha256', $token));
        return is_array($ticket) && !empty($ticket['binding']) && !empty($ticket['expires_at'])
            && $ticket['expires_at'] > time() && hash_equals($ticket['binding'], $binding);
    }
}
