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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转自适应码流信息
 *
 * @method integer getDefinition() 获取转自适应码流规格。
 * @method void setDefinition(integer $Definition) 设置转自适应码流规格。
 * @method string getPackage() 获取打包格式，只能为 HLS。
 * @method void setPackage(string $Package) 设置打包格式，只能为 HLS。
 * @method string getDrmType() 获取加密类型。
 * @method void setDrmType(string $DrmType) 设置加密类型。
 * @method string getUrl() 获取播放地址。
 * @method void setUrl(string $Url) 设置播放地址。
 */
class AdaptiveDynamicStreamingInfoItem extends AbstractModel
{
    /**
     * @var integer 转自适应码流规格。
     */
    public $Definition;

    /**
     * @var string 打包格式，只能为 HLS。
     */
    public $Package;

    /**
     * @var string 加密类型。
     */
    public $DrmType;

    /**
     * @var string 播放地址。
     */
    public $Url;

    /**
     * @param integer $Definition 转自适应码流规格。
     * @param string $Package 打包格式，只能为 HLS。
     * @param string $DrmType 加密类型。
     * @param string $Url 播放地址。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Package",$param) and $param["Package"] !== null) {
            $this->Package = $param["Package"];
        }

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
