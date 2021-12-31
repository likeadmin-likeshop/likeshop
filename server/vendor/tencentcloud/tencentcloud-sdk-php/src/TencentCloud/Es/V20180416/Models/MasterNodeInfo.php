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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例专用主节点相关信息
 *
 * @method boolean getEnableDedicatedMaster() 获取是否启用了专用主节点
 * @method void setEnableDedicatedMaster(boolean $EnableDedicatedMaster) 设置是否启用了专用主节点
 * @method string getMasterNodeType() 获取专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method void setMasterNodeType(string $MasterNodeType) 设置专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method integer getMasterNodeNum() 获取专用主节点个数
 * @method void setMasterNodeNum(integer $MasterNodeNum) 设置专用主节点个数
 * @method integer getMasterNodeCpuNum() 获取专用主节点CPU核数
 * @method void setMasterNodeCpuNum(integer $MasterNodeCpuNum) 设置专用主节点CPU核数
 * @method integer getMasterNodeMemSize() 获取专用主节点内存大小，单位GB
 * @method void setMasterNodeMemSize(integer $MasterNodeMemSize) 设置专用主节点内存大小，单位GB
 * @method integer getMasterNodeDiskSize() 获取专用主节点磁盘大小，单位GB
 * @method void setMasterNodeDiskSize(integer $MasterNodeDiskSize) 设置专用主节点磁盘大小，单位GB
 * @method string getMasterNodeDiskType() 获取专用主节点磁盘类型
 * @method void setMasterNodeDiskType(string $MasterNodeDiskType) 设置专用主节点磁盘类型
 */
class MasterNodeInfo extends AbstractModel
{
    /**
     * @var boolean 是否启用了专用主节点
     */
    public $EnableDedicatedMaster;

    /**
     * @var string 专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     */
    public $MasterNodeType;

    /**
     * @var integer 专用主节点个数
     */
    public $MasterNodeNum;

    /**
     * @var integer 专用主节点CPU核数
     */
    public $MasterNodeCpuNum;

    /**
     * @var integer 专用主节点内存大小，单位GB
     */
    public $MasterNodeMemSize;

    /**
     * @var integer 专用主节点磁盘大小，单位GB
     */
    public $MasterNodeDiskSize;

    /**
     * @var string 专用主节点磁盘类型
     */
    public $MasterNodeDiskType;

    /**
     * @param boolean $EnableDedicatedMaster 是否启用了专用主节点
     * @param string $MasterNodeType 专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     * @param integer $MasterNodeNum 专用主节点个数
     * @param integer $MasterNodeCpuNum 专用主节点CPU核数
     * @param integer $MasterNodeMemSize 专用主节点内存大小，单位GB
     * @param integer $MasterNodeDiskSize 专用主节点磁盘大小，单位GB
     * @param string $MasterNodeDiskType 专用主节点磁盘类型
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
        if (array_key_exists("EnableDedicatedMaster",$param) and $param["EnableDedicatedMaster"] !== null) {
            $this->EnableDedicatedMaster = $param["EnableDedicatedMaster"];
        }

        if (array_key_exists("MasterNodeType",$param) and $param["MasterNodeType"] !== null) {
            $this->MasterNodeType = $param["MasterNodeType"];
        }

        if (array_key_exists("MasterNodeNum",$param) and $param["MasterNodeNum"] !== null) {
            $this->MasterNodeNum = $param["MasterNodeNum"];
        }

        if (array_key_exists("MasterNodeCpuNum",$param) and $param["MasterNodeCpuNum"] !== null) {
            $this->MasterNodeCpuNum = $param["MasterNodeCpuNum"];
        }

        if (array_key_exists("MasterNodeMemSize",$param) and $param["MasterNodeMemSize"] !== null) {
            $this->MasterNodeMemSize = $param["MasterNodeMemSize"];
        }

        if (array_key_exists("MasterNodeDiskSize",$param) and $param["MasterNodeDiskSize"] !== null) {
            $this->MasterNodeDiskSize = $param["MasterNodeDiskSize"];
        }

        if (array_key_exists("MasterNodeDiskType",$param) and $param["MasterNodeDiskType"] !== null) {
            $this->MasterNodeDiskType = $param["MasterNodeDiskType"];
        }
    }
}
