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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 本地提权规则
 *
 * @method integer getId() 获取规则ID
 * @method void setId(integer $Id) 设置规则ID
 * @method string getUuid() 获取客户端ID
 * @method void setUuid(string $Uuid) 设置客户端ID
 * @method string getProcessName() 获取进程名
 * @method void setProcessName(string $ProcessName) 设置进程名
 * @method integer getSMode() 获取是否S权限
 * @method void setSMode(integer $SMode) 设置是否S权限
 * @method string getOperator() 获取操作人
 * @method void setOperator(string $Operator) 设置操作人
 * @method integer getIsGlobal() 获取是否全局规则
 * @method void setIsGlobal(integer $IsGlobal) 设置是否全局规则
 * @method integer getStatus() 获取状态(0: 有效 1: 无效)
 * @method void setStatus(integer $Status) 设置状态(0: 有效 1: 无效)
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method string getHostip() 获取主机IP
 * @method void setHostip(string $Hostip) 设置主机IP
 */
class PrivilegeRule extends AbstractModel
{
    /**
     * @var integer 规则ID
     */
    public $Id;

    /**
     * @var string 客户端ID
     */
    public $Uuid;

    /**
     * @var string 进程名
     */
    public $ProcessName;

    /**
     * @var integer 是否S权限
     */
    public $SMode;

    /**
     * @var string 操作人
     */
    public $Operator;

    /**
     * @var integer 是否全局规则
     */
    public $IsGlobal;

    /**
     * @var integer 状态(0: 有效 1: 无效)
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var string 主机IP
     */
    public $Hostip;

    /**
     * @param integer $Id 规则ID
     * @param string $Uuid 客户端ID
     * @param string $ProcessName 进程名
     * @param integer $SMode 是否S权限
     * @param string $Operator 操作人
     * @param integer $IsGlobal 是否全局规则
     * @param integer $Status 状态(0: 有效 1: 无效)
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
     * @param string $Hostip 主机IP
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("SMode",$param) and $param["SMode"] !== null) {
            $this->SMode = $param["SMode"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Hostip",$param) and $param["Hostip"] !== null) {
            $this->Hostip = $param["Hostip"];
        }
    }
}
