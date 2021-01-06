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
 * Class LinkedinProvider.
 *
 * @see https://developer.linkedin.com/docs/oauth2 [Authenticating with OAuth 2.0]
 */
class LinkedinProvider extends AbstractProvider implements ProviderInterface
{
    /**
     * The scopes being requested.
     *
     * @var array
     */
    protected $scopes = ['r_liteprofile', 'r_emailaddress'];

    /**
     * {@inheritdoc}
     */
    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase('https://www.linkedin.com/oauth/v2/authorization', $state);
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
        $response = $this->getHttpClient()
            ->post($this->getTokenUrl(), ['form_params' => $this->getTokenFields($code)]);

        return $this->parseAccessToken($response->getBody());
    }

    /**
     * {@inheritdoc}
     */
    protected function getTokenUrl()
    {
        return 'https://www.linkedin.com/oauth/v2/accessToken';
    }

    /**
     * Get the POST fields for the token request.
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
     * {@inheritdoc}
     */
    protected function getUserByToken(AccessTokenInterface $token)
    {
        $basicProfile = $this->getBasicProfile($token);
        $emailAddress = $this->getEmailAddress($token);

        return array_merge($basicProfile, $emailAddress);
    }

    /**
     * Get the basic profile fields for the user.
     *
     * @param string $token
     *
     * @return array
     */
    protected function getBasicProfile($token)
    {
        $url = 'https://api.linkedin.com/v2/me?projection=(id,firstName,lastName,profilePicture(displayImage~:playableStreams))';

        $response = $this->getHttpClient()->get($url, [
            'headers' => [
                'Authorization' => 'Bearer '.$token,
                'X-RestLi-Protocol-Version' => '2.0.0',
            ],
        ]);

        return (array) json_decode($response->getBody(), true);
    }

    /**
     * Get the email address for the user.
     *
     * @param string $token
     *
     * @return array
     */
    protected function getEmailAddress($token)
    {
        $url = 'https://api.linkedin.com/v2/emailAddress?q=members&projection=(elements*(handle~))';

        $response = $this->getHttpClient()->get($url, [
            'headers' => [
                'Authorization' => 'Bearer '.$token,
                'X-RestLi-Protocol-Version' => '2.0.0',
            ],
        ]);

        return (array) $this->arrayItem(json_decode($response->getBody(), true), 'elements.0.handle~');
    }

    /**
     * {@inheritdoc}
     */
    protected function mapUserToObject(array $user)
    {
        $preferredLocale = $this->arrayItem($user, 'firstName.preferredLocale.language').'_'.$this->arrayItem($user, 'firstName.preferredLocale.country');
        $firstName = $this->arrayItem($user, 'firstName.localized.'.$preferredLocale);
        $lastName = $this->arrayItem($user, 'lastName.localized.'.$preferredLocale);
        $name = $firstName.' '.$lastName;

        $images = (array) $this->arrayItem($user, 'profilePicture.displayImage~.elements', []);
        $avatars = array_filter($images, function ($image) {
            return $image['data']['com.linkedin.digitalmedia.mediaartifact.StillImage']['storageSize']['width'] === 100;
        });
        $avatar = array_shift($avatars);
        $originalAvatars = array_filter($images, function ($image) {
            return $image['data']['com.linkedin.digitalmedia.mediaartifact.StillImage']['storageSize']['width'] === 800;
        });
        $originalAvatar = array_shift($originalAvatars);

        return new User([
            'id' => $this->arrayItem($user, 'id'),
            'nickname' => $name,
            'name' => $name,
            'email' => $this->arrayItem($user, 'emailAddress'),
            'avatar' => $avatar ? $this->arrayItem($avatar, 'identifiers.0.identifier') : null,
            'avatar_original' => $originalAvatar ? $this->arrayItem($originalAvatar, 'identifiers.0.identifier') : null,
        ]);
    }

    /**
     * Set the user fields to request from LinkedIn.
     *
     * @param array $fields
     *
     * @return $this
     */
    public function fields(array $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * Determine if the provider is operating as stateless.
     *
     * @return bool
     */
    protected function isStateless()
    {
        return true;
    }
}
