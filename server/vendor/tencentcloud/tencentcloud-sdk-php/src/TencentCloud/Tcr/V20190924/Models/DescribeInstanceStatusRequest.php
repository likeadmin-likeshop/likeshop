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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceStatus请求参数结构体
 *
 * @method array getRegistryIds() 获取实例ID的数组
 * @method void setRegistryIds(array $RegistryIds) 设置实例ID的数组
 */
class DescribeInstanceStatusRequest extends AbstractModel
{
    /**
     * @var array 实例ID的数组
     */
    public $RegistryIds;

    /**
     * @param array $RegistryIds 实例ID的数组
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
        if (array_key_exists("RegistryIds",$param) and $param["RegistryIds"] !== null) {
            $this->RegistryIds = $param["RegistryIds"];
        }
    }
}
