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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EditBashRule请求参数结构体
 *
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method integer getLevel() 获取危险等级(1: 高危 2:中危 3: 低危)
 * @method void setLevel(integer $Level) 设置危险等级(1: 高危 2:中危 3: 低危)
 * @method string getRule() 获取正则表达式
 * @method void setRule(string $Rule) 设置正则表达式
 * @method integer getId() 获取规则ID(新增时不填)
 * @method void setId(integer $Id) 设置规则ID(新增时不填)
 * @method string getUuid() 获取客户端ID(IsGlobal为1时，Uuid或Hostip必填一个)
 * @method void setUuid(string $Uuid) 设置客户端ID(IsGlobal为1时，Uuid或Hostip必填一个)
 * @method string getHostip() 获取主机IP(IsGlobal为1时，Uuid或Hostip必填一个)
 * @method void setHostip(string $Hostip) 设置主机IP(IsGlobal为1时，Uuid或Hostip必填一个)
 * @method integer getIsGlobal() 获取是否全局规则(默认否)
 * @method void setIsGlobal(integer $IsGlobal) 设置是否全局规则(默认否)
 */
class EditBashRuleRequest extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var integer 危险等级(1: 高危 2:中危 3: 低危)
     */
    public $Level;

    /**
     * @var string 正则表达式
     */
    public $Rule;

    /**
     * @var integer 规则ID(新增时不填)
     */
    public $Id;

    /**
     * @var string 客户端ID(IsGlobal为1时，Uuid或Hostip必填一个)
     */
    public $Uuid;

    /**
     * @var string 主机IP(IsGlobal为1时，Uuid或Hostip必填一个)
     */
    public $Hostip;

    /**
     * @var integer 是否全局规则(默认否)
     */
    public $IsGlobal;

    /**
     * @param string $Name 规则名称
     * @param integer $Level 危险等级(1: 高危 2:中危 3: 低危)
     * @param string $Rule 正则表达式
     * @param integer $Id 规则ID(新增时不填)
     * @param string $Uuid 客户端ID(IsGlobal为1时，Uuid或Hostip必填一个)
     * @param string $Hostip 主机IP(IsGlobal为1时，Uuid或Hostip必填一个)
     * @param integer $IsGlobal 是否全局规则(默认否)
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Hostip",$param) and $param["Hostip"] !== null) {
            $this->Hostip = $param["Hostip"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }
    }
}
