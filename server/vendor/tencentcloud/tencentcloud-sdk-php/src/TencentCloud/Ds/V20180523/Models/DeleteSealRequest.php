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
 * DeleteSeal请求参数结构体
 *
 * @method string getModule() 获取模块名SealMng
 * @method void setModule(string $Module) 设置模块名SealMng
 * @method string getOperation() 获取操作名DeleteSeal
 * @method void setOperation(string $Operation) 设置操作名DeleteSeal
 * @method string getAccountResId() 获取帐号ID
 * @method void setAccountResId(string $AccountResId) 设置帐号ID
 * @method string getSealResId() 获取签章ID
 * @method void setSealResId(string $SealResId) 设置签章ID
 */
class DeleteSealRequest extends AbstractModel
{
    /**
     * @var string 模块名SealMng
     */
    public $Module;

    /**
     * @var string 操作名DeleteSeal
     */
    public $Operation;

    /**
     * @var string 帐号ID
     */
    public $AccountResId;

    /**
     * @var string 签章ID
     */
    public $SealResId;

    /**
     * @param string $Module 模块名SealMng
     * @param string $Operation 操作名DeleteSeal
     * @param string $AccountResId 帐号ID
     * @param string $SealResId 签章ID
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

        if (array_key_exists("AccountResId",$param) and $param["AccountResId"] !== null) {
            $this->AccountResId = $param["AccountResId"];
        }

        if (array_key_exists("SealResId",$param) and $param["SealResId"] !== null) {
            $this->SealResId = $param["SealResId"];
        }
    }
}
