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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群续费实例信息
 *
 * @method string getEmrResourceId() 获取节点资源ID
 * @method void setEmrResourceId(string $EmrResourceId) 设置节点资源ID
 * @method integer getFlag() 获取节点类型。0:common节点；1:master节点
；2:core节点；3:task节点
 * @method void setFlag(integer $Flag) 设置节点类型。0:common节点；1:master节点
；2:core节点；3:task节点
 * @method string getIp() 获取内网IP
 * @method void setIp(string $Ip) 设置内网IP
 * @method string getMemDesc() 获取节点内存描述
 * @method void setMemDesc(string $MemDesc) 设置节点内存描述
 * @method integer getCpuNum() 获取节点核数
 * @method void setCpuNum(integer $CpuNum) 设置节点核数
 * @method string getDiskSize() 获取硬盘大小
 * @method void setDiskSize(string $DiskSize) 设置硬盘大小
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 * @method string getSpec() 获取节点规格
 * @method void setSpec(string $Spec) 设置节点规格
 * @method integer getStorageType() 获取磁盘类型
 * @method void setStorageType(integer $StorageType) 设置磁盘类型
 */
class RenewInstancesInfo extends AbstractModel
{
    /**
     * @var string 节点资源ID
     */
    public $EmrResourceId;

    /**
     * @var integer 节点类型。0:common节点；1:master节点
；2:core节点；3:task节点
     */
    public $Flag;

    /**
     * @var string 内网IP
     */
    public $Ip;

    /**
     * @var string 节点内存描述
     */
    public $MemDesc;

    /**
     * @var integer 节点核数
     */
    public $CpuNum;

    /**
     * @var string 硬盘大小
     */
    public $DiskSize;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @var string 节点规格
     */
    public $Spec;

    /**
     * @var integer 磁盘类型
     */
    public $StorageType;

    /**
     * @param string $EmrResourceId 节点资源ID
     * @param integer $Flag 节点类型。0:common节点；1:master节点
；2:core节点；3:task节点
     * @param string $Ip 内网IP
     * @param string $MemDesc 节点内存描述
     * @param integer $CpuNum 节点核数
     * @param string $DiskSize 硬盘大小
     * @param string $ExpireTime 过期时间
     * @param string $Spec 节点规格
     * @param integer $StorageType 磁盘类型
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
        if (array_key_exists("EmrResourceId",$param) and $param["EmrResourceId"] !== null) {
            $this->EmrResourceId = $param["EmrResourceId"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("MemDesc",$param) and $param["MemDesc"] !== null) {
            $this->MemDesc = $param["MemDesc"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
