<?php

/*
 * This file is part of the overtrue/socialite.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use Overtrue\Socialite\AccessToken;
use Overtrue\Socialite\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testJsonserialize()
    {
        $this->assertSame('[]', json_encode(new User([])));

        $this->assertSame('{"token":"mock-token"}', json_encode(new User(['token' => new AccessToken(['access_token' => 'mock-token'])])));
    }

    public function test_it_can_get_refresh_token()
    {
        $user = new User([
            'access_token' => 'mock-token',
            'refresh_token' => 'fake_refresh',
        ]);

        // 能通过用 User 对象获取 refresh token
        $this->assertSame('fake_refresh', $user->getRefreshToken());
        // json 序列化只有 token 字段
        $this->assertSame('{"access_token":"mock-token","refresh_token":"fake_refresh"}', json_encode($user));

        $user = new User([]);
        $user->setToken(new AccessToken([
            'access_token' => 'mock-token',
            'refresh_token' => 'fake_refresh',
        ]));
        $this->assertSame('fake_refresh', $user->getRefreshToken());
        $this->assertSame('{"token":"mock-token","access_token":"mock-token","refresh_token":"fake_refresh"}', json_encode($user));
    }
}
