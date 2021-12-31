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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 代客基础信息
 *
 * @method string getAgentUin() 获取代客关联的代理商UIN
 * @method void setAgentUin(string $AgentUin) 设置代客关联的代理商UIN
 * @method string getClientUin() 获取代客UIN
 * @method void setClientUin(string $ClientUin) 设置代客UIN
 * @method integer getClientRelateType() 获取代客关联类型 0:代理 1:转售
 * @method void setClientRelateType(integer $ClientRelateType) 设置代客关联类型 0:代理 1:转售
 * @method integer getAgentCooperationMode() 获取代理商合作模式 0:代理 1:转售
 * @method void setAgentCooperationMode(integer $AgentCooperationMode) 设置代理商合作模式 0:代理 1:转售
 * @method string getAgentCountry() 获取代理商国家编码 China:中国  其他:海外，如US等
 * @method void setAgentCountry(string $AgentCountry) 设置代理商国家编码 China:中国  其他:海外，如US等
 */
class ClientBaseElem extends AbstractModel
{
    /**
     * @var string 代客关联的代理商UIN
     */
    public $AgentUin;

    /**
     * @var string 代客UIN
     */
    public $ClientUin;

    /**
     * @var integer 代客关联类型 0:代理 1:转售
     */
    public $ClientRelateType;

    /**
     * @var integer 代理商合作模式 0:代理 1:转售
     */
    public $AgentCooperationMode;

    /**
     * @var string 代理商国家编码 China:中国  其他:海外，如US等
     */
    public $AgentCountry;

    /**
     * @param string $AgentUin 代客关联的代理商UIN
     * @param string $ClientUin 代客UIN
     * @param integer $ClientRelateType 代客关联类型 0:代理 1:转售
     * @param integer $AgentCooperationMode 代理商合作模式 0:代理 1:转售
     * @param string $AgentCountry 代理商国家编码 China:中国  其他:海外，如US等
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
        if (array_key_exists("AgentUin",$param) and $param["AgentUin"] !== null) {
            $this->AgentUin = $param["AgentUin"];
        }

        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("ClientRelateType",$param) and $param["ClientRelateType"] !== null) {
            $this->ClientRelateType = $param["ClientRelateType"];
        }

        if (array_key_exists("AgentCooperationMode",$param) and $param["AgentCooperationMode"] !== null) {
            $this->AgentCooperationMode = $param["AgentCooperationMode"];
        }

        if (array_key_exists("AgentCountry",$param) and $param["AgentCountry"] !== null) {
            $this->AgentCountry = $param["AgentCountry"];
        }
    }
}
