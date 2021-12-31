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
 * CreateSubnet请求参数结构体
 *
 * @method string getVpcId() 获取系统分配的私有网络ID，例如：vpc-kd7d06of
 * @method void setVpcId(string $VpcId) 设置系统分配的私有网络ID，例如：vpc-kd7d06of
 * @method array getSubnetSet() 获取子网信息
 * @method void setSubnetSet(array $SubnetSet) 设置子网信息
 */
class CreateSubnetRequest extends AbstractModel
{
    /**
     * @var string 系统分配的私有网络ID，例如：vpc-kd7d06of
     */
    public $VpcId;

    /**
     * @var array 子网信息
     */
    public $SubnetSet;

    /**
     * @param string $VpcId 系统分配的私有网络ID，例如：vpc-kd7d06of
     * @param array $SubnetSet 子网信息
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetSet",$param) and $param["SubnetSet"] !== null) {
            $this->SubnetSet = [];
            foreach ($param["SubnetSet"] as $key => $value){
                $obj = new SubnetCreateInputInfo();
                $obj->deserialize($value);
                array_push($this->SubnetSet, $obj);
            }
        }
    }
}
