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
 * 数据库信息
 *
 * @method string getName() 获取数据库名称
 * @method void setName(string $Name) 设置数据库名称
 * @method string getCharset() 获取字符集
 * @method void setCharset(string $Charset) 设置字符集
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getCreateTime() 获取数据库创建时间
 * @method void setCreateTime(string $CreateTime) 设置数据库创建时间
 * @method integer getStatus() 获取数据库状态。1--创建中， 2--运行中， 3--修改中，-1--删除中
 * @method void setStatus(integer $Status) 设置数据库状态。1--创建中， 2--运行中， 3--修改中，-1--删除中
 * @method array getAccounts() 获取数据库账号权限信息
 * @method void setAccounts(array $Accounts) 设置数据库账号权限信息
 * @method string getInternalStatus() 获取内部状态。ONLINE表示运行中
 * @method void setInternalStatus(string $InternalStatus) 设置内部状态。ONLINE表示运行中
 */
class DBDetail extends AbstractModel
{
    /**
     * @var string 数据库名称
     */
    public $Name;

    /**
     * @var string 字符集
     */
    public $Charset;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 数据库创建时间
     */
    public $CreateTime;

    /**
     * @var integer 数据库状态。1--创建中， 2--运行中， 3--修改中，-1--删除中
     */
    public $Status;

    /**
     * @var array 数据库账号权限信息
     */
    public $Accounts;

    /**
     * @var string 内部状态。ONLINE表示运行中
     */
    public $InternalStatus;

    /**
     * @param string $Name 数据库名称
     * @param string $Charset 字符集
     * @param string $Remark 备注
     * @param string $CreateTime 数据库创建时间
     * @param integer $Status 数据库状态。1--创建中， 2--运行中， 3--修改中，-1--删除中
     * @param array $Accounts 数据库账号权限信息
     * @param string $InternalStatus 内部状态。ONLINE表示运行中
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Accounts",$param) and $param["Accounts"] !== null) {
            $this->Accounts = [];
            foreach ($param["Accounts"] as $key => $value){
                $obj = new AccountPrivilege();
                $obj->deserialize($value);
                array_push($this->Accounts, $obj);
            }
        }

        if (array_key_exists("InternalStatus",$param) and $param["InternalStatus"] !== null) {
            $this->InternalStatus = $param["InternalStatus"];
        }
    }
}
