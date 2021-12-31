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
 * CreateCfsFileSystem请求参数结构体
 *
 * @method string getZone() 获取可用区名称，例如ap-beijing-1，请参考 [概览](https://cloud.tencent.com/document/product/582/13225) 文档中的地域与可用区列表
 * @method void setZone(string $Zone) 设置可用区名称，例如ap-beijing-1，请参考 [概览](https://cloud.tencent.com/document/product/582/13225) 文档中的地域与可用区列表
 * @method string getNetInterface() 获取网络类型，值为 VPC，BASIC；其中 VPC 为私有网络，BASIC 为基础网络
 * @method void setNetInterface(string $NetInterface) 设置网络类型，值为 VPC，BASIC；其中 VPC 为私有网络，BASIC 为基础网络
 * @method string getPGroupId() 获取权限组 ID
 * @method void setPGroupId(string $PGroupId) 设置权限组 ID
 * @method string getProtocol() 获取文件系统协议类型， 值为 NFS、CIFS; 若留空则默认为 NFS协议
 * @method void setProtocol(string $Protocol) 设置文件系统协议类型， 值为 NFS、CIFS; 若留空则默认为 NFS协议
 * @method string getStorageType() 获取文件系统存储类型，值为 SD ；其中 SD 为标准型存储， HP为性能存储。
 * @method void setStorageType(string $StorageType) 设置文件系统存储类型，值为 SD ；其中 SD 为标准型存储， HP为性能存储。
 * @method string getVpcId() 获取私有网络（VPC） ID，若网络类型选择的是VPC，该字段为必填。
 * @method void setVpcId(string $VpcId) 设置私有网络（VPC） ID，若网络类型选择的是VPC，该字段为必填。
 * @method string getSubnetId() 获取子网 ID，若网络类型选择的是VPC，该字段为必填。
 * @method void setSubnetId(string $SubnetId) 设置子网 ID，若网络类型选择的是VPC，该字段为必填。
 * @method string getMountIP() 获取指定IP地址，仅VPC网络支持；若不填写、将在该子网下随机分配 IP
 * @method void setMountIP(string $MountIP) 设置指定IP地址，仅VPC网络支持；若不填写、将在该子网下随机分配 IP
 * @method string getFsName() 获取用户自定义文件系统名称
 * @method void setFsName(string $FsName) 设置用户自定义文件系统名称
 * @method array getResourceTags() 获取文件系统标签
 * @method void setResourceTags(array $ResourceTags) 设置文件系统标签
 * @method string getClientToken() 获取用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。用于保证请求幂等性的字符串失效时间为2小时。
 * @method void setClientToken(string $ClientToken) 设置用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。用于保证请求幂等性的字符串失效时间为2小时。
 */
class CreateCfsFileSystemRequest extends AbstractModel
{
    /**
     * @var string 可用区名称，例如ap-beijing-1，请参考 [概览](https://cloud.tencent.com/document/product/582/13225) 文档中的地域与可用区列表
     */
    public $Zone;

    /**
     * @var string 网络类型，值为 VPC，BASIC；其中 VPC 为私有网络，BASIC 为基础网络
     */
    public $NetInterface;

    /**
     * @var string 权限组 ID
     */
    public $PGroupId;

    /**
     * @var string 文件系统协议类型， 值为 NFS、CIFS; 若留空则默认为 NFS协议
     */
    public $Protocol;

    /**
     * @var string 文件系统存储类型，值为 SD ；其中 SD 为标准型存储， HP为性能存储。
     */
    public $StorageType;

    /**
     * @var string 私有网络（VPC） ID，若网络类型选择的是VPC，该字段为必填。
     */
    public $VpcId;

    /**
     * @var string 子网 ID，若网络类型选择的是VPC，该字段为必填。
     */
    public $SubnetId;

    /**
     * @var string 指定IP地址，仅VPC网络支持；若不填写、将在该子网下随机分配 IP
     */
    public $MountIP;

    /**
     * @var string 用户自定义文件系统名称
     */
    public $FsName;

    /**
     * @var array 文件系统标签
     */
    public $ResourceTags;

    /**
     * @var string 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。用于保证请求幂等性的字符串失效时间为2小时。
     */
    public $ClientToken;

    /**
     * @param string $Zone 可用区名称，例如ap-beijing-1，请参考 [概览](https://cloud.tencent.com/document/product/582/13225) 文档中的地域与可用区列表
     * @param string $NetInterface 网络类型，值为 VPC，BASIC；其中 VPC 为私有网络，BASIC 为基础网络
     * @param string $PGroupId 权限组 ID
     * @param string $Protocol 文件系统协议类型， 值为 NFS、CIFS; 若留空则默认为 NFS协议
     * @param string $StorageType 文件系统存储类型，值为 SD ；其中 SD 为标准型存储， HP为性能存储。
     * @param string $VpcId 私有网络（VPC） ID，若网络类型选择的是VPC，该字段为必填。
     * @param string $SubnetId 子网 ID，若网络类型选择的是VPC，该字段为必填。
     * @param string $MountIP 指定IP地址，仅VPC网络支持；若不填写、将在该子网下随机分配 IP
     * @param string $FsName 用户自定义文件系统名称
     * @param array $ResourceTags 文件系统标签
     * @param string $ClientToken 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。用于保证请求幂等性的字符串失效时间为2小时。
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NetInterface",$param) and $param["NetInterface"] !== null) {
            $this->NetInterface = $param["NetInterface"];
        }

        if (array_key_exists("PGroupId",$param) and $param["PGroupId"] !== null) {
            $this->PGroupId = $param["PGroupId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("MountIP",$param) and $param["MountIP"] !== null) {
            $this->MountIP = $param["MountIP"];
        }

        if (array_key_exists("FsName",$param) and $param["FsName"] !== null) {
            $this->FsName = $param["FsName"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
