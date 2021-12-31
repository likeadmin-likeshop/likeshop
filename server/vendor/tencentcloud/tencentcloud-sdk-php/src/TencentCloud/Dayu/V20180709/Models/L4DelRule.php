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
 * 删除l4规则接口
 *
 * @method string getId() 获取资源Id
 * @method void setId(string $Id) 设置资源Id
 * @method string getIp() 获取资源IP
 * @method void setIp(string $Ip) 设置资源IP
 * @method array getRuleIdList() 获取规则Id
 * @method void setRuleIdList(array $RuleIdList) 设置规则Id
 */
class L4DelRule extends AbstractModel
{
    /**
     * @var string 资源Id
     */
    public $Id;

    /**
     * @var string 资源IP
     */
    public $Ip;

    /**
     * @var array 规则Id
     */
    public $RuleIdList;

    /**
     * @param string $Id 资源Id
     * @param string $Ip 资源IP
     * @param array $RuleIdList 规则Id
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("RuleIdList",$param) and $param["RuleIdList"] !== null) {
            $this->RuleIdList = $param["RuleIdList"];
        }
    }
}
