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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCustomImage请求参数结构体
 *
 * @method string getInstanceId() 获取用于制作镜像的物理机ID
 * @method void setInstanceId(string $InstanceId) 设置用于制作镜像的物理机ID
 * @method string getImageName() 获取镜像别名
 * @method void setImageName(string $ImageName) 设置镜像别名
 * @method string getImageDescription() 获取镜像描述
 * @method void setImageDescription(string $ImageDescription) 设置镜像描述
 */
class CreateCustomImageRequest extends AbstractModel
{
    /**
     * @var string 用于制作镜像的物理机ID
     */
    public $InstanceId;

    /**
     * @var string 镜像别名
     */
    public $ImageName;

    /**
     * @var string 镜像描述
     */
    public $ImageDescription;

    /**
     * @param string $InstanceId 用于制作镜像的物理机ID
     * @param string $ImageName 镜像别名
     * @param string $ImageDescription 镜像描述
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }
    }
}
