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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCaptchaOperData方法 尝试次数分布 type = 4
 *
 * @method integer getTryCount() 获取尝试次数
 * @method void setTryCount(integer $TryCount) 设置尝试次数
 * @method integer getUserCount() 获取用户请求数量
 * @method void setUserCount(integer $UserCount) 设置用户请求数量
 */
class CaptchaOperDataTryTimesDistributeUnit extends AbstractModel
{
    /**
     * @var integer 尝试次数
     */
    public $TryCount;

    /**
     * @var integer 用户请求数量
     */
    public $UserCount;

    /**
     * @param integer $TryCount 尝试次数
     * @param integer $UserCount 用户请求数量
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
        if (array_key_exists("TryCount",$param) and $param["TryCount"] !== null) {
            $this->TryCount = $param["TryCount"];
        }

        if (array_key_exists("UserCount",$param) and $param["UserCount"] !== null) {
            $this->UserCount = $param["UserCount"];
        }
    }
}
