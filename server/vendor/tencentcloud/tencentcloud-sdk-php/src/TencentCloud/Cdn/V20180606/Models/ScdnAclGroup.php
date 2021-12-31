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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCDN精准访问控制配置
 *
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method array getConfigure() 获取具体配置
 * @method void setConfigure(array $Configure) 设置具体配置
 * @method string getResult() 获取规则行为，一般为refuse
 * @method void setResult(string $Result) 设置规则行为，一般为refuse
 * @method string getStatus() 获取规则是否生效中active|inactive
 * @method void setStatus(string $Status) 设置规则是否生效中active|inactive
 */
class ScdnAclGroup extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var array 具体配置
     */
    public $Configure;

    /**
     * @var string 规则行为，一般为refuse
     */
    public $Result;

    /**
     * @var string 规则是否生效中active|inactive
     */
    public $Status;

    /**
     * @param string $RuleName 规则名称
     * @param array $Configure 具体配置
     * @param string $Result 规则行为，一般为refuse
     * @param string $Status 规则是否生效中active|inactive
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Configure",$param) and $param["Configure"] !== null) {
            $this->Configure = [];
            foreach ($param["Configure"] as $key => $value){
                $obj = new ScdnAclRule();
                $obj->deserialize($value);
                array_push($this->Configure, $obj);
            }
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
