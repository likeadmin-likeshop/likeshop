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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAcRule请求参数结构体
 *
 * @method array getData() 获取规则数组
 * @method void setData(array $Data) 设置规则数组
 * @method string getEdgeId() 获取EdgeId值
 * @method void setEdgeId(string $EdgeId) 设置EdgeId值
 * @method integer getEnable() 获取访问规则状态
 * @method void setEnable(integer $Enable) 设置访问规则状态
 * @method string getArea() 获取NAT地域
 * @method void setArea(string $Area) 设置NAT地域
 */
class ModifyAcRuleRequest extends AbstractModel
{
    /**
     * @var array 规则数组
     */
    public $Data;

    /**
     * @var string EdgeId值
     */
    public $EdgeId;

    /**
     * @var integer 访问规则状态
     */
    public $Enable;

    /**
     * @var string NAT地域
     */
    public $Area;

    /**
     * @param array $Data 规则数组
     * @param string $EdgeId EdgeId值
     * @param integer $Enable 访问规则状态
     * @param string $Area NAT地域
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new RuleInfoData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
