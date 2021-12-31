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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 函数版本的预置并发信息，包括设置预置并发数、已完成预置的并发数和预置任务状态。
 *
 * @method integer getAllocatedProvisionedConcurrencyNum() 获取设置的预置并发数。
 * @method void setAllocatedProvisionedConcurrencyNum(integer $AllocatedProvisionedConcurrencyNum) 设置设置的预置并发数。
 * @method integer getAvailableProvisionedConcurrencyNum() 获取当前已完成预置的并发数。
 * @method void setAvailableProvisionedConcurrencyNum(integer $AvailableProvisionedConcurrencyNum) 设置当前已完成预置的并发数。
 * @method string getStatus() 获取预置任务状态，Done表示已完成，InProgress表示进行中，Failed表示部分或全部失败。
 * @method void setStatus(string $Status) 设置预置任务状态，Done表示已完成，InProgress表示进行中，Failed表示部分或全部失败。
 * @method string getStatusReason() 获取对预置任务状态Status的说明。
 * @method void setStatusReason(string $StatusReason) 设置对预置任务状态Status的说明。
 * @method string getQualifier() 获取函数版本号
 * @method void setQualifier(string $Qualifier) 设置函数版本号
 */
class VersionProvisionedConcurrencyInfo extends AbstractModel
{
    /**
     * @var integer 设置的预置并发数。
     */
    public $AllocatedProvisionedConcurrencyNum;

    /**
     * @var integer 当前已完成预置的并发数。
     */
    public $AvailableProvisionedConcurrencyNum;

    /**
     * @var string 预置任务状态，Done表示已完成，InProgress表示进行中，Failed表示部分或全部失败。
     */
    public $Status;

    /**
     * @var string 对预置任务状态Status的说明。
     */
    public $StatusReason;

    /**
     * @var string 函数版本号
     */
    public $Qualifier;

    /**
     * @param integer $AllocatedProvisionedConcurrencyNum 设置的预置并发数。
     * @param integer $AvailableProvisionedConcurrencyNum 当前已完成预置的并发数。
     * @param string $Status 预置任务状态，Done表示已完成，InProgress表示进行中，Failed表示部分或全部失败。
     * @param string $StatusReason 对预置任务状态Status的说明。
     * @param string $Qualifier 函数版本号
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
        if (array_key_exists("AllocatedProvisionedConcurrencyNum",$param) and $param["AllocatedProvisionedConcurrencyNum"] !== null) {
            $this->AllocatedProvisionedConcurrencyNum = $param["AllocatedProvisionedConcurrencyNum"];
        }

        if (array_key_exists("AvailableProvisionedConcurrencyNum",$param) and $param["AvailableProvisionedConcurrencyNum"] !== null) {
            $this->AvailableProvisionedConcurrencyNum = $param["AvailableProvisionedConcurrencyNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusReason",$param) and $param["StatusReason"] !== null) {
            $this->StatusReason = $param["StatusReason"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }
    }
}
