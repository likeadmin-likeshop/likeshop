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
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateRule请求参数结构体
 *
 * @method string getRuleId() 获取规则Id
 * @method void setRuleId(string $RuleId) 设置规则Id
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method RuleQuery getQuery() 获取查询
 * @method void setQuery(RuleQuery $Query) 设置查询
 * @method array getActions() 获取转发动作列表
 * @method void setActions(array $Actions) 设置转发动作列表
 * @method integer getDataType() 获取数据类型（0：文本，1：二进制）
 * @method void setDataType(integer $DataType) 设置数据类型（0：文本，1：二进制）
 */
class UpdateRuleRequest extends AbstractModel
{
    /**
     * @var string 规则Id
     */
    public $RuleId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var RuleQuery 查询
     */
    public $Query;

    /**
     * @var array 转发动作列表
     */
    public $Actions;

    /**
     * @var integer 数据类型（0：文本，1：二进制）
     */
    public $DataType;

    /**
     * @param string $RuleId 规则Id
     * @param string $Name 名称
     * @param string $Description 描述
     * @param RuleQuery $Query 查询
     * @param array $Actions 转发动作列表
     * @param integer $DataType 数据类型（0：文本，1：二进制）
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = new RuleQuery();
            $this->Query->deserialize($param["Query"]);
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = [];
            foreach ($param["Actions"] as $key => $value){
                $obj = new Action();
                $obj->deserialize($value);
                array_push($this->Actions, $obj);
            }
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }
    }
}
