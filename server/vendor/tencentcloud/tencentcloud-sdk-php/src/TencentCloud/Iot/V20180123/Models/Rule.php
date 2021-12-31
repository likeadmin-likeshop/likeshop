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
 * 规则
 *
 * @method string getRuleId() 获取规则Id
 * @method void setRuleId(string $RuleId) 设置规则Id
 * @method integer getAppId() 获取AppId
 * @method void setAppId(integer $AppId) 设置AppId
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method RuleQuery getQuery() 获取查询
 * @method void setQuery(RuleQuery $Query) 设置查询
 * @method array getActions() 获取转发
 * @method void setActions(array $Actions) 设置转发
 * @method integer getActive() 获取已启动
 * @method void setActive(integer $Active) 设置已启动
 * @method integer getDeleted() 获取已删除
 * @method void setDeleted(integer $Deleted) 设置已删除
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method integer getMsgOrder() 获取消息顺序
 * @method void setMsgOrder(integer $MsgOrder) 设置消息顺序
 * @method integer getDataType() 获取数据类型（0：文本，1：二进制）
 * @method void setDataType(integer $DataType) 设置数据类型（0：文本，1：二进制）
 */
class Rule extends AbstractModel
{
    /**
     * @var string 规则Id
     */
    public $RuleId;

    /**
     * @var integer AppId
     */
    public $AppId;

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
     * @var array 转发
     */
    public $Actions;

    /**
     * @var integer 已启动
     */
    public $Active;

    /**
     * @var integer 已删除
     */
    public $Deleted;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 消息顺序
     */
    public $MsgOrder;

    /**
     * @var integer 数据类型（0：文本，1：二进制）
     */
    public $DataType;

    /**
     * @param string $RuleId 规则Id
     * @param integer $AppId AppId
     * @param string $Name 名称
     * @param string $Description 描述
     * @param RuleQuery $Query 查询
     * @param array $Actions 转发
     * @param integer $Active 已启动
     * @param integer $Deleted 已删除
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param integer $MsgOrder 消息顺序
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
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

        if (array_key_exists("Active",$param) and $param["Active"] !== null) {
            $this->Active = $param["Active"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("MsgOrder",$param) and $param["MsgOrder"] !== null) {
            $this->MsgOrder = $param["MsgOrder"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }
    }
}
