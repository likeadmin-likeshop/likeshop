<?php

namespace Overtrue\Socialite\Providers;

use Overtrue\Socialite\AccessTokenInterface;
use Overtrue\Socialite\ProviderInterface;
use Overtrue\Socialite\User;

/**
 * Class BaiduProvider.
 *
 * @see https://developer.baidu.com/wiki/index.php?title=docs/oauth [OAuth 2.0 授权机制说明]
 */
class BaiduProvider extends AbstractProvider implements ProviderInterface
{
    /**
     * The base url of Weibo API.
     *
     * @var string
     */
    protected $baseUrl = 'https://openapi.baidu.com';

    /**
     * The API version for the request.
     *
     * @var string
     */
    protected $version = '2.0';

    /**
     * The scopes being requested.
     *
     * @var array
     */
    protected $scopes = [''];

    /**
     * The uid of user authorized.
     *
     * @var int
     */
    protected $uid;

    protected $display = 'popup';

    /**
     * Get the authentication URL for the provider.
     *
     * @param string $state
     *
     * @return string
     */
    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase($this->baseUrl.'/oauth/'.$this->version.'/authorize', $state);
    }

    /**
     * {@inheritdoc}.
     */
    protected function getCodeFields($state = null)
    {
        return array_merge([
            'response_type' => 'code',
            'client_id' => $this->getConfig()->get('client_id'),
            'redirect_uri' => $this->redirectUrl,
            'scope' => $this->formatScopes($this->scopes, $this->scopeSeparator),
            'display' => $this->display,
        ], $this->parameters);
    }

    /**
     * Get the token URL for the provider.
     *
     * @return string
     */
    protected function getTokenUrl()
    {
        return $this->baseUrl.'/oauth/'.$this->version.'/token';
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
        return parent::getTokenFields($code) + ['grant_type' => 'authorization_code'];
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
        $response = $this->getHttpClient()->get($this->baseUrl.'/rest/'.$this->version.'/passport/users/getInfo', [
            'query' => [
                'access_token' => $token->getToken(),
            ],
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);

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
        $realname = $this->arrayItem($user, 'realname');

        return new User([
            'id' => $this->arrayItem($user, 'userid'),
            'nickname' => empty($realname) ? '' : $realname,
            'name' => $this->arrayItem($user, 'username'),
            'email' => '',
            'avatar' => $this->arrayItem($user, 'portrait'),
        ]);
    }
}
