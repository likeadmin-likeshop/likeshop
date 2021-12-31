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
 * ModifyFileSystem请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
 * @method string getFileSystemName() 获取文件系统名称
 * @method void setFileSystemName(string $FileSystemName) 设置文件系统名称
 * @method string getDescription() 获取文件系统描述
 * @method void setDescription(string $Description) 设置文件系统描述
 * @method integer getCapacityQuota() 获取文件系统容量（byte），下限为1G，上限为1P，且必须是1G的整数倍
注意：修改的文件系统容量不能小于当前使用量
 * @method void setCapacityQuota(integer $CapacityQuota) 设置文件系统容量（byte），下限为1G，上限为1P，且必须是1G的整数倍
注意：修改的文件系统容量不能小于当前使用量
 * @method array getSuperUsers() 获取超级用户名列表，可以为空数组
 * @method void setSuperUsers(array $SuperUsers) 设置超级用户名列表，可以为空数组
 * @method boolean getPosixAcl() 获取是否校验POSIX ACL
 * @method void setPosixAcl(boolean $PosixAcl) 设置是否校验POSIX ACL
 */
class ModifyFileSystemRequest extends AbstractModel
{
    /**
     * @var string 文件系统ID
     */
    public $FileSystemId;

    /**
     * @var string 文件系统名称
     */
    public $FileSystemName;

    /**
     * @var string 文件系统描述
     */
    public $Description;

    /**
     * @var integer 文件系统容量（byte），下限为1G，上限为1P，且必须是1G的整数倍
注意：修改的文件系统容量不能小于当前使用量
     */
    public $CapacityQuota;

    /**
     * @var array 超级用户名列表，可以为空数组
     */
    public $SuperUsers;

    /**
     * @var boolean 是否校验POSIX ACL
     */
    public $PosixAcl;

    /**
     * @param string $FileSystemId 文件系统ID
     * @param string $FileSystemName 文件系统名称
     * @param string $Description 文件系统描述
     * @param integer $CapacityQuota 文件系统容量（byte），下限为1G，上限为1P，且必须是1G的整数倍
注意：修改的文件系统容量不能小于当前使用量
     * @param array $SuperUsers 超级用户名列表，可以为空数组
     * @param boolean $PosixAcl 是否校验POSIX ACL
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

        if (array_key_exists("FileSystemName",$param) and $param["FileSystemName"] !== null) {
            $this->FileSystemName = $param["FileSystemName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CapacityQuota",$param) and $param["CapacityQuota"] !== null) {
            $this->CapacityQuota = $param["CapacityQuota"];
        }

        if (array_key_exists("SuperUsers",$param) and $param["SuperUsers"] !== null) {
            $this->SuperUsers = $param["SuperUsers"];
        }

        if (array_key_exists("PosixAcl",$param) and $param["PosixAcl"] !== null) {
            $this->PosixAcl = $param["PosixAcl"];
        }
    }
}
