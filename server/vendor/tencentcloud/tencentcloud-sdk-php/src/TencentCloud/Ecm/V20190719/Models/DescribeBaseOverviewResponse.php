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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBaseOverview返回参数结构体
 *
 * @method integer getModuleNum() 获取模块数量，单位：个
 * @method void setModuleNum(integer $ModuleNum) 设置模块数量，单位：个
 * @method integer getNodeNum() 获取节点数量，单位：个
 * @method void setNodeNum(integer $NodeNum) 设置节点数量，单位：个
 * @method integer getVcpuNum() 获取cpu核数，单位：个
 * @method void setVcpuNum(integer $VcpuNum) 设置cpu核数，单位：个
 * @method integer getMemoryNum() 获取内存大小，单位：G
 * @method void setMemoryNum(integer $MemoryNum) 设置内存大小，单位：G
 * @method integer getStorageNum() 获取硬盘大小，单位：G
 * @method void setStorageNum(integer $StorageNum) 设置硬盘大小，单位：G
 * @method integer getNetworkNum() 获取昨日网络峰值,单位：M
 * @method void setNetworkNum(integer $NetworkNum) 设置昨日网络峰值,单位：M
 * @method integer getInstanceNum() 获取实例数量，单位：台
 * @method void setInstanceNum(integer $InstanceNum) 设置实例数量，单位：台
 * @method integer getRunningNum() 获取运行中数量，单位：台
 * @method void setRunningNum(integer $RunningNum) 设置运行中数量，单位：台
 * @method integer getIsolationNum() 获取安全隔离数量，单位：台
 * @method void setIsolationNum(integer $IsolationNum) 设置安全隔离数量，单位：台
 * @method integer getExpiredNum() 获取过期实例数量，单位：台
 * @method void setExpiredNum(integer $ExpiredNum) 设置过期实例数量，单位：台
 * @method integer getWillExpireNum() 获取即将过期实例数量，单位：台
 * @method void setWillExpireNum(integer $WillExpireNum) 设置即将过期实例数量，单位：台
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBaseOverviewResponse extends AbstractModel
{
    /**
     * @var integer 模块数量，单位：个
     */
    public $ModuleNum;

    /**
     * @var integer 节点数量，单位：个
     */
    public $NodeNum;

    /**
     * @var integer cpu核数，单位：个
     */
    public $VcpuNum;

    /**
     * @var integer 内存大小，单位：G
     */
    public $MemoryNum;

    /**
     * @var integer 硬盘大小，单位：G
     */
    public $StorageNum;

    /**
     * @var integer 昨日网络峰值,单位：M
     */
    public $NetworkNum;

    /**
     * @var integer 实例数量，单位：台
     */
    public $InstanceNum;

    /**
     * @var integer 运行中数量，单位：台
     */
    public $RunningNum;

    /**
     * @var integer 安全隔离数量，单位：台
     */
    public $IsolationNum;

    /**
     * @var integer 过期实例数量，单位：台
     */
    public $ExpiredNum;

    /**
     * @var integer 即将过期实例数量，单位：台
     */
    public $WillExpireNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ModuleNum 模块数量，单位：个
     * @param integer $NodeNum 节点数量，单位：个
     * @param integer $VcpuNum cpu核数，单位：个
     * @param integer $MemoryNum 内存大小，单位：G
     * @param integer $StorageNum 硬盘大小，单位：G
     * @param integer $NetworkNum 昨日网络峰值,单位：M
     * @param integer $InstanceNum 实例数量，单位：台
     * @param integer $RunningNum 运行中数量，单位：台
     * @param integer $IsolationNum 安全隔离数量，单位：台
     * @param integer $ExpiredNum 过期实例数量，单位：台
     * @param integer $WillExpireNum 即将过期实例数量，单位：台
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
        if (array_key_exists("ModuleNum",$param) and $param["ModuleNum"] !== null) {
            $this->ModuleNum = $param["ModuleNum"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("VcpuNum",$param) and $param["VcpuNum"] !== null) {
            $this->VcpuNum = $param["VcpuNum"];
        }

        if (array_key_exists("MemoryNum",$param) and $param["MemoryNum"] !== null) {
            $this->MemoryNum = $param["MemoryNum"];
        }

        if (array_key_exists("StorageNum",$param) and $param["StorageNum"] !== null) {
            $this->StorageNum = $param["StorageNum"];
        }

        if (array_key_exists("NetworkNum",$param) and $param["NetworkNum"] !== null) {
            $this->NetworkNum = $param["NetworkNum"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("RunningNum",$param) and $param["RunningNum"] !== null) {
            $this->RunningNum = $param["RunningNum"];
        }

        if (array_key_exists("IsolationNum",$param) and $param["IsolationNum"] !== null) {
            $this->IsolationNum = $param["IsolationNum"];
        }

        if (array_key_exists("ExpiredNum",$param) and $param["ExpiredNum"] !== null) {
            $this->ExpiredNum = $param["ExpiredNum"];
        }

        if (array_key_exists("WillExpireNum",$param) and $param["WillExpireNum"] !== null) {
            $this->WillExpireNum = $param["WillExpireNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
