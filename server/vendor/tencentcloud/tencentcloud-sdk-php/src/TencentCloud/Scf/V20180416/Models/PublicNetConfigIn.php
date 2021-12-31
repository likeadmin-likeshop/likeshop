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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 公网访问配置
 *
 * @method string getPublicNetStatus() 获取是否开启公网访问能力取值['DISABLE','ENABLE']
 * @method void setPublicNetStatus(string $PublicNetStatus) 设置是否开启公网访问能力取值['DISABLE','ENABLE']
 * @method EipConfigIn getEipConfig() 获取Eip配置
 * @method void setEipConfig(EipConfigIn $EipConfig) 设置Eip配置
 */
class PublicNetConfigIn extends AbstractModel
{
    /**
     * @var string 是否开启公网访问能力取值['DISABLE','ENABLE']
     */
    public $PublicNetStatus;

    /**
     * @var EipConfigIn Eip配置
     */
    public $EipConfig;

    /**
     * @param string $PublicNetStatus 是否开启公网访问能力取值['DISABLE','ENABLE']
     * @param EipConfigIn $EipConfig Eip配置
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
        if (array_key_exists("PublicNetStatus",$param) and $param["PublicNetStatus"] !== null) {
            $this->PublicNetStatus = $param["PublicNetStatus"];
        }

        if (array_key_exists("EipConfig",$param) and $param["EipConfig"] !== null) {
            $this->EipConfig = new EipConfigIn();
            $this->EipConfig->deserialize($param["EipConfig"]);
        }
    }
}
