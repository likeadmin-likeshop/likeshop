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
 * DescribeVulScanResult返回参数结构体
 *
 * @method integer getVulNum() 获取漏洞数量。
 * @method void setVulNum(integer $VulNum) 设置漏洞数量。
 * @method integer getProVersionNum() 获取专业版机器数。
 * @method void setProVersionNum(integer $ProVersionNum) 设置专业版机器数。
 * @method integer getImpactedHostNum() 获取受影响的专业版主机数。
 * @method void setImpactedHostNum(integer $ImpactedHostNum) 设置受影响的专业版主机数。
 * @method integer getHostNum() 获取主机总数。
 * @method void setHostNum(integer $HostNum) 设置主机总数。
 * @method integer getBasicVersionNum() 获取基础版机器数。
 * @method void setBasicVersionNum(integer $BasicVersionNum) 设置基础版机器数。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulScanResultResponse extends AbstractModel
{
    /**
     * @var integer 漏洞数量。
     */
    public $VulNum;

    /**
     * @var integer 专业版机器数。
     */
    public $ProVersionNum;

    /**
     * @var integer 受影响的专业版主机数。
     */
    public $ImpactedHostNum;

    /**
     * @var integer 主机总数。
     */
    public $HostNum;

    /**
     * @var integer 基础版机器数。
     */
    public $BasicVersionNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $VulNum 漏洞数量。
     * @param integer $ProVersionNum 专业版机器数。
     * @param integer $ImpactedHostNum 受影响的专业版主机数。
     * @param integer $HostNum 主机总数。
     * @param integer $BasicVersionNum 基础版机器数。
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
        if (array_key_exists("VulNum",$param) and $param["VulNum"] !== null) {
            $this->VulNum = $param["VulNum"];
        }

        if (array_key_exists("ProVersionNum",$param) and $param["ProVersionNum"] !== null) {
            $this->ProVersionNum = $param["ProVersionNum"];
        }

        if (array_key_exists("ImpactedHostNum",$param) and $param["ImpactedHostNum"] !== null) {
            $this->ImpactedHostNum = $param["ImpactedHostNum"];
        }

        if (array_key_exists("HostNum",$param) and $param["HostNum"] !== null) {
            $this->HostNum = $param["HostNum"];
        }

        if (array_key_exists("BasicVersionNum",$param) and $param["BasicVersionNum"] !== null) {
            $this->BasicVersionNum = $param["BasicVersionNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
