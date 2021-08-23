<?php

/*
 * This file is part of the overtrue/socialite.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Overtrue\Socialite\Providers;

use Overtrue\Socialite\AccessTokenInterface;
use Overtrue\Socialite\ProviderInterface;
use Overtrue\Socialite\User;

/**
 * Class TaobaoProvider.
 *
 * @author mechono <haodouliu@gmail.com>
 *
 * @see    https://open.taobao.com/doc.htm?docId=102635&docType=1&source=search [Taobao - OAuth 2.0 授权登录]
 */
class TaobaoProvider extends AbstractProvider implements ProviderInterface
{
    /**
     * The base url of Taobao API.
     *
     * @var string
     */
    protected $baseUrl = 'https://oauth.taobao.com';

    /**
     * Taobao API service URL address.
     *
     * @var string
     */
    protected $gatewayUrl = 'https://eco.taobao.com/router/rest';

    /**
     * The API version for the request.
     *
     * @var string
     */
    protected $version = '2.0';

    /**
     * @var string
     */
    protected $format = 'json';

    /**
     * @var string
     */
    protected $signMethod = 'md5';

    /**
     * Web 对应 PC 端（淘宝 logo ）浏览器页面样式；Tmall 对应天猫的浏览器页面样式；Wap 对应无线端的浏览器页面样式。
     */
    protected $view = 'web';

    /**
     * The scopes being requested.
     *
     * @var array
     */
    protected $scopes = ['user_info'];

    /**
     * Get the authentication URL for the provider.
     *
     * @param string $state
     *
     * @return string
     */
    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase($this->baseUrl.'/authorize', $state);
    }

    /**
     * 获取授权码接口参数.
     *
     * @param string|null $state
     *
     * @return array
     */
    public function getCodeFields($state = null)
    {
        $fields = [
            'client_id' => $this->getConfig()->get('client_id'),
            'redirect_uri' => $this->redirectUrl,
            'view' => $this->view,
            'response_type' => 'code',
        ];

        if ($this->usesState()) {
            $fields['state'] = $state;
        }

        return $fields;
    }

    /**
     * Get the token URL for the provider.
     *
     * @return string
     */
    protected function getTokenUrl()
    {
        return $this->baseUrl.'/token';
    }

    /**
     * Get the Post fields for the token request.
     *
     * @param string $code
     *
     * @return array
     */
    protected function getTokenFields($code)
    {
        return parent::getTokenFields($code) + ['grant_type' => 'authorization_code', 'view' => $this->view];
    }

    /**
     * Get the access token for the given code.
     *
     * @param string $code
     *
     * @return \Overtrue\Socialite\AccessToken
     */
    public function getAccessToken($code)
    {
        $response = $this->getHttpClient()->post($this->getTokenUrl(), [
            'query' => $this->getTokenFields($code),
        ]);

        return $this->parseAccessToken($response->getBody()->getContents());
    }

    /**
     * Get the access token from the token response body.
     *
     * @param string $body
     *
     * @return \Overtrue\Socialite\AccessToken
     */
    public function parseAccessToken($body)
    {
        return parent::parseAccessToken($body);
    }

    /**
     * Get the raw user for the given access token.
     *
     * @param \Overtrue\Socialite\AccessTokenInterface $token
     *
     * @return array
     */
    protected function getUserByToken(AccessTokenInterface $token)
    {
        $response = $this->getHttpClient()->post($this->getUserInfoUrl($this->gatewayUrl, $token));

        return json_decode($response->getBody(), true);
    }

    /**
     * Map the raw user array to a Socialite User instance.
     *
     * @param array $user
     *
     * @return \Overtrue\Socialite\User
     */
    protected function mapUserToObject(array $user)
    {
        return new User([
            'id' => $this->arrayItem($user, 'open_id'),
            'nickname' => $this->arrayItem($user, 'nick'),
            'name' => $this->arrayItem($user, 'nick'),
            'avatar' => $this->arrayItem($user, 'avatar'),
        ]);
    }

    /**
     * @param $params
     *
     * @return string
     */
    protected function generateSign($params)
    {
        ksort($params);

        $stringToBeSigned = $this->getConfig()->get('client_secret');

        foreach ($params as $k => $v) {
            if (!is_array($v) && '@' != substr($v, 0, 1)) {
                $stringToBeSigned .= "$k$v";
            }
        }

        $stringToBeSigned .= $this->getConfig()->get('client_secret');

        return strtoupper(md5($stringToBeSigned));
    }

    /**
     * @param \Overtrue\Socialite\AccessTokenInterface $token
     * @param array                                    $apiFields
     *
     * @return array
     */
    protected function getPublicFields(AccessTokenInterface $token, array $apiFields = [])
    {
        $fields = [
            'app_key' => $this->getConfig()->get('client_id'),
            'sign_method' => $this->signMethod,
            'session' => $token->getToken(),
            'timestamp' => date('Y-m-d H:i:s'),
            'v' => $this->version,
            'format' => $this->format,
        ];

        $fields = array_merge($apiFields, $fields);
        $fields['sign'] = $this->generateSign($fields);

        return $fields;
    }

    /**
     * {@inheritdoc}.
     */
    protected function getUserInfoUrl($url, AccessTokenInterface $token)
    {
        $apiFields = ['method' => 'taobao.miniapp.userInfo.get'];

        $query = http_build_query($this->getPublicFields($token, $apiFields), '', '&', $this->encodingType);

        return $url.'?'.$query;
    }
}
