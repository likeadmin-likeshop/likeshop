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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateImage请求参数结构体
 *
 * @method string getImageName() 获取镜像名称。
 * @method void setImageName(string $ImageName) 设置镜像名称。
 * @method string getInstanceId() 获取需要制作镜像的实例ID。
 * @method void setInstanceId(string $InstanceId) 设置需要制作镜像的实例ID。
 * @method string getImageDescription() 获取镜像描述。
 * @method void setImageDescription(string $ImageDescription) 设置镜像描述。
 * @method string getForcePoweroff() 获取是否执行强制关机以制作镜像。取值范围：
TRUE：表示自动关机后制作镜像
FALSE：表示开机状态制作，目前不支持，需要先手动关机
默认取值：FALSE。
 * @method void setForcePoweroff(string $ForcePoweroff) 设置是否执行强制关机以制作镜像。取值范围：
TRUE：表示自动关机后制作镜像
FALSE：表示开机状态制作，目前不支持，需要先手动关机
默认取值：FALSE。
 */
class CreateImageRequest extends AbstractModel
{
    /**
     * @var string 镜像名称。
     */
    public $ImageName;

    /**
     * @var string 需要制作镜像的实例ID。
     */
    public $InstanceId;

    /**
     * @var string 镜像描述。
     */
    public $ImageDescription;

    /**
     * @var string 是否执行强制关机以制作镜像。取值范围：
TRUE：表示自动关机后制作镜像
FALSE：表示开机状态制作，目前不支持，需要先手动关机
默认取值：FALSE。
     */
    public $ForcePoweroff;

    /**
     * @param string $ImageName 镜像名称。
     * @param string $InstanceId 需要制作镜像的实例ID。
     * @param string $ImageDescription 镜像描述。
     * @param string $ForcePoweroff 是否执行强制关机以制作镜像。取值范围：
TRUE：表示自动关机后制作镜像
FALSE：表示开机状态制作，目前不支持，需要先手动关机
默认取值：FALSE。
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
        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("ForcePoweroff",$param) and $param["ForcePoweroff"] !== null) {
            $this->ForcePoweroff = $param["ForcePoweroff"];
        }
    }
}
