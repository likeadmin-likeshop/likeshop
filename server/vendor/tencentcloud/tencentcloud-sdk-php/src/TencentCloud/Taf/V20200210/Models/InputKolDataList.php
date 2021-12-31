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
namespace TencentCloud\Taf\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckKol
 *
 * @method integer getType() 获取账号类型[1：微信；2：qq；3：微博]
 * @method void setType(integer $Type) 设置账号类型[1：微信；2：qq；3：微博]
 * @method string getId() 获取KOL账号ID[比如微信公众号ID]
 * @method void setId(string $Id) 设置KOL账号ID[比如微信公众号ID]
 * @method string getName() 获取KOL名称
 * @method void setName(string $Name) 设置KOL名称
 * @method string getPhone() 获取手机号
 * @method void setPhone(string $Phone) 设置手机号
 * @method string getAgentInfo() 获取代理商名称
 * @method void setAgentInfo(string $AgentInfo) 设置代理商名称
 */
class InputKolDataList extends AbstractModel
{
    /**
     * @var integer 账号类型[1：微信；2：qq；3：微博]
     */
    public $Type;

    /**
     * @var string KOL账号ID[比如微信公众号ID]
     */
    public $Id;

    /**
     * @var string KOL名称
     */
    public $Name;

    /**
     * @var string 手机号
     */
    public $Phone;

    /**
     * @var string 代理商名称
     */
    public $AgentInfo;

    /**
     * @param integer $Type 账号类型[1：微信；2：qq；3：微博]
     * @param string $Id KOL账号ID[比如微信公众号ID]
     * @param string $Name KOL名称
     * @param string $Phone 手机号
     * @param string $AgentInfo 代理商名称
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("AgentInfo",$param) and $param["AgentInfo"] !== null) {
            $this->AgentInfo = $param["AgentInfo"];
        }
    }
}
