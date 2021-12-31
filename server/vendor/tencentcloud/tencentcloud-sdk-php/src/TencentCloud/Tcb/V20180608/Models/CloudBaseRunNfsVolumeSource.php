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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * nfs挂载资源
 *
 * @method string getServer() 获取NFS挂载Server
 * @method void setServer(string $Server) 设置NFS挂载Server
 * @method string getPath() 获取Server路径
 * @method void setPath(string $Path) 设置Server路径
 * @method boolean getReadOnly() 获取是否只读
 * @method void setReadOnly(boolean $ReadOnly) 设置是否只读
 * @method string getSecretName() 获取secret名称
 * @method void setSecretName(string $SecretName) 设置secret名称
 * @method boolean getEnableEmptyDirVolume() 获取临时目录
 * @method void setEnableEmptyDirVolume(boolean $EnableEmptyDirVolume) 设置临时目录
 */
class CloudBaseRunNfsVolumeSource extends AbstractModel
{
    /**
     * @var string NFS挂载Server
     */
    public $Server;

    /**
     * @var string Server路径
     */
    public $Path;

    /**
     * @var boolean 是否只读
     */
    public $ReadOnly;

    /**
     * @var string secret名称
     */
    public $SecretName;

    /**
     * @var boolean 临时目录
     */
    public $EnableEmptyDirVolume;

    /**
     * @param string $Server NFS挂载Server
     * @param string $Path Server路径
     * @param boolean $ReadOnly 是否只读
     * @param string $SecretName secret名称
     * @param boolean $EnableEmptyDirVolume 临时目录
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
        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("EnableEmptyDirVolume",$param) and $param["EnableEmptyDirVolume"] !== null) {
            $this->EnableEmptyDirVolume = $param["EnableEmptyDirVolume"];
        }
    }
}
