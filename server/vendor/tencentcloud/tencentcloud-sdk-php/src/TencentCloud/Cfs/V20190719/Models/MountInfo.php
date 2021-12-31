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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 挂载点信息
 *
 * @method string getFileSystemId() 获取文件系统 ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统 ID
 * @method string getMountTargetId() 获取挂载点 ID
 * @method void setMountTargetId(string $MountTargetId) 设置挂载点 ID
 * @method string getIpAddress() 获取挂载点 IP
 * @method void setIpAddress(string $IpAddress) 设置挂载点 IP
 * @method string getFSID() 获取挂载根目录
 * @method void setFSID(string $FSID) 设置挂载根目录
 * @method string getLifeCycleState() 获取挂载点状态
 * @method void setLifeCycleState(string $LifeCycleState) 设置挂载点状态
 * @method string getNetworkInterface() 获取网络类型
 * @method void setNetworkInterface(string $NetworkInterface) 设置网络类型
 * @method string getVpcId() 获取私有网络 ID
 * @method void setVpcId(string $VpcId) 设置私有网络 ID
 * @method string getVpcName() 获取私有网络名称
 * @method void setVpcName(string $VpcName) 设置私有网络名称
 * @method string getSubnetId() 获取子网 Id
 * @method void setSubnetId(string $SubnetId) 设置子网 Id
 * @method string getSubnetName() 获取子网名称
 * @method void setSubnetName(string $SubnetName) 设置子网名称
 */
class MountInfo extends AbstractModel
{
    /**
     * @var string 文件系统 ID
     */
    public $FileSystemId;

    /**
     * @var string 挂载点 ID
     */
    public $MountTargetId;

    /**
     * @var string 挂载点 IP
     */
    public $IpAddress;

    /**
     * @var string 挂载根目录
     */
    public $FSID;

    /**
     * @var string 挂载点状态
     */
    public $LifeCycleState;

    /**
     * @var string 网络类型
     */
    public $NetworkInterface;

    /**
     * @var string 私有网络 ID
     */
    public $VpcId;

    /**
     * @var string 私有网络名称
     */
    public $VpcName;

    /**
     * @var string 子网 Id
     */
    public $SubnetId;

    /**
     * @var string 子网名称
     */
    public $SubnetName;

    /**
     * @param string $FileSystemId 文件系统 ID
     * @param string $MountTargetId 挂载点 ID
     * @param string $IpAddress 挂载点 IP
     * @param string $FSID 挂载根目录
     * @param string $LifeCycleState 挂载点状态
     * @param string $NetworkInterface 网络类型
     * @param string $VpcId 私有网络 ID
     * @param string $VpcName 私有网络名称
     * @param string $SubnetId 子网 Id
     * @param string $SubnetName 子网名称
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("MountTargetId",$param) and $param["MountTargetId"] !== null) {
            $this->MountTargetId = $param["MountTargetId"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("FSID",$param) and $param["FSID"] !== null) {
            $this->FSID = $param["FSID"];
        }

        if (array_key_exists("LifeCycleState",$param) and $param["LifeCycleState"] !== null) {
            $this->LifeCycleState = $param["LifeCycleState"];
        }

        if (array_key_exists("NetworkInterface",$param) and $param["NetworkInterface"] !== null) {
            $this->NetworkInterface = $param["NetworkInterface"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }
    }
}
