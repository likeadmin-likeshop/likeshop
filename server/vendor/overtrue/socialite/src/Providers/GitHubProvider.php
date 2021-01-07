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

use Exception;
use Overtrue\Socialite\AccessTokenInterface;
use Overtrue\Socialite\ProviderInterface;
use Overtrue\Socialite\User;

/**
 * Class GitHubProvider.
 */
class GitHubProvider extends AbstractProvider implements ProviderInterface
{
    /**
     * The scopes being requested.
     *
     * @var array
     */
    protected $scopes = ['user:email'];

    /**
     * {@inheritdoc}
     */
    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase('https://github.com/login/oauth/authorize', $state);
    }

    /**
     * {@inheritdoc}
     */
    protected function getTokenUrl()
    {
        return 'https://github.com/login/oauth/access_token';
    }

    /**
     * {@inheritdoc}
     */
    protected function getUserByToken(AccessTokenInterface $token)
    {
        $userUrl = 'https://api.github.com/user';

        $response = $this->getHttpClient()->get(
            $userUrl,
            $this->createAuthorizationHeaders($token)
        );

        $user = json_decode($response->getBody(), true);

        if (in_array('user:email', $this->scopes)) {
            $user['email'] = $this->getEmailByToken($token);
        }

        return $user;
    }

    /**
     * Get the email for the given access token.
     *
     * @param string $token
     *
     * @return string|null
     */
    protected function getEmailByToken($token)
    {
        $emailsUrl = 'https://api.github.com/user/emails';

        try {
            $response = $this->getHttpClient()->get(
                $emailsUrl,
                $this->createAuthorizationHeaders($token)
            );
        } catch (Exception $e) {
            return;
        }

        foreach (json_decode($response->getBody(), true) as $email) {
            if ($email['primary'] && $email['verified']) {
                return $email['email'];
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function mapUserToObject(array $user)
    {
        return new User([
            'id' => $this->arrayItem($user, 'id'),
            'username' => $this->arrayItem($user, 'login'),
            'nickname' => $this->arrayItem($user, 'login'),
            'name' => $this->arrayItem($user, 'name'),
            'email' => $this->arrayItem($user, 'email'),
            'avatar' => $this->arrayItem($user, 'avatar_url'),
        ]);
    }

    /**
     * Get the default options for an HTTP request.
     *
     * @param string $token
     *
     * @return array
     */
    protected function createAuthorizationHeaders(string $token)
    {
        return [
            'headers' => [
                'Accept' => 'application/vnd.github.v3+json',
                'Authorization' => sprintf('token %s', $token),
            ],
        ];
    }
}
