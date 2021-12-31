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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubnetByHostedDevice请求参数结构体
 *
 * @method string getInstanceId() 获取托管机器ID, 如chm-xasdfx2j
 * @method void setInstanceId(string $InstanceId) 设置托管机器ID, 如chm-xasdfx2j
 * @method array getTypes() 获取子网类型。0: 物理机子网; 7: DOCKER子网 8: 虚拟子网
 * @method void setTypes(array $Types) 设置子网类型。0: 物理机子网; 7: DOCKER子网 8: 虚拟子网
 * @method integer getOffset() 获取查询的起始位置。
 * @method void setOffset(integer $Offset) 设置查询的起始位置。
 * @method integer getLimit() 获取查询的个数。
 * @method void setLimit(integer $Limit) 设置查询的个数。
 */
class DescribeSubnetByHostedDeviceRequest extends AbstractModel
{
    /**
     * @var string 托管机器ID, 如chm-xasdfx2j
     */
    public $InstanceId;

    /**
     * @var array 子网类型。0: 物理机子网; 7: DOCKER子网 8: 虚拟子网
     */
    public $Types;

    /**
     * @var integer 查询的起始位置。
     */
    public $Offset;

    /**
     * @var integer 查询的个数。
     */
    public $Limit;

    /**
     * @param string $InstanceId 托管机器ID, 如chm-xasdfx2j
     * @param array $Types 子网类型。0: 物理机子网; 7: DOCKER子网 8: 虚拟子网
     * @param integer $Offset 查询的起始位置。
     * @param integer $Limit 查询的个数。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
