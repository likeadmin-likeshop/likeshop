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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetInfo返回参数结构体
 *
 * @method integer getMachineCount() 获取主机数
 * @method void setMachineCount(integer $MachineCount) 设置主机数
 * @method integer getAccountCount() 获取账号数
 * @method void setAccountCount(integer $AccountCount) 设置账号数
 * @method integer getPortCount() 获取端口数
 * @method void setPortCount(integer $PortCount) 设置端口数
 * @method integer getProcessCount() 获取进程数
 * @method void setProcessCount(integer $ProcessCount) 设置进程数
 * @method integer getSoftwareCount() 获取软件数
 * @method void setSoftwareCount(integer $SoftwareCount) 设置软件数
 * @method integer getDatabaseCount() 获取数据库数
 * @method void setDatabaseCount(integer $DatabaseCount) 设置数据库数
 * @method integer getWebAppCount() 获取Web应用数
 * @method void setWebAppCount(integer $WebAppCount) 设置Web应用数
 * @method integer getWebFrameCount() 获取Web框架数
 * @method void setWebFrameCount(integer $WebFrameCount) 设置Web框架数
 * @method integer getWebServiceCount() 获取Web服务数
 * @method void setWebServiceCount(integer $WebServiceCount) 设置Web服务数
 * @method integer getWebLocationCount() 获取Web站点数
 * @method void setWebLocationCount(integer $WebLocationCount) 设置Web站点数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetInfoResponse extends AbstractModel
{
    /**
     * @var integer 主机数
     */
    public $MachineCount;

    /**
     * @var integer 账号数
     */
    public $AccountCount;

    /**
     * @var integer 端口数
     */
    public $PortCount;

    /**
     * @var integer 进程数
     */
    public $ProcessCount;

    /**
     * @var integer 软件数
     */
    public $SoftwareCount;

    /**
     * @var integer 数据库数
     */
    public $DatabaseCount;

    /**
     * @var integer Web应用数
     */
    public $WebAppCount;

    /**
     * @var integer Web框架数
     */
    public $WebFrameCount;

    /**
     * @var integer Web服务数
     */
    public $WebServiceCount;

    /**
     * @var integer Web站点数
     */
    public $WebLocationCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $MachineCount 主机数
     * @param integer $AccountCount 账号数
     * @param integer $PortCount 端口数
     * @param integer $ProcessCount 进程数
     * @param integer $SoftwareCount 软件数
     * @param integer $DatabaseCount 数据库数
     * @param integer $WebAppCount Web应用数
     * @param integer $WebFrameCount Web框架数
     * @param integer $WebServiceCount Web服务数
     * @param integer $WebLocationCount Web站点数
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
        if (array_key_exists("MachineCount",$param) and $param["MachineCount"] !== null) {
            $this->MachineCount = $param["MachineCount"];
        }

        if (array_key_exists("AccountCount",$param) and $param["AccountCount"] !== null) {
            $this->AccountCount = $param["AccountCount"];
        }

        if (array_key_exists("PortCount",$param) and $param["PortCount"] !== null) {
            $this->PortCount = $param["PortCount"];
        }

        if (array_key_exists("ProcessCount",$param) and $param["ProcessCount"] !== null) {
            $this->ProcessCount = $param["ProcessCount"];
        }

        if (array_key_exists("SoftwareCount",$param) and $param["SoftwareCount"] !== null) {
            $this->SoftwareCount = $param["SoftwareCount"];
        }

        if (array_key_exists("DatabaseCount",$param) and $param["DatabaseCount"] !== null) {
            $this->DatabaseCount = $param["DatabaseCount"];
        }

        if (array_key_exists("WebAppCount",$param) and $param["WebAppCount"] !== null) {
            $this->WebAppCount = $param["WebAppCount"];
        }

        if (array_key_exists("WebFrameCount",$param) and $param["WebFrameCount"] !== null) {
            $this->WebFrameCount = $param["WebFrameCount"];
        }

        if (array_key_exists("WebServiceCount",$param) and $param["WebServiceCount"] !== null) {
            $this->WebServiceCount = $param["WebServiceCount"];
        }

        if (array_key_exists("WebLocationCount",$param) and $param["WebLocationCount"] !== null) {
            $this->WebLocationCount = $param["WebLocationCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
