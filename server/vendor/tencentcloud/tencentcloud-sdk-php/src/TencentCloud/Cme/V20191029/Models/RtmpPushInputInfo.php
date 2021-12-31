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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播推流信息，包括推流地址有效时长，云剪后端生成直播推流地址。
 *
 * @method integer getExpiredSecond() 获取直播推流地址有效期，单位：秒 。
 * @method void setExpiredSecond(integer $ExpiredSecond) 设置直播推流地址有效期，单位：秒 。
 * @method string getPushUrl() 获取直播推流地址，入参不填默认由云剪生成。
 * @method void setPushUrl(string $PushUrl) 设置直播推流地址，入参不填默认由云剪生成。
 */
class RtmpPushInputInfo extends AbstractModel
{
    /**
     * @var integer 直播推流地址有效期，单位：秒 。
     */
    public $ExpiredSecond;

    /**
     * @var string 直播推流地址，入参不填默认由云剪生成。
     */
    public $PushUrl;

    /**
     * @param integer $ExpiredSecond 直播推流地址有效期，单位：秒 。
     * @param string $PushUrl 直播推流地址，入参不填默认由云剪生成。
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
        if (array_key_exists("ExpiredSecond",$param) and $param["ExpiredSecond"] !== null) {
            $this->ExpiredSecond = $param["ExpiredSecond"];
        }

        if (array_key_exists("PushUrl",$param) and $param["PushUrl"] !== null) {
            $this->PushUrl = $param["PushUrl"];
        }
    }
}
