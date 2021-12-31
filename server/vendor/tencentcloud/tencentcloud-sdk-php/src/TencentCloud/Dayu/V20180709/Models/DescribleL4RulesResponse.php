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
 * DescribleL4Rules返回参数结构体
 *
 * @method array getRules() 获取转发规则列表
 * @method void setRules(array $Rules) 设置转发规则列表
 * @method integer getTotal() 获取总规则数
 * @method void setTotal(integer $Total) 设置总规则数
 * @method array getHealths() 获取健康检查配置列表
 * @method void setHealths(array $Healths) 设置健康检查配置列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribleL4RulesResponse extends AbstractModel
{
    /**
     * @var array 转发规则列表
     */
    public $Rules;

    /**
     * @var integer 总规则数
     */
    public $Total;

    /**
     * @var array 健康检查配置列表
     */
    public $Healths;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Rules 转发规则列表
     * @param integer $Total 总规则数
     * @param array $Healths 健康检查配置列表
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new L4RuleEntry();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Healths",$param) and $param["Healths"] !== null) {
            $this->Healths = [];
            foreach ($param["Healths"] as $key => $value){
                $obj = new L4RuleHealth();
                $obj->deserialize($value);
                array_push($this->Healths, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
