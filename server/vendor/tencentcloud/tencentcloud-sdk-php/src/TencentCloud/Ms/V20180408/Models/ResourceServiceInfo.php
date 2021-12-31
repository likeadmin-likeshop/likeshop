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
 * 资源服务信息
 *
 * @method integer getCreateTime() 获取创建时间戳
 * @method void setCreateTime(integer $CreateTime) 设置创建时间戳
 * @method integer getExpireTime() 获取到期时间戳
 * @method void setExpireTime(integer $ExpireTime) 设置到期时间戳
 * @method string getResourceName() 获取资源名称，如应用加固，源码混淆
 * @method void setResourceName(string $ResourceName) 设置资源名称，如应用加固，源码混淆
 */
class ResourceServiceInfo extends AbstractModel
{
    /**
     * @var integer 创建时间戳
     */
    public $CreateTime;

    /**
     * @var integer 到期时间戳
     */
    public $ExpireTime;

    /**
     * @var string 资源名称，如应用加固，源码混淆
     */
    public $ResourceName;

    /**
     * @param integer $CreateTime 创建时间戳
     * @param integer $ExpireTime 到期时间戳
     * @param string $ResourceName 资源名称，如应用加固，源码混淆
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }
    }
}
