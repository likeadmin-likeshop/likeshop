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
 * CreateNewL7Rules请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP）
 * @method array getIdList() 获取资源ID列表
 * @method void setIdList(array $IdList) 设置资源ID列表
 * @method array getVipList() 获取资源IP列表
 * @method void setVipList(array $VipList) 设置资源IP列表
 * @method array getRules() 获取规则列表
 * @method void setRules(array $Rules) 设置规则列表
 */
class CreateNewL7RulesRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP）
     */
    public $Business;

    /**
     * @var array 资源ID列表
     */
    public $IdList;

    /**
     * @var array 资源IP列表
     */
    public $VipList;

    /**
     * @var array 规则列表
     */
    public $Rules;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP）
     * @param array $IdList 资源ID列表
     * @param array $VipList 资源IP列表
     * @param array $Rules 规则列表
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("IdList",$param) and $param["IdList"] !== null) {
            $this->IdList = $param["IdList"];
        }

        if (array_key_exists("VipList",$param) and $param["VipList"] !== null) {
            $this->VipList = $param["VipList"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new L7RuleEntry();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
