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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNotebookSummary返回参数结构体
 *
 * @method integer getAllInstanceCnt() 获取实例总数
 * @method void setAllInstanceCnt(integer $AllInstanceCnt) 设置实例总数
 * @method integer getBillingInstanceCnt() 获取计费实例总数
 * @method void setBillingInstanceCnt(integer $BillingInstanceCnt) 设置计费实例总数
 * @method integer getStorageOnlyBillingInstanceCnt() 获取仅存储计费的实例总数
 * @method void setStorageOnlyBillingInstanceCnt(integer $StorageOnlyBillingInstanceCnt) 设置仅存储计费的实例总数
 * @method integer getComputingBillingInstanceCnt() 获取计算和存储都计费的实例总数
 * @method void setComputingBillingInstanceCnt(integer $ComputingBillingInstanceCnt) 设置计算和存储都计费的实例总数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNotebookSummaryResponse extends AbstractModel
{
    /**
     * @var integer 实例总数
     */
    public $AllInstanceCnt;

    /**
     * @var integer 计费实例总数
     */
    public $BillingInstanceCnt;

    /**
     * @var integer 仅存储计费的实例总数
     */
    public $StorageOnlyBillingInstanceCnt;

    /**
     * @var integer 计算和存储都计费的实例总数
     */
    public $ComputingBillingInstanceCnt;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AllInstanceCnt 实例总数
     * @param integer $BillingInstanceCnt 计费实例总数
     * @param integer $StorageOnlyBillingInstanceCnt 仅存储计费的实例总数
     * @param integer $ComputingBillingInstanceCnt 计算和存储都计费的实例总数
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AllInstanceCnt",$param) and $param["AllInstanceCnt"] !== null) {
            $this->AllInstanceCnt = $param["AllInstanceCnt"];
        }

        if (array_key_exists("BillingInstanceCnt",$param) and $param["BillingInstanceCnt"] !== null) {
            $this->BillingInstanceCnt = $param["BillingInstanceCnt"];
        }

        if (array_key_exists("StorageOnlyBillingInstanceCnt",$param) and $param["StorageOnlyBillingInstanceCnt"] !== null) {
            $this->StorageOnlyBillingInstanceCnt = $param["StorageOnlyBillingInstanceCnt"];
        }

        if (array_key_exists("ComputingBillingInstanceCnt",$param) and $param["ComputingBillingInstanceCnt"] !== null) {
            $this->ComputingBillingInstanceCnt = $param["ComputingBillingInstanceCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
