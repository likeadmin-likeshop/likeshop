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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRoomInfo请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用ID，登录[控制台 - 服务管理](https://console.cloud.tencent.com/gamegme)创建应用得到的AppID
 * @method void setSdkAppId(integer $SdkAppId) 设置应用ID，登录[控制台 - 服务管理](https://console.cloud.tencent.com/gamegme)创建应用得到的AppID
 * @method array getRoomIds() 获取房间号列表，最大不能超过10个
 * @method void setRoomIds(array $RoomIds) 设置房间号列表，最大不能超过10个
 */
class DescribeRoomInfoRequest extends AbstractModel
{
    /**
     * @var integer 应用ID，登录[控制台 - 服务管理](https://console.cloud.tencent.com/gamegme)创建应用得到的AppID
     */
    public $SdkAppId;

    /**
     * @var array 房间号列表，最大不能超过10个
     */
    public $RoomIds;

    /**
     * @param integer $SdkAppId 应用ID，登录[控制台 - 服务管理](https://console.cloud.tencent.com/gamegme)创建应用得到的AppID
     * @param array $RoomIds 房间号列表，最大不能超过10个
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RoomIds",$param) and $param["RoomIds"] !== null) {
            $this->RoomIds = $param["RoomIds"];
        }
    }
}
