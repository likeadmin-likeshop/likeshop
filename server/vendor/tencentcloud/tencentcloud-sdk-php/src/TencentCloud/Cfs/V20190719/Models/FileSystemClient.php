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
 * 文件系统客户端信息
 *
 * @method string getCfsVip() 获取文件系统IP地址
 * @method void setCfsVip(string $CfsVip) 设置文件系统IP地址
 * @method string getClientIp() 获取客户端IP地址
 * @method void setClientIp(string $ClientIp) 设置客户端IP地址
 * @method string getVpcId() 获取文件系统所属VPCID
 * @method void setVpcId(string $VpcId) 设置文件系统所属VPCID
 * @method string getZone() 获取可用区名称，例如ap-beijing-1，请参考 概览文档中的地域与可用区列表
 * @method void setZone(string $Zone) 设置可用区名称，例如ap-beijing-1，请参考 概览文档中的地域与可用区列表
 * @method string getZoneName() 获取可用区中文名称
 * @method void setZoneName(string $ZoneName) 设置可用区中文名称
 * @method string getMountDirectory() 获取该文件系统被挂载到客户端上的路径信息
 * @method void setMountDirectory(string $MountDirectory) 设置该文件系统被挂载到客户端上的路径信息
 */
class FileSystemClient extends AbstractModel
{
    /**
     * @var string 文件系统IP地址
     */
    public $CfsVip;

    /**
     * @var string 客户端IP地址
     */
    public $ClientIp;

    /**
     * @var string 文件系统所属VPCID
     */
    public $VpcId;

    /**
     * @var string 可用区名称，例如ap-beijing-1，请参考 概览文档中的地域与可用区列表
     */
    public $Zone;

    /**
     * @var string 可用区中文名称
     */
    public $ZoneName;

    /**
     * @var string 该文件系统被挂载到客户端上的路径信息
     */
    public $MountDirectory;

    /**
     * @param string $CfsVip 文件系统IP地址
     * @param string $ClientIp 客户端IP地址
     * @param string $VpcId 文件系统所属VPCID
     * @param string $Zone 可用区名称，例如ap-beijing-1，请参考 概览文档中的地域与可用区列表
     * @param string $ZoneName 可用区中文名称
     * @param string $MountDirectory 该文件系统被挂载到客户端上的路径信息
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
        if (array_key_exists("CfsVip",$param) and $param["CfsVip"] !== null) {
            $this->CfsVip = $param["CfsVip"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("MountDirectory",$param) and $param["MountDirectory"] !== null) {
            $this->MountDirectory = $param["MountDirectory"];
        }
    }
}
