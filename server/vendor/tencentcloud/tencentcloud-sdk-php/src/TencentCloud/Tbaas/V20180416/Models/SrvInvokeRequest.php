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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SrvInvoke请求参数结构体
 *
 * @method string getService() 获取服务类型，iss或者dam
 * @method void setService(string $Service) 设置服务类型，iss或者dam
 * @method string getMethod() 获取服务接口，要调用的方法函数名
 * @method void setMethod(string $Method) 设置服务接口，要调用的方法函数名
 * @method string getParam() 获取用户自定义json字符串
 * @method void setParam(string $Param) 设置用户自定义json字符串
 */
class SrvInvokeRequest extends AbstractModel
{
    /**
     * @var string 服务类型，iss或者dam
     */
    public $Service;

    /**
     * @var string 服务接口，要调用的方法函数名
     */
    public $Method;

    /**
     * @var string 用户自定义json字符串
     */
    public $Param;

    /**
     * @param string $Service 服务类型，iss或者dam
     * @param string $Method 服务接口，要调用的方法函数名
     * @param string $Param 用户自定义json字符串
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
        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = $param["Param"];
        }
    }
}
