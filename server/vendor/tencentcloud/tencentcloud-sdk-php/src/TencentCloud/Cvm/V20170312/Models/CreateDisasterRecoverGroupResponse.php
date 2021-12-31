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
 * CreateDisasterRecoverGroup返回参数结构体
 *
 * @method string getDisasterRecoverGroupId() 获取分散置放群组ID列表。
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) 设置分散置放群组ID列表。
 * @method string getType() 获取分散置放群组类型，取值范围：<br><li>HOST：物理机<br><li>SW：交换机<br><li>RACK：机架
 * @method void setType(string $Type) 设置分散置放群组类型，取值范围：<br><li>HOST：物理机<br><li>SW：交换机<br><li>RACK：机架
 * @method string getName() 获取分散置放群组名称，长度1-60个字符，支持中、英文。
 * @method void setName(string $Name) 设置分散置放群组名称，长度1-60个字符，支持中、英文。
 * @method integer getCvmQuotaTotal() 获取置放群组内可容纳的云服务器数量。
 * @method void setCvmQuotaTotal(integer $CvmQuotaTotal) 设置置放群组内可容纳的云服务器数量。
 * @method integer getCurrentNum() 获取置放群组内已有的云服务器数量。
 * @method void setCurrentNum(integer $CurrentNum) 设置置放群组内已有的云服务器数量。
 * @method string getCreateTime() 获取置放群组创建时间。
 * @method void setCreateTime(string $CreateTime) 设置置放群组创建时间。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateDisasterRecoverGroupResponse extends AbstractModel
{
    /**
     * @var string 分散置放群组ID列表。
     */
    public $DisasterRecoverGroupId;

    /**
     * @var string 分散置放群组类型，取值范围：<br><li>HOST：物理机<br><li>SW：交换机<br><li>RACK：机架
     */
    public $Type;

    /**
     * @var string 分散置放群组名称，长度1-60个字符，支持中、英文。
     */
    public $Name;

    /**
     * @var integer 置放群组内可容纳的云服务器数量。
     */
    public $CvmQuotaTotal;

    /**
     * @var integer 置放群组内已有的云服务器数量。
     */
    public $CurrentNum;

    /**
     * @var string 置放群组创建时间。
     */
    public $CreateTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DisasterRecoverGroupId 分散置放群组ID列表。
     * @param string $Type 分散置放群组类型，取值范围：<br><li>HOST：物理机<br><li>SW：交换机<br><li>RACK：机架
     * @param string $Name 分散置放群组名称，长度1-60个字符，支持中、英文。
     * @param integer $CvmQuotaTotal 置放群组内可容纳的云服务器数量。
     * @param integer $CurrentNum 置放群组内已有的云服务器数量。
     * @param string $CreateTime 置放群组创建时间。
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
        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CvmQuotaTotal",$param) and $param["CvmQuotaTotal"] !== null) {
            $this->CvmQuotaTotal = $param["CvmQuotaTotal"];
        }

        if (array_key_exists("CurrentNum",$param) and $param["CurrentNum"] !== null) {
            $this->CurrentNum = $param["CurrentNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
