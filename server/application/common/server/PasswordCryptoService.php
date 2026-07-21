<?php

namespace app\common\server;

use think\facade\Cache;

/**
 * Provides short-lived RSA transport keys for password fields.
 * The private key is stored in the configured cache and consumed once.
 */
class PasswordCryptoService
{
    const PREFIX = 'RSA:';
    const CACHE_PREFIX = 'password:rsa:';
    const EXPIRE_SECONDS = 120;

    private static $passwordFields = [
        'password', 'password2', 'password_confirm', 'passwordConfirm',
        're_password', 'repassword', 'confirm_password', 'confirmPassword',
        'old_password', 'oldPassword', 'curr_password', 'currPassword',
        'new_password', 'newPassword', 'pay_password', 'payPassword',
        'origin_pay_password', 'originPayPassword', 'new_pay_password', 'newPayPassword',
    ];

    /**
     * @return array{key_id:string,key:string,keyId:string}
     */
    public static function createSession()
    {
        $resource = openssl_pkey_new([
            'private_key_type' => OPENSSL_KEYTYPE_RSA,
            'private_key_bits' => 2048,
        ]);
        if (!$resource) {
            throw new \RuntimeException('无法初始化密码加密密钥');
        }

        $privateKey = '';
        if (!openssl_pkey_export($resource, $privateKey)) {
            throw new \RuntimeException('无法初始化密码加密密钥');
        }
        $details = openssl_pkey_get_details($resource);
        if (empty($details['key'])) {
            throw new \RuntimeException('无法初始化密码加密密钥');
        }

        try {
            $keyId = bin2hex(random_bytes(16));
        } catch (\Exception $e) {
            $keyId = md5(uniqid('', true));
        }
        Cache::set(self::CACHE_PREFIX . $keyId, $privateKey, self::EXPIRE_SECONDS);

        return [
            'key_id' => $keyId,
            'keyId' => $keyId,
            'key' => $details['key'],
        ];
    }

    /**
     * Decrypt password fields in a ThinkPHP request and replace its POST data.
     * Plaintext password submissions are rejected once a password field exists.
     *
     * @param \think\Request $request
     * @return void
     */
    public static function decryptRequest($request)
    {
        $post = $request->post();
        if (!is_array($post)) {
            return;
        }

        $fields = [];
        foreach (self::$passwordFields as $field) {
            if (isset($post[$field]) && $post[$field] !== '') {
                $fields[] = $field;
            }
        }
        if (!$fields) {
            return;
        }

        $keyId = !empty($post['password_key_id']) ? $post['password_key_id'] : ($post['passwordKeyId'] ?? '');
        if (!$keyId) {
            throw new \RuntimeException('密码必须加密传输');
        }
        $privateKey = Cache::get(self::CACHE_PREFIX . $keyId);
        Cache::rm(self::CACHE_PREFIX . $keyId);
        if (!$privateKey) {
            throw new \RuntimeException('密码加密密钥已失效，请刷新后重试');
        }

        foreach ($fields as $field) {
            $value = $post[$field];
            if (strpos($value, self::PREFIX) !== 0) {
                throw new \RuntimeException('密码必须加密传输');
            }
            $ciphertext = base64_decode(substr($value, strlen(self::PREFIX)), true);
            if ($ciphertext === false || !openssl_private_decrypt($ciphertext, $plaintext, $privateKey, OPENSSL_PKCS1_PADDING)) {
                throw new \RuntimeException('密码解密失败');
            }
            $post[$field] = $plaintext;
        }
        $request->withPost($post);
    }

    /**
     * @param array $data
     * @return array
     */
    public static function maskPasswordFields(array $data)
    {
        foreach (self::$passwordFields as $field) {
            if (array_key_exists($field, $data)) {
                $data[$field] = '******';
            }
        }
        return $data;
    }
}
