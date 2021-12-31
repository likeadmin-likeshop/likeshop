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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时录制视频拼接参数
 *
 * @method boolean getEnabled() 获取是否开启拼接功能
在开启了视频拼接功能的情况下，实时录制服务会把同一个用户因为暂停导致的多段视频拼接成一个视频
 * @method void setEnabled(boolean $Enabled) 设置是否开启拼接功能
在开启了视频拼接功能的情况下，实时录制服务会把同一个用户因为暂停导致的多段视频拼接成一个视频
 * @method string getImage() 获取视频拼接时使用的垫片图片下载地址，不填默认用全黑的图片进行视频垫片
 * @method void setImage(string $Image) 设置视频拼接时使用的垫片图片下载地址，不填默认用全黑的图片进行视频垫片
 */
class Concat extends AbstractModel
{
    /**
     * @var boolean 是否开启拼接功能
在开启了视频拼接功能的情况下，实时录制服务会把同一个用户因为暂停导致的多段视频拼接成一个视频
     */
    public $Enabled;

    /**
     * @var string 视频拼接时使用的垫片图片下载地址，不填默认用全黑的图片进行视频垫片
     */
    public $Image;

    /**
     * @param boolean $Enabled 是否开启拼接功能
在开启了视频拼接功能的情况下，实时录制服务会把同一个用户因为暂停导致的多段视频拼接成一个视频
     * @param string $Image 视频拼接时使用的垫片图片下载地址，不填默认用全黑的图片进行视频垫片
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }
    }
}
