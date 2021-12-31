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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancesDiskNum请求参数结构体
 *
 * @method array getInstanceIds() 获取云服务器实例ID，通过[DescribeInstances](/document/product/213/15728)接口查询。
 * @method void setInstanceIds(array $InstanceIds) 设置云服务器实例ID，通过[DescribeInstances](/document/product/213/15728)接口查询。
 */
class DescribeInstancesDiskNumRequest extends AbstractModel
{
    /**
     * @var array 云服务器实例ID，通过[DescribeInstances](/document/product/213/15728)接口查询。
     */
    public $InstanceIds;

    /**
     * @param array $InstanceIds 云服务器实例ID，通过[DescribeInstances](/document/product/213/15728)接口查询。
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
