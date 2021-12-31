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
 * ModifyRoomInfo请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用ID，登录[控制台 - 服务管理](https://console.cloud.tencent.com/gamegme)创建应用得到的AppID
 * @method void setSdkAppId(integer $SdkAppId) 设置应用ID，登录[控制台 - 服务管理](https://console.cloud.tencent.com/gamegme)创建应用得到的AppID
 * @method integer getRoomId() 获取房间id
 * @method void setRoomId(integer $RoomId) 设置房间id
 * @method integer getOperationType() 获取301 启动推流
302 停止推流
303 重置RTMP连接
 * @method void setOperationType(integer $OperationType) 设置301 启动推流
302 停止推流
303 重置RTMP连接
 */
class ModifyRoomInfoRequest extends AbstractModel
{
    /**
     * @var integer 应用ID，登录[控制台 - 服务管理](https://console.cloud.tencent.com/gamegme)创建应用得到的AppID
     */
    public $SdkAppId;

    /**
     * @var integer 房间id
     */
    public $RoomId;

    /**
     * @var integer 301 启动推流
302 停止推流
303 重置RTMP连接
     */
    public $OperationType;

    /**
     * @param integer $SdkAppId 应用ID，登录[控制台 - 服务管理](https://console.cloud.tencent.com/gamegme)创建应用得到的AppID
     * @param integer $RoomId 房间id
     * @param integer $OperationType 301 启动推流
302 停止推流
303 重置RTMP连接
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }
    }
}
