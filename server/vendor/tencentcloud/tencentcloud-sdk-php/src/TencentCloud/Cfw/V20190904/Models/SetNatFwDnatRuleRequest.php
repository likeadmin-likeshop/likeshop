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
 * SetNatFwDnatRule请求参数结构体
 *
 * @method integer getMode() 获取0：cfw新增模式，1：cfw接入模式。
 * @method void setMode(integer $Mode) 设置0：cfw新增模式，1：cfw接入模式。
 * @method string getOperationType() 获取操作类型，可选值：add，del，modify。
 * @method void setOperationType(string $OperationType) 设置操作类型，可选值：add，del，modify。
 * @method string getCfwInstance() 获取防火墙实例id。
 * @method void setCfwInstance(string $CfwInstance) 设置防火墙实例id。
 * @method array getAddOrDelDnatRules() 获取添加或删除操作的Dnat规则列表。
 * @method void setAddOrDelDnatRules(array $AddOrDelDnatRules) 设置添加或删除操作的Dnat规则列表。
 * @method CfwNatDnatRule getOriginDnat() 获取修改操作的原始Dnat规则
 * @method void setOriginDnat(CfwNatDnatRule $OriginDnat) 设置修改操作的原始Dnat规则
 * @method CfwNatDnatRule getNewDnat() 获取修改操作的新的Dnat规则
 * @method void setNewDnat(CfwNatDnatRule $NewDnat) 设置修改操作的新的Dnat规则
 */
class SetNatFwDnatRuleRequest extends AbstractModel
{
    /**
     * @var integer 0：cfw新增模式，1：cfw接入模式。
     */
    public $Mode;

    /**
     * @var string 操作类型，可选值：add，del，modify。
     */
    public $OperationType;

    /**
     * @var string 防火墙实例id。
     */
    public $CfwInstance;

    /**
     * @var array 添加或删除操作的Dnat规则列表。
     */
    public $AddOrDelDnatRules;

    /**
     * @var CfwNatDnatRule 修改操作的原始Dnat规则
     */
    public $OriginDnat;

    /**
     * @var CfwNatDnatRule 修改操作的新的Dnat规则
     */
    public $NewDnat;

    /**
     * @param integer $Mode 0：cfw新增模式，1：cfw接入模式。
     * @param string $OperationType 操作类型，可选值：add，del，modify。
     * @param string $CfwInstance 防火墙实例id。
     * @param array $AddOrDelDnatRules 添加或删除操作的Dnat规则列表。
     * @param CfwNatDnatRule $OriginDnat 修改操作的原始Dnat规则
     * @param CfwNatDnatRule $NewDnat 修改操作的新的Dnat规则
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("CfwInstance",$param) and $param["CfwInstance"] !== null) {
            $this->CfwInstance = $param["CfwInstance"];
        }

        if (array_key_exists("AddOrDelDnatRules",$param) and $param["AddOrDelDnatRules"] !== null) {
            $this->AddOrDelDnatRules = [];
            foreach ($param["AddOrDelDnatRules"] as $key => $value){
                $obj = new CfwNatDnatRule();
                $obj->deserialize($value);
                array_push($this->AddOrDelDnatRules, $obj);
            }
        }

        if (array_key_exists("OriginDnat",$param) and $param["OriginDnat"] !== null) {
            $this->OriginDnat = new CfwNatDnatRule();
            $this->OriginDnat->deserialize($param["OriginDnat"]);
        }

        if (array_key_exists("NewDnat",$param) and $param["NewDnat"] !== null) {
            $this->NewDnat = new CfwNatDnatRule();
            $this->NewDnat->deserialize($param["NewDnat"]);
        }
    }
}
