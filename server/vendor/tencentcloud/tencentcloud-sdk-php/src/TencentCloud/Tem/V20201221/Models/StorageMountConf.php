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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据卷挂载信息
 *
 * @method string getVolumeName() 获取数据卷名
 * @method void setVolumeName(string $VolumeName) 设置数据卷名
 * @method string getMountPath() 获取数据卷绑定路径
 * @method void setMountPath(string $MountPath) 设置数据卷绑定路径
 */
class StorageMountConf extends AbstractModel
{
    /**
     * @var string 数据卷名
     */
    public $VolumeName;

    /**
     * @var string 数据卷绑定路径
     */
    public $MountPath;

    /**
     * @param string $VolumeName 数据卷名
     * @param string $MountPath 数据卷绑定路径
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
        if (array_key_exists("VolumeName",$param) and $param["VolumeName"] !== null) {
            $this->VolumeName = $param["VolumeName"];
        }

        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            $this->MountPath = $param["MountPath"];
        }
    }
}
