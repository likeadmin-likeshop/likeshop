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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Ingress 规则 backend 配置
 *
 * @method string getServiceName() 获取eks service 名
 * @method void setServiceName(string $ServiceName) 设置eks service 名
 * @method integer getServicePort() 获取eks service 端口
 * @method void setServicePort(integer $ServicePort) 设置eks service 端口
 */
class IngressRuleBackend extends AbstractModel
{
    /**
     * @var string eks service 名
     */
    public $ServiceName;

    /**
     * @var integer eks service 端口
     */
    public $ServicePort;

    /**
     * @param string $ServiceName eks service 名
     * @param integer $ServicePort eks service 端口
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServicePort",$param) and $param["ServicePort"] !== null) {
            $this->ServicePort = $param["ServicePort"];
        }
    }
}
