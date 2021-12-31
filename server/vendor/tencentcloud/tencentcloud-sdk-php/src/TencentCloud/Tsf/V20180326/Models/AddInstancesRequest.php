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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddInstances请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method array getInstanceIdList() 获取云主机ID列表
 * @method void setInstanceIdList(array $InstanceIdList) 设置云主机ID列表
 * @method string getOsName() 获取操作系统名称
 * @method void setOsName(string $OsName) 设置操作系统名称
 * @method string getImageId() 获取操作系统镜像ID
 * @method void setImageId(string $ImageId) 设置操作系统镜像ID
 * @method string getPassword() 获取重装系统密码设置
 * @method void setPassword(string $Password) 设置重装系统密码设置
 * @method string getKeyId() 获取重装系统，关联密钥设置
 * @method void setKeyId(string $KeyId) 设置重装系统，关联密钥设置
 * @method string getSgId() 获取安全组设置
 * @method void setSgId(string $SgId) 设置安全组设置
 * @method string getInstanceImportMode() 获取云主机导入方式，虚拟机集群必填，容器集群不填写此字段，R：重装TSF系统镜像，M：手动安装agent
 * @method void setInstanceImportMode(string $InstanceImportMode) 设置云主机导入方式，虚拟机集群必填，容器集群不填写此字段，R：重装TSF系统镜像，M：手动安装agent
 */
class AddInstancesRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var array 云主机ID列表
     */
    public $InstanceIdList;

    /**
     * @var string 操作系统名称
     */
    public $OsName;

    /**
     * @var string 操作系统镜像ID
     */
    public $ImageId;

    /**
     * @var string 重装系统密码设置
     */
    public $Password;

    /**
     * @var string 重装系统，关联密钥设置
     */
    public $KeyId;

    /**
     * @var string 安全组设置
     */
    public $SgId;

    /**
     * @var string 云主机导入方式，虚拟机集群必填，容器集群不填写此字段，R：重装TSF系统镜像，M：手动安装agent
     */
    public $InstanceImportMode;

    /**
     * @param string $ClusterId 集群ID
     * @param array $InstanceIdList 云主机ID列表
     * @param string $OsName 操作系统名称
     * @param string $ImageId 操作系统镜像ID
     * @param string $Password 重装系统密码设置
     * @param string $KeyId 重装系统，关联密钥设置
     * @param string $SgId 安全组设置
     * @param string $InstanceImportMode 云主机导入方式，虚拟机集群必填，容器集群不填写此字段，R：重装TSF系统镜像，M：手动安装agent
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("SgId",$param) and $param["SgId"] !== null) {
            $this->SgId = $param["SgId"];
        }

        if (array_key_exists("InstanceImportMode",$param) and $param["InstanceImportMode"] !== null) {
            $this->InstanceImportMode = $param["InstanceImportMode"];
        }
    }
}
