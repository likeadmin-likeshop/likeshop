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

use Overtrue\Socialite\AccessToken;
use Overtrue\Socialite\AccessTokenInterface;
use Overtrue\Socialite\AuthorizeFailedException;
use Overtrue\Socialite\InvalidStateException;
use Overtrue\Socialite\ProviderInterface;
use Overtrue\Socialite\User;

/**
 * Class FeiShuProvider.
 *
 * @author qijian.song@show.world
 *
 * @see https://open.feishu.cn/
 */
class FeiShuProvider extends AbstractProvider implements ProviderInterface
{
    /**
     * 飞书接口域名.
     *
     * @var string
     */
    protected $baseUrl = 'https://open.feishu.cn';

    /**
     * 应用授权作用域.
     *
     * @var array
     */
    protected $scopes = ['user_info'];

    /**
     * 获取登录页面地址.
     *
     * {@inheritdoc}
     */
    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase($this->baseUrl.'/open-apis/authen/v1/index', $state);
    }

    /**
     * 获取授权码接口参数.
     *
     * @param string|null $state
     *
     * @return array
     */
    protected function getCodeFields($state = null)
    {
        $fields = [
            'redirect_uri' => $this->redirectUrl,
            'app_id' => $this->getConfig()->get('client_id'),
        ];

        if ($this->usesState()) {
            $fields['state'] = $state;
        }

        return $fields;
    }

    /**
     * 获取 app_access_token 地址.
     *
     * {@inheritdoc}
     */
    protected function getTokenUrl()
    {
        return $this->baseUrl.'/open-apis/auth/v3/app_access_token/internal';
    }

    /**
     * 获取 app_access_token.
     *
     * @return \Overtrue\Socialite\AccessToken
     */
    public function getAccessToken($code = '')
    {
        $response = $this->getHttpClient()->post($this->getTokenUrl(), [
            'headers' => ['Content-Type' => 'application/json'],
            'json' => $this->getTokenFields($code),
        ]);

        return $this->parseAccessToken($response->getBody()->getContents());
    }

    /**
     * 获取 app_access_token 接口参数.
     *
     * @return array
     */
    protected function getTokenFields($code)
    {
        return [
            'app_id' => $this->getConfig()->get('client_id'),
            'app_secret' => $this->getConfig()->get('client_secret'),
        ];
    }

    /**
     * 格式化 token.
     *
     * @param \Psr\Http\Message\StreamInterface|array $body
     *
     * @return \Overtrue\Socialite\AccessTokenInterface
     */
    protected function parseAccessToken($body)
    {
        if (!is_array($body)) {
            $body = json_decode($body, true);
        }

        if (empty($body['app_access_token'])) {
            throw new AuthorizeFailedException('Authorize Failed: '.json_encode($body, JSON_UNESCAPED_UNICODE), $body);
        }
        $data['access_token'] = $body['app_access_token'];

        return new AccessToken($data);
    }

    /**
     * 获取用户信息.
     *
     * @return array|mixed
     */
    public function user(AccessTokenInterface $token = null)
    {
        if (is_null($token) && $this->hasInvalidState()) {
            throw new InvalidStateException();
        }

        $token = $token ?: $this->getAccessToken();

        $user = $this->getUserByToken($token, $this->getCode());
        $user = $this->mapUserToObject($user)->merge(['original' => $user]);

        return $user->setToken($token)->setProviderName($this->getName());
    }

    /**
     * 通过 token 获取用户信息.
     *
     * @return array|mixed
     */
    protected function getUserByToken(AccessTokenInterface $token)
    {
        $userUrl = $this->baseUrl.'/open-apis/authen/v1/access_token';

        $response = $this->getHttpClient()->post(
            $userUrl,
            [
                'json' => [
                    'app_access_token' => $token->getToken(),
                    'code' => $this->getCode(),
                    'grant_type' => 'authorization_code',
                ],
            ]
        );

        $result = json_decode($response->getBody(), true);

        return $result['data'];
    }

    /**
     * 格式化用户信息.
     *
     * @return User
     */
    protected function mapUserToObject(array $user)
    {
        return new User([
            'id' => $this->arrayItem($user, 'open_id'),
            'username' => $this->arrayItem($user, 'name'),
            'nickname' => $this->arrayItem($user, 'name'),
            'avatar' => $this->arrayItem($user, 'avatar_url'),
        ]);
    }
}
