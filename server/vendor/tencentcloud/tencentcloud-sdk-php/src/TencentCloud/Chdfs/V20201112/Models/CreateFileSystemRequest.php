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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFileSystem请求参数结构体
 *
 * @method string getFileSystemName() 获取文件系统名称
 * @method void setFileSystemName(string $FileSystemName) 设置文件系统名称
 * @method integer getCapacityQuota() 获取文件系统容量（byte），下限为1G，上限为1P，且必须是1G的整数倍
 * @method void setCapacityQuota(integer $CapacityQuota) 设置文件系统容量（byte），下限为1G，上限为1P，且必须是1G的整数倍
 * @method boolean getPosixAcl() 获取是否校验POSIX ACL
 * @method void setPosixAcl(boolean $PosixAcl) 设置是否校验POSIX ACL
 * @method string getDescription() 获取文件系统描述，默认为空字符串
 * @method void setDescription(string $Description) 设置文件系统描述，默认为空字符串
 * @method array getSuperUsers() 获取超级用户名列表，默认为空数组
 * @method void setSuperUsers(array $SuperUsers) 设置超级用户名列表，默认为空数组
 * @method string getRootInodeUser() 获取根目录Inode用户名，默认为hadoop
 * @method void setRootInodeUser(string $RootInodeUser) 设置根目录Inode用户名，默认为hadoop
 * @method string getRootInodeGroup() 获取根目录Inode组名，默认为supergroup
 * @method void setRootInodeGroup(string $RootInodeGroup) 设置根目录Inode组名，默认为supergroup
 */
class CreateFileSystemRequest extends AbstractModel
{
    /**
     * @var string 文件系统名称
     */
    public $FileSystemName;

    /**
     * @var integer 文件系统容量（byte），下限为1G，上限为1P，且必须是1G的整数倍
     */
    public $CapacityQuota;

    /**
     * @var boolean 是否校验POSIX ACL
     */
    public $PosixAcl;

    /**
     * @var string 文件系统描述，默认为空字符串
     */
    public $Description;

    /**
     * @var array 超级用户名列表，默认为空数组
     */
    public $SuperUsers;

    /**
     * @var string 根目录Inode用户名，默认为hadoop
     */
    public $RootInodeUser;

    /**
     * @var string 根目录Inode组名，默认为supergroup
     */
    public $RootInodeGroup;

    /**
     * @param string $FileSystemName 文件系统名称
     * @param integer $CapacityQuota 文件系统容量（byte），下限为1G，上限为1P，且必须是1G的整数倍
     * @param boolean $PosixAcl 是否校验POSIX ACL
     * @param string $Description 文件系统描述，默认为空字符串
     * @param array $SuperUsers 超级用户名列表，默认为空数组
     * @param string $RootInodeUser 根目录Inode用户名，默认为hadoop
     * @param string $RootInodeGroup 根目录Inode组名，默认为supergroup
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
        if (array_key_exists("FileSystemName",$param) and $param["FileSystemName"] !== null) {
            $this->FileSystemName = $param["FileSystemName"];
        }

        if (array_key_exists("CapacityQuota",$param) and $param["CapacityQuota"] !== null) {
            $this->CapacityQuota = $param["CapacityQuota"];
        }

        if (array_key_exists("PosixAcl",$param) and $param["PosixAcl"] !== null) {
            $this->PosixAcl = $param["PosixAcl"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SuperUsers",$param) and $param["SuperUsers"] !== null) {
            $this->SuperUsers = $param["SuperUsers"];
        }

        if (array_key_exists("RootInodeUser",$param) and $param["RootInodeUser"] !== null) {
            $this->RootInodeUser = $param["RootInodeUser"];
        }

        if (array_key_exists("RootInodeGroup",$param) and $param["RootInodeGroup"] !== null) {
            $this->RootInodeGroup = $param["RootInodeGroup"];
        }
    }
}
