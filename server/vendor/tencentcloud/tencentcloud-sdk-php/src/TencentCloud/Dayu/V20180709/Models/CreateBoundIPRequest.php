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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBoundIP请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgp表示独享包；bgp-multip表示共享包）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgp表示独享包；bgp-multip表示共享包）
 * @method string getId() 获取资源实例ID
 * @method void setId(string $Id) 设置资源实例ID
 * @method array getBoundDevList() 获取绑定到资源实例的IP数组，当资源实例为高防包(独享包)时，数组只允许填1个IP；当没有要绑定的IP时可以为空数组；但是BoundDevList和UnBoundDevList至少有一个不为空；
 * @method void setBoundDevList(array $BoundDevList) 设置绑定到资源实例的IP数组，当资源实例为高防包(独享包)时，数组只允许填1个IP；当没有要绑定的IP时可以为空数组；但是BoundDevList和UnBoundDevList至少有一个不为空；
 * @method array getUnBoundDevList() 获取与资源实例解绑的IP数组，当资源实例为高防包(独享包)时，数组只允许填1个IP；当没有要解绑的IP时可以为空数组；但是BoundDevList和UnBoundDevList至少有一个不为空；
 * @method void setUnBoundDevList(array $UnBoundDevList) 设置与资源实例解绑的IP数组，当资源实例为高防包(独享包)时，数组只允许填1个IP；当没有要解绑的IP时可以为空数组；但是BoundDevList和UnBoundDevList至少有一个不为空；
 * @method string getCopyPolicy() 获取已弃用，不填
 * @method void setCopyPolicy(string $CopyPolicy) 设置已弃用，不填
 */
class CreateBoundIPRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgp表示独享包；bgp-multip表示共享包）
     */
    public $Business;

    /**
     * @var string 资源实例ID
     */
    public $Id;

    /**
     * @var array 绑定到资源实例的IP数组，当资源实例为高防包(独享包)时，数组只允许填1个IP；当没有要绑定的IP时可以为空数组；但是BoundDevList和UnBoundDevList至少有一个不为空；
     */
    public $BoundDevList;

    /**
     * @var array 与资源实例解绑的IP数组，当资源实例为高防包(独享包)时，数组只允许填1个IP；当没有要解绑的IP时可以为空数组；但是BoundDevList和UnBoundDevList至少有一个不为空；
     */
    public $UnBoundDevList;

    /**
     * @var string 已弃用，不填
     */
    public $CopyPolicy;

    /**
     * @param string $Business 大禹子产品代号（bgp表示独享包；bgp-multip表示共享包）
     * @param string $Id 资源实例ID
     * @param array $BoundDevList 绑定到资源实例的IP数组，当资源实例为高防包(独享包)时，数组只允许填1个IP；当没有要绑定的IP时可以为空数组；但是BoundDevList和UnBoundDevList至少有一个不为空；
     * @param array $UnBoundDevList 与资源实例解绑的IP数组，当资源实例为高防包(独享包)时，数组只允许填1个IP；当没有要解绑的IP时可以为空数组；但是BoundDevList和UnBoundDevList至少有一个不为空；
     * @param string $CopyPolicy 已弃用，不填
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("BoundDevList",$param) and $param["BoundDevList"] !== null) {
            $this->BoundDevList = [];
            foreach ($param["BoundDevList"] as $key => $value){
                $obj = new BoundIpInfo();
                $obj->deserialize($value);
                array_push($this->BoundDevList, $obj);
            }
        }

        if (array_key_exists("UnBoundDevList",$param) and $param["UnBoundDevList"] !== null) {
            $this->UnBoundDevList = [];
            foreach ($param["UnBoundDevList"] as $key => $value){
                $obj = new BoundIpInfo();
                $obj->deserialize($value);
                array_push($this->UnBoundDevList, $obj);
            }
        }

        if (array_key_exists("CopyPolicy",$param) and $param["CopyPolicy"] !== null) {
            $this->CopyPolicy = $param["CopyPolicy"];
        }
    }
}
