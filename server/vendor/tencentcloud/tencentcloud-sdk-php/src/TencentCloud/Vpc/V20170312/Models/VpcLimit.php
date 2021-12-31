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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 私有网络配额
 *
 * @method string getLimitType() 获取私有网络配额描述
 * @method void setLimitType(string $LimitType) 设置私有网络配额描述
 * @method integer getLimitValue() 获取私有网络配额值
 * @method void setLimitValue(integer $LimitValue) 设置私有网络配额值
 */
class VpcLimit extends AbstractModel
{
    /**
     * @var string 私有网络配额描述
     */
    public $LimitType;

    /**
     * @var integer 私有网络配额值
     */
    public $LimitValue;

    /**
     * @param string $LimitType 私有网络配额描述
     * @param integer $LimitValue 私有网络配额值
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
        if (array_key_exists("LimitType",$param) and $param["LimitType"] !== null) {
            $this->LimitType = $param["LimitType"];
        }

        if (array_key_exists("LimitValue",$param) and $param["LimitValue"] !== null) {
            $this->LimitValue = $param["LimitValue"];
        }
    }
}
