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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDisasterRecoverGroupQuota返回参数结构体
 *
 * @method integer getGroupQuota() 获取可创建置放群组数量的上限。
 * @method void setGroupQuota(integer $GroupQuota) 设置可创建置放群组数量的上限。
 * @method integer getCurrentNum() 获取当前用户已经创建的置放群组数量。
 * @method void setCurrentNum(integer $CurrentNum) 设置当前用户已经创建的置放群组数量。
 * @method integer getCvmInHostGroupQuota() 获取物理机类型容灾组内实例的配额数。
 * @method void setCvmInHostGroupQuota(integer $CvmInHostGroupQuota) 设置物理机类型容灾组内实例的配额数。
 * @method integer getCvmInSwGroupQuota() 获取交换机类型容灾组内实例的配额数。
 * @method void setCvmInSwGroupQuota(integer $CvmInSwGroupQuota) 设置交换机类型容灾组内实例的配额数。
 * @method integer getCvmInRackGroupQuota() 获取机架类型容灾组内实例的配额数。
 * @method void setCvmInRackGroupQuota(integer $CvmInRackGroupQuota) 设置机架类型容灾组内实例的配额数。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDisasterRecoverGroupQuotaResponse extends AbstractModel
{
    /**
     * @var integer 可创建置放群组数量的上限。
     */
    public $GroupQuota;

    /**
     * @var integer 当前用户已经创建的置放群组数量。
     */
    public $CurrentNum;

    /**
     * @var integer 物理机类型容灾组内实例的配额数。
     */
    public $CvmInHostGroupQuota;

    /**
     * @var integer 交换机类型容灾组内实例的配额数。
     */
    public $CvmInSwGroupQuota;

    /**
     * @var integer 机架类型容灾组内实例的配额数。
     */
    public $CvmInRackGroupQuota;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $GroupQuota 可创建置放群组数量的上限。
     * @param integer $CurrentNum 当前用户已经创建的置放群组数量。
     * @param integer $CvmInHostGroupQuota 物理机类型容灾组内实例的配额数。
     * @param integer $CvmInSwGroupQuota 交换机类型容灾组内实例的配额数。
     * @param integer $CvmInRackGroupQuota 机架类型容灾组内实例的配额数。
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
        if (array_key_exists("GroupQuota",$param) and $param["GroupQuota"] !== null) {
            $this->GroupQuota = $param["GroupQuota"];
        }

        if (array_key_exists("CurrentNum",$param) and $param["CurrentNum"] !== null) {
            $this->CurrentNum = $param["CurrentNum"];
        }

        if (array_key_exists("CvmInHostGroupQuota",$param) and $param["CvmInHostGroupQuota"] !== null) {
            $this->CvmInHostGroupQuota = $param["CvmInHostGroupQuota"];
        }

        if (array_key_exists("CvmInSwGroupQuota",$param) and $param["CvmInSwGroupQuota"] !== null) {
            $this->CvmInSwGroupQuota = $param["CvmInSwGroupQuota"];
        }

        if (array_key_exists("CvmInRackGroupQuota",$param) and $param["CvmInRackGroupQuota"] !== null) {
            $this->CvmInRackGroupQuota = $param["CvmInRackGroupQuota"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
