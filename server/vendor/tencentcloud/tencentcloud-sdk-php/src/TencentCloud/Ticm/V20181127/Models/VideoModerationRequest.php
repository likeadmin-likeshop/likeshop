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
namespace TencentCloud\Ticm\V20181127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VideoModeration请求参数结构体
 *
 * @method string getVideoUrl() 获取需要审核的视频的URL地址
 * @method void setVideoUrl(string $VideoUrl) 设置需要审核的视频的URL地址
 * @method string getDeveloperId() 获取开发者标识
 * @method void setDeveloperId(string $DeveloperId) 设置开发者标识
 * @method string getCBUrl() 获取审核完成后回调地址
 * @method void setCBUrl(string $CBUrl) 设置审核完成后回调地址
 * @method string getExtra() 获取透传字段，透传简单信息。
 * @method void setExtra(string $Extra) 设置透传字段，透传简单信息。
 */
class VideoModerationRequest extends AbstractModel
{
    /**
     * @var string 需要审核的视频的URL地址
     */
    public $VideoUrl;

    /**
     * @var string 开发者标识
     */
    public $DeveloperId;

    /**
     * @var string 审核完成后回调地址
     */
    public $CBUrl;

    /**
     * @var string 透传字段，透传简单信息。
     */
    public $Extra;

    /**
     * @param string $VideoUrl 需要审核的视频的URL地址
     * @param string $DeveloperId 开发者标识
     * @param string $CBUrl 审核完成后回调地址
     * @param string $Extra 透传字段，透传简单信息。
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
        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("DeveloperId",$param) and $param["DeveloperId"] !== null) {
            $this->DeveloperId = $param["DeveloperId"];
        }

        if (array_key_exists("CBUrl",$param) and $param["CBUrl"] !== null) {
            $this->CBUrl = $param["CBUrl"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }
    }
}
