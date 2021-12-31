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
 * DescribeOverviewStatistics返回参数结构体
 *
 * @method integer getOnlineMachineNum() 获取服务器在线数。
 * @method void setOnlineMachineNum(integer $OnlineMachineNum) 设置服务器在线数。
 * @method integer getProVersionMachineNum() 获取专业服务器数。
 * @method void setProVersionMachineNum(integer $ProVersionMachineNum) 设置专业服务器数。
 * @method integer getMalwareNum() 获取木马文件数。
 * @method void setMalwareNum(integer $MalwareNum) 设置木马文件数。
 * @method integer getNonlocalLoginNum() 获取异地登录数。
 * @method void setNonlocalLoginNum(integer $NonlocalLoginNum) 设置异地登录数。
 * @method integer getBruteAttackSuccessNum() 获取暴力破解成功数。
 * @method void setBruteAttackSuccessNum(integer $BruteAttackSuccessNum) 设置暴力破解成功数。
 * @method integer getVulNum() 获取漏洞数。
 * @method void setVulNum(integer $VulNum) 设置漏洞数。
 * @method integer getBaseLineNum() 获取安全基线数。
 * @method void setBaseLineNum(integer $BaseLineNum) 设置安全基线数。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOverviewStatisticsResponse extends AbstractModel
{
    /**
     * @var integer 服务器在线数。
     */
    public $OnlineMachineNum;

    /**
     * @var integer 专业服务器数。
     */
    public $ProVersionMachineNum;

    /**
     * @var integer 木马文件数。
     */
    public $MalwareNum;

    /**
     * @var integer 异地登录数。
     */
    public $NonlocalLoginNum;

    /**
     * @var integer 暴力破解成功数。
     */
    public $BruteAttackSuccessNum;

    /**
     * @var integer 漏洞数。
     */
    public $VulNum;

    /**
     * @var integer 安全基线数。
     */
    public $BaseLineNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $OnlineMachineNum 服务器在线数。
     * @param integer $ProVersionMachineNum 专业服务器数。
     * @param integer $MalwareNum 木马文件数。
     * @param integer $NonlocalLoginNum 异地登录数。
     * @param integer $BruteAttackSuccessNum 暴力破解成功数。
     * @param integer $VulNum 漏洞数。
     * @param integer $BaseLineNum 安全基线数。
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
        if (array_key_exists("OnlineMachineNum",$param) and $param["OnlineMachineNum"] !== null) {
            $this->OnlineMachineNum = $param["OnlineMachineNum"];
        }

        if (array_key_exists("ProVersionMachineNum",$param) and $param["ProVersionMachineNum"] !== null) {
            $this->ProVersionMachineNum = $param["ProVersionMachineNum"];
        }

        if (array_key_exists("MalwareNum",$param) and $param["MalwareNum"] !== null) {
            $this->MalwareNum = $param["MalwareNum"];
        }

        if (array_key_exists("NonlocalLoginNum",$param) and $param["NonlocalLoginNum"] !== null) {
            $this->NonlocalLoginNum = $param["NonlocalLoginNum"];
        }

        if (array_key_exists("BruteAttackSuccessNum",$param) and $param["BruteAttackSuccessNum"] !== null) {
            $this->BruteAttackSuccessNum = $param["BruteAttackSuccessNum"];
        }

        if (array_key_exists("VulNum",$param) and $param["VulNum"] !== null) {
            $this->VulNum = $param["VulNum"];
        }

        if (array_key_exists("BaseLineNum",$param) and $param["BaseLineNum"] !== null) {
            $this->BaseLineNum = $param["BaseLineNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
