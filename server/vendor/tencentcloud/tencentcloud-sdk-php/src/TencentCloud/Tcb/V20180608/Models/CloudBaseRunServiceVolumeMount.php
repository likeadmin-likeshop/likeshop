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
 * 对标 EKS VolumeMount
 *
 * @method string getName() 获取Volume 名称
 * @method void setName(string $Name) 设置Volume 名称
 * @method string getMountPath() 获取挂载路径
 * @method void setMountPath(string $MountPath) 设置挂载路径
 * @method boolean getReadOnly() 获取是否只读
 * @method void setReadOnly(boolean $ReadOnly) 设置是否只读
 * @method string getSubPath() 获取子路径
 * @method void setSubPath(string $SubPath) 设置子路径
 * @method string getMountPropagation() 获取传播挂载方式
 * @method void setMountPropagation(string $MountPropagation) 设置传播挂载方式
 */
class CloudBaseRunServiceVolumeMount extends AbstractModel
{
    /**
     * @var string Volume 名称
     */
    public $Name;

    /**
     * @var string 挂载路径
     */
    public $MountPath;

    /**
     * @var boolean 是否只读
     */
    public $ReadOnly;

    /**
     * @var string 子路径
     */
    public $SubPath;

    /**
     * @var string 传播挂载方式
     */
    public $MountPropagation;

    /**
     * @param string $Name Volume 名称
     * @param string $MountPath 挂载路径
     * @param boolean $ReadOnly 是否只读
     * @param string $SubPath 子路径
     * @param string $MountPropagation 传播挂载方式
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            $this->MountPath = $param["MountPath"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("SubPath",$param) and $param["SubPath"] !== null) {
            $this->SubPath = $param["SubPath"];
        }

        if (array_key_exists("MountPropagation",$param) and $param["MountPropagation"] !== null) {
            $this->MountPropagation = $param["MountPropagation"];
        }
    }
}
