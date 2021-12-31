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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云函数关联的cfs配置信息
 *
 * @method string getUserId() 获取用户id
 * @method void setUserId(string $UserId) 设置用户id
 * @method string getUserGroupId() 获取用户组id
 * @method void setUserGroupId(string $UserGroupId) 设置用户组id
 * @method string getCfsId() 获取文件系统实例id
 * @method void setCfsId(string $CfsId) 设置文件系统实例id
 * @method string getMountInsId() 获取文件系统挂载点id
 * @method void setMountInsId(string $MountInsId) 设置文件系统挂载点id
 * @method string getLocalMountDir() 获取本地挂载点
 * @method void setLocalMountDir(string $LocalMountDir) 设置本地挂载点
 * @method string getRemoteMountDir() 获取远程挂载点
 * @method void setRemoteMountDir(string $RemoteMountDir) 设置远程挂载点
 * @method string getIpAddress() 获取文件系统ip，配置 cfs 时无需填写。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpAddress(string $IpAddress) 设置文件系统ip，配置 cfs 时无需填写。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMountVpcId() 获取文件系统所在的私有网络id，配置 cfs 时无需填写。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMountVpcId(string $MountVpcId) 设置文件系统所在的私有网络id，配置 cfs 时无需填写。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMountSubnetId() 获取文件系统所在私有网络的子网id，配置 cfs 时无需填写。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMountSubnetId(string $MountSubnetId) 设置文件系统所在私有网络的子网id，配置 cfs 时无需填写。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CfsInsInfo extends AbstractModel
{
    /**
     * @var string 用户id
     */
    public $UserId;

    /**
     * @var string 用户组id
     */
    public $UserGroupId;

    /**
     * @var string 文件系统实例id
     */
    public $CfsId;

    /**
     * @var string 文件系统挂载点id
     */
    public $MountInsId;

    /**
     * @var string 本地挂载点
     */
    public $LocalMountDir;

    /**
     * @var string 远程挂载点
     */
    public $RemoteMountDir;

    /**
     * @var string 文件系统ip，配置 cfs 时无需填写。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpAddress;

    /**
     * @var string 文件系统所在的私有网络id，配置 cfs 时无需填写。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MountVpcId;

    /**
     * @var string 文件系统所在私有网络的子网id，配置 cfs 时无需填写。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MountSubnetId;

    /**
     * @param string $UserId 用户id
     * @param string $UserGroupId 用户组id
     * @param string $CfsId 文件系统实例id
     * @param string $MountInsId 文件系统挂载点id
     * @param string $LocalMountDir 本地挂载点
     * @param string $RemoteMountDir 远程挂载点
     * @param string $IpAddress 文件系统ip，配置 cfs 时无需填写。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MountVpcId 文件系统所在的私有网络id，配置 cfs 时无需填写。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MountSubnetId 文件系统所在私有网络的子网id，配置 cfs 时无需填写。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("CfsId",$param) and $param["CfsId"] !== null) {
            $this->CfsId = $param["CfsId"];
        }

        if (array_key_exists("MountInsId",$param) and $param["MountInsId"] !== null) {
            $this->MountInsId = $param["MountInsId"];
        }

        if (array_key_exists("LocalMountDir",$param) and $param["LocalMountDir"] !== null) {
            $this->LocalMountDir = $param["LocalMountDir"];
        }

        if (array_key_exists("RemoteMountDir",$param) and $param["RemoteMountDir"] !== null) {
            $this->RemoteMountDir = $param["RemoteMountDir"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("MountVpcId",$param) and $param["MountVpcId"] !== null) {
            $this->MountVpcId = $param["MountVpcId"];
        }

        if (array_key_exists("MountSubnetId",$param) and $param["MountSubnetId"] !== null) {
            $this->MountSubnetId = $param["MountSubnetId"];
        }
    }
}
