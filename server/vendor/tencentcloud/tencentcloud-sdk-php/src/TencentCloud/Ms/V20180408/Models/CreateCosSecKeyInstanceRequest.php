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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCosSecKeyInstance请求参数结构体
 *
 * @method string getCosRegion() 获取地域信息，例如广州：ap-guangzhou，上海：ap-shanghai，默认为广州。
 * @method void setCosRegion(string $CosRegion) 设置地域信息，例如广州：ap-guangzhou，上海：ap-shanghai，默认为广州。
 * @method integer getDuration() 获取密钥有效时间，默认为1小时。
 * @method void setDuration(integer $Duration) 设置密钥有效时间，默认为1小时。
 */
class CreateCosSecKeyInstanceRequest extends AbstractModel
{
    /**
     * @var string 地域信息，例如广州：ap-guangzhou，上海：ap-shanghai，默认为广州。
     */
    public $CosRegion;

    /**
     * @var integer 密钥有效时间，默认为1小时。
     */
    public $Duration;

    /**
     * @param string $CosRegion 地域信息，例如广州：ap-guangzhou，上海：ap-shanghai，默认为广州。
     * @param integer $Duration 密钥有效时间，默认为1小时。
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
        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
