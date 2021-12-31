<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace TencentCloud\Mgobe\V20201014;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mgobe\V20201014\Models as Models;

/**
 * @method Models\ChangeRoomPlayerProfileResponse ChangeRoomPlayerProfile(Models\ChangeRoomPlayerProfileRequest $req) 修改房间玩家自定义属性
 * @method Models\ChangeRoomPlayerStatusResponse ChangeRoomPlayerStatus(Models\ChangeRoomPlayerStatusRequest $req) 修改玩家自定义状态
 * @method Models\DescribePlayerResponse DescribePlayer(Models\DescribePlayerRequest $req) 该接口用于查询玩家信息。支持两种用法，当OpenId不传的时候，PlayerId必传，传入PlayerId可以查询当前PlayerId的玩家信息，当OpenId传入的时候，PlayerId可不传，按照OpenId查询玩家信息。
 * @method Models\DescribeRoomResponse DescribeRoom(Models\DescribeRoomRequest $req) 该接口用于查询房间信息。支持两种用法，当房间Id不传的时候，玩家Id必传，传入玩家Id可以查询当前玩家所在的房间信息，当房间Id传入的时候，玩家Id可不传，按照房间Id查询房间信息。
 * @method Models\DismissRoomResponse DismissRoom(Models\DismissRoomRequest $req) 通过game_id、room_id解散房间
 * @method Models\ModifyRoomResponse ModifyRoom(Models\ModifyRoomRequest $req) 修改房间
 * @method Models\RemoveRoomPlayerResponse RemoveRoomPlayer(Models\RemoveRoomPlayerRequest $req) 踢出房间玩家
 */

class MgobeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mgobe.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "mgobe";

    /**
     * @var string
     */
    protected $version = "2020-10-14";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("mgobe")."\\"."V20201014\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
