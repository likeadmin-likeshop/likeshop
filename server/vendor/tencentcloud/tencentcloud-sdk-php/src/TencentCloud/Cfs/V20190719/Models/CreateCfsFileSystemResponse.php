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
 * CreateCfsFileSystem返回参数结构体
 *
 * @method string getCreationTime() 获取文件系统创建时间
 * @method void setCreationTime(string $CreationTime) 设置文件系统创建时间
 * @method string getCreationToken() 获取用户自定义文件系统名称
 * @method void setCreationToken(string $CreationToken) 设置用户自定义文件系统名称
 * @method string getFileSystemId() 获取文件系统 ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统 ID
 * @method string getLifeCycleState() 获取文件系统状态
 * @method void setLifeCycleState(string $LifeCycleState) 设置文件系统状态
 * @method integer getSizeByte() 获取文件系统已使用容量大小
 * @method void setSizeByte(integer $SizeByte) 设置文件系统已使用容量大小
 * @method integer getZoneId() 获取可用区 ID
 * @method void setZoneId(integer $ZoneId) 设置可用区 ID
 * @method string getFsName() 获取用户自定义文件系统名称
 * @method void setFsName(string $FsName) 设置用户自定义文件系统名称
 * @method boolean getEncrypted() 获取文件系统是否加密
 * @method void setEncrypted(boolean $Encrypted) 设置文件系统是否加密
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateCfsFileSystemResponse extends AbstractModel
{
    /**
     * @var string 文件系统创建时间
     */
    public $CreationTime;

    /**
     * @var string 用户自定义文件系统名称
     */
    public $CreationToken;

    /**
     * @var string 文件系统 ID
     */
    public $FileSystemId;

    /**
     * @var string 文件系统状态
     */
    public $LifeCycleState;

    /**
     * @var integer 文件系统已使用容量大小
     */
    public $SizeByte;

    /**
     * @var integer 可用区 ID
     */
    public $ZoneId;

    /**
     * @var string 用户自定义文件系统名称
     */
    public $FsName;

    /**
     * @var boolean 文件系统是否加密
     */
    public $Encrypted;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CreationTime 文件系统创建时间
     * @param string $CreationToken 用户自定义文件系统名称
     * @param string $FileSystemId 文件系统 ID
     * @param string $LifeCycleState 文件系统状态
     * @param integer $SizeByte 文件系统已使用容量大小
     * @param integer $ZoneId 可用区 ID
     * @param string $FsName 用户自定义文件系统名称
     * @param boolean $Encrypted 文件系统是否加密
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
        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("CreationToken",$param) and $param["CreationToken"] !== null) {
            $this->CreationToken = $param["CreationToken"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("LifeCycleState",$param) and $param["LifeCycleState"] !== null) {
            $this->LifeCycleState = $param["LifeCycleState"];
        }

        if (array_key_exists("SizeByte",$param) and $param["SizeByte"] !== null) {
            $this->SizeByte = $param["SizeByte"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("FsName",$param) and $param["FsName"] !== null) {
            $this->FsName = $param["FsName"];
        }

        if (array_key_exists("Encrypted",$param) and $param["Encrypted"] !== null) {
            $this->Encrypted = $param["Encrypted"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
