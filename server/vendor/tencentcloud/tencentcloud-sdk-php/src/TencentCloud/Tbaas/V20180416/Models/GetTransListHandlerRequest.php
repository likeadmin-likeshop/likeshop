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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTransListHandler请求参数结构体
 *
 * @method string getModule() 获取模块名，固定字段：transaction
 * @method void setModule(string $Module) 设置模块名，固定字段：transaction
 * @method string getOperation() 获取操作名，固定字段：get_trans_list
 * @method void setOperation(string $Operation) 设置操作名，固定字段：get_trans_list
 * @method integer getOffset() 获取记录偏移量
 * @method void setOffset(integer $Offset) 设置记录偏移量
 * @method integer getLimit() 获取每页记录数
 * @method void setLimit(integer $Limit) 设置每页记录数
 * @method string getGroupPk() 获取群组编号
 * @method void setGroupPk(string $GroupPk) 设置群组编号
 * @method string getTransHash() 获取交易哈希
 * @method void setTransHash(string $TransHash) 设置交易哈希
 */
class GetTransListHandlerRequest extends AbstractModel
{
    /**
     * @var string 模块名，固定字段：transaction
     */
    public $Module;

    /**
     * @var string 操作名，固定字段：get_trans_list
     */
    public $Operation;

    /**
     * @var integer 记录偏移量
     */
    public $Offset;

    /**
     * @var integer 每页记录数
     */
    public $Limit;

    /**
     * @var string 群组编号
     */
    public $GroupPk;

    /**
     * @var string 交易哈希
     */
    public $TransHash;

    /**
     * @param string $Module 模块名，固定字段：transaction
     * @param string $Operation 操作名，固定字段：get_trans_list
     * @param integer $Offset 记录偏移量
     * @param integer $Limit 每页记录数
     * @param string $GroupPk 群组编号
     * @param string $TransHash 交易哈希
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("GroupPk",$param) and $param["GroupPk"] !== null) {
            $this->GroupPk = $param["GroupPk"];
        }

        if (array_key_exists("TransHash",$param) and $param["TransHash"] !== null) {
            $this->TransHash = $param["TransHash"];
        }
    }
}
