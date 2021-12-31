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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DestroyEnv请求参数结构体
 *
 * @method string getEnvId() 获取环境Id
 * @method void setEnvId(string $EnvId) 设置环境Id
 * @method boolean getIsForce() 获取针对预付费 删除隔离中的环境时要传true 正常环境直接跳过隔离期删除
 * @method void setIsForce(boolean $IsForce) 设置针对预付费 删除隔离中的环境时要传true 正常环境直接跳过隔离期删除
 * @method boolean getBypassCheck() 获取是否绕过资源检查，资源包等额外资源，默认为false，如果为true，则不检查资源是否有数据，直接删除。
 * @method void setBypassCheck(boolean $BypassCheck) 设置是否绕过资源检查，资源包等额外资源，默认为false，如果为true，则不检查资源是否有数据，直接删除。
 */
class DestroyEnvRequest extends AbstractModel
{
    /**
     * @var string 环境Id
     */
    public $EnvId;

    /**
     * @var boolean 针对预付费 删除隔离中的环境时要传true 正常环境直接跳过隔离期删除
     */
    public $IsForce;

    /**
     * @var boolean 是否绕过资源检查，资源包等额外资源，默认为false，如果为true，则不检查资源是否有数据，直接删除。
     */
    public $BypassCheck;

    /**
     * @param string $EnvId 环境Id
     * @param boolean $IsForce 针对预付费 删除隔离中的环境时要传true 正常环境直接跳过隔离期删除
     * @param boolean $BypassCheck 是否绕过资源检查，资源包等额外资源，默认为false，如果为true，则不检查资源是否有数据，直接删除。
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("IsForce",$param) and $param["IsForce"] !== null) {
            $this->IsForce = $param["IsForce"];
        }

        if (array_key_exists("BypassCheck",$param) and $param["BypassCheck"] !== null) {
            $this->BypassCheck = $param["BypassCheck"];
        }
    }
}
