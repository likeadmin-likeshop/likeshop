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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSDKLoginToken请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用ID。
 * @method void setSdkAppId(integer $SdkAppId) 设置应用ID。
 * @method string getSeatUserId() 获取坐席账号。
 * @method void setSeatUserId(string $SeatUserId) 设置坐席账号。
 */
class CreateSDKLoginTokenRequest extends AbstractModel
{
    /**
     * @var integer 应用ID。
     */
    public $SdkAppId;

    /**
     * @var string 坐席账号。
     */
    public $SeatUserId;

    /**
     * @param integer $SdkAppId 应用ID。
     * @param string $SeatUserId 坐席账号。
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

        if (array_key_exists("SeatUserId",$param) and $param["SeatUserId"] !== null) {
            $this->SeatUserId = $param["SeatUserId"];
        }
    }
}
