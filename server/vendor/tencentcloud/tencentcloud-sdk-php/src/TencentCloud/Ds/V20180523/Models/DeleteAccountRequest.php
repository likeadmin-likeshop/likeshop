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
namespace TencentCloud\Ds\V20180523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAccount请求参数结构体
 *
 * @method string getModule() 获取模块名AccountMng
 * @method void setModule(string $Module) 设置模块名AccountMng
 * @method string getOperation() 获取操作名DeleteAccount
 * @method void setOperation(string $Operation) 设置操作名DeleteAccount
 * @method array getAccountList() 获取帐号ID列表
 * @method void setAccountList(array $AccountList) 设置帐号ID列表
 */
class DeleteAccountRequest extends AbstractModel
{
    /**
     * @var string 模块名AccountMng
     */
    public $Module;

    /**
     * @var string 操作名DeleteAccount
     */
    public $Operation;

    /**
     * @var array 帐号ID列表
     */
    public $AccountList;

    /**
     * @param string $Module 模块名AccountMng
     * @param string $Operation 操作名DeleteAccount
     * @param array $AccountList 帐号ID列表
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

        if (array_key_exists("AccountList",$param) and $param["AccountList"] !== null) {
            $this->AccountList = $param["AccountList"];
        }
    }
}
