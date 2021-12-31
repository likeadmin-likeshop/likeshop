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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账户备注信息
 *
 * @method string getUserName() 获取账户名
 * @method void setUserName(string $UserName) 设置账户名
 * @method string getRemark() 获取对应账户新的备注信息
 * @method void setRemark(string $Remark) 设置对应账户新的备注信息
 */
class AccountRemark extends AbstractModel
{
    /**
     * @var string 账户名
     */
    public $UserName;

    /**
     * @var string 对应账户新的备注信息
     */
    public $Remark;

    /**
     * @param string $UserName 账户名
     * @param string $Remark 对应账户新的备注信息
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
