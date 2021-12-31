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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExposeService请求参数结构体
 *
 * @method string getServiceId() 获取服务Id
 * @method void setServiceId(string $ServiceId) 设置服务Id
 * @method string getExposeType() 获取暴露方式，支持 EXTERNAL（外网暴露），VPC （VPC内网打通）
 * @method void setExposeType(string $ExposeType) 设置暴露方式，支持 EXTERNAL（外网暴露），VPC （VPC内网打通）
 * @method string getVpcId() 获取暴露方式为 VPC 时，填写需要打通的私有网络Id
 * @method void setVpcId(string $VpcId) 设置暴露方式为 VPC 时，填写需要打通的私有网络Id
 * @method string getSubnetId() 获取暴露方式为 VPC 时，填写需要打通的子网Id
 * @method void setSubnetId(string $SubnetId) 设置暴露方式为 VPC 时，填写需要打通的子网Id
 */
class ExposeServiceRequest extends AbstractModel
{
    /**
     * @var string 服务Id
     */
    public $ServiceId;

    /**
     * @var string 暴露方式，支持 EXTERNAL（外网暴露），VPC （VPC内网打通）
     */
    public $ExposeType;

    /**
     * @var string 暴露方式为 VPC 时，填写需要打通的私有网络Id
     */
    public $VpcId;

    /**
     * @var string 暴露方式为 VPC 时，填写需要打通的子网Id
     */
    public $SubnetId;

    /**
     * @param string $ServiceId 服务Id
     * @param string $ExposeType 暴露方式，支持 EXTERNAL（外网暴露），VPC （VPC内网打通）
     * @param string $VpcId 暴露方式为 VPC 时，填写需要打通的私有网络Id
     * @param string $SubnetId 暴露方式为 VPC 时，填写需要打通的子网Id
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ExposeType",$param) and $param["ExposeType"] !== null) {
            $this->ExposeType = $param["ExposeType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
