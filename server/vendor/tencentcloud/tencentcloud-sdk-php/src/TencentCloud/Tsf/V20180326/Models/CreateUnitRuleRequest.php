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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUnitRule请求参数结构体
 *
 * @method string getGatewayInstanceId() 获取网关实体ID
 * @method void setGatewayInstanceId(string $GatewayInstanceId) 设置网关实体ID
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method string getDescription() 获取规则描述
 * @method void setDescription(string $Description) 设置规则描述
 * @method array getUnitRuleItemList() 获取规则项列表
 * @method void setUnitRuleItemList(array $UnitRuleItemList) 设置规则项列表
 */
class CreateUnitRuleRequest extends AbstractModel
{
    /**
     * @var string 网关实体ID
     */
    public $GatewayInstanceId;

    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var string 规则描述
     */
    public $Description;

    /**
     * @var array 规则项列表
     */
    public $UnitRuleItemList;

    /**
     * @param string $GatewayInstanceId 网关实体ID
     * @param string $Name 规则名称
     * @param string $Description 规则描述
     * @param array $UnitRuleItemList 规则项列表
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
        if (array_key_exists("GatewayInstanceId",$param) and $param["GatewayInstanceId"] !== null) {
            $this->GatewayInstanceId = $param["GatewayInstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UnitRuleItemList",$param) and $param["UnitRuleItemList"] !== null) {
            $this->UnitRuleItemList = [];
            foreach ($param["UnitRuleItemList"] as $key => $value){
                $obj = new UnitRuleItem();
                $obj->deserialize($value);
                array_push($this->UnitRuleItemList, $obj);
            }
        }
    }
}
