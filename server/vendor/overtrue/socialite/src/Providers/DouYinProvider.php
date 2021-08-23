<?php

namespace Overtrue\Socialite\Providers;

use Overtrue\Socialite\AccessToken;
use Overtrue\Socialite\AccessTokenInterface;
use Overtrue\Socialite\ProviderInterface;
use Overtrue\Socialite\User;

/**
 * Class DouYinProvider.
 *
 * @author haoliang@qiyuankeji.vip
 *
 * @see http://open.douyin.com/platform
 */
class DouYinProvider extends AbstractProvider implements ProviderInterface
{
    /**
     * 抖音接口域名.
     *
     * @var string
     */
    protected $baseUrl = 'https://open.douyin.com';

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
        return $this->buildAuthUrlFromBase($this->baseUrl.'/platform/oauth/connect', $state);
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
            'client_key' => $this->getConfig()->get('client_id'),
            'redirect_uri' => $this->redirectUrl,
            'scope' => $this->formatScopes($this->scopes, $this->scopeSeparator),
            'response_type' => 'code',
        ];

        if ($this->usesState()) {
            $fields['state'] = $state;
        }

        return $fields;
    }

    /**
     * 获取access_token地址.
     *
     * {@inheritdoc}
     */
    protected function getTokenUrl()
    {
        return $this->baseUrl.'/oauth/access_token';
    }

    /**
     * 通过code获取access_token.
     *
     * @param string $code
     *
     * @return \Overtrue\Socialite\AccessToken
     */
    public function getAccessToken($code)
    {
        $response = $this->getHttpClient()->get($this->getTokenUrl(), [
            'query' => $this->getTokenFields($code),
        ]);

        return $this->parseAccessToken($response->getBody()->getContents());
    }

    /**
     * 获取access_token接口参数.
     *
     * @param string $code
     *
     * @return array
     */
    protected function getTokenFields($code)
    {
        return [
            'client_key' => $this->getConfig()->get('client_id'),
            'client_secret' => $this->getConfig()->get('client_secret'),
            'code' => $code,
            'grant_type' => 'authorization_code',
        ];
    }

    /**
     * 格式化token.
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

        if (empty($body['data']['access_token'])) {
            throw new AuthorizeFailedException('Authorize Failed: '.json_encode($body, JSON_UNESCAPED_UNICODE), $body);
        }

        return new AccessToken($body['data']);
    }

    /**
     * 通过token 获取用户信息.
     *
     * @param AccessTokenInterface $token
     *
     * @return array|mixed
     */
    protected function getUserByToken(AccessTokenInterface $token)
    {
        $userUrl = $this->baseUrl.'/oauth/userinfo/';

        $response = $this->getHttpClient()->get(
            $userUrl,
            [
                'query' => [
                    'access_token' => $token->getToken(),
                    'open_id' => $token['open_id'],
                ],
            ]
        );

        return json_decode($response->getBody(), true);
    }

    /**
     * 格式化用户信息.
     *
     * @param array $user
     *
     * @return User
     */
    protected function mapUserToObject(array $user)
    {
        return new User([
            'id' => $this->arrayItem($user, 'open_id'),
            'username' => $this->arrayItem($user, 'nickname'),
            'nickname' => $this->arrayItem($user, 'nickname'),
            'avatar' => $this->arrayItem($user, 'avatar'),
        ]);
    }
}
