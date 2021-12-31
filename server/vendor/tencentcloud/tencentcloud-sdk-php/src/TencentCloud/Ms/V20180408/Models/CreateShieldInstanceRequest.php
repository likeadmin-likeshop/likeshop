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
 * CreateShieldInstance请求参数结构体
 *
 * @method AppInfo getAppInfo() 获取待加固的应用信息
 * @method void setAppInfo(AppInfo $AppInfo) 设置待加固的应用信息
 * @method ServiceInfo getServiceInfo() 获取加固服务信息
 * @method void setServiceInfo(ServiceInfo $ServiceInfo) 设置加固服务信息
 */
class CreateShieldInstanceRequest extends AbstractModel
{
    /**
     * @var AppInfo 待加固的应用信息
     */
    public $AppInfo;

    /**
     * @var ServiceInfo 加固服务信息
     */
    public $ServiceInfo;

    /**
     * @param AppInfo $AppInfo 待加固的应用信息
     * @param ServiceInfo $ServiceInfo 加固服务信息
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
        if (array_key_exists("AppInfo",$param) and $param["AppInfo"] !== null) {
            $this->AppInfo = new AppInfo();
            $this->AppInfo->deserialize($param["AppInfo"]);
        }

        if (array_key_exists("ServiceInfo",$param) and $param["ServiceInfo"] !== null) {
            $this->ServiceInfo = new ServiceInfo();
            $this->ServiceInfo->deserialize($param["ServiceInfo"]);
        }
    }
}
