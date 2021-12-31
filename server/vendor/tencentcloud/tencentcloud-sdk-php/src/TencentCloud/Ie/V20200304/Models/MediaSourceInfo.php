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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 编辑处理的媒体源
 *
 * @method DownInfo getDownInfo() 获取媒体源资源下载信息。
 * @method void setDownInfo(DownInfo $DownInfo) 设置媒体源资源下载信息。
 * @method string getId() 获取媒体源ID标记，用于多个输入源时，请内媒体源的定位，对于多输入的任务，一般要求必选。
ID只能包含字母、数字、下划线、中划线，长读不能超过128。
 * @method void setId(string $Id) 设置媒体源ID标记，用于多个输入源时，请内媒体源的定位，对于多输入的任务，一般要求必选。
ID只能包含字母、数字、下划线、中划线，长读不能超过128。
 * @method string getType() 获取媒体源类型，具体类型如下：
Video：视频
Image：图片
Audio：音频
 * @method void setType(string $Type) 设置媒体源类型，具体类型如下：
Video：视频
Image：图片
Audio：音频
 */
class MediaSourceInfo extends AbstractModel
{
    /**
     * @var DownInfo 媒体源资源下载信息。
     */
    public $DownInfo;

    /**
     * @var string 媒体源ID标记，用于多个输入源时，请内媒体源的定位，对于多输入的任务，一般要求必选。
ID只能包含字母、数字、下划线、中划线，长读不能超过128。
     */
    public $Id;

    /**
     * @var string 媒体源类型，具体类型如下：
Video：视频
Image：图片
Audio：音频
     */
    public $Type;

    /**
     * @param DownInfo $DownInfo 媒体源资源下载信息。
     * @param string $Id 媒体源ID标记，用于多个输入源时，请内媒体源的定位，对于多输入的任务，一般要求必选。
ID只能包含字母、数字、下划线、中划线，长读不能超过128。
     * @param string $Type 媒体源类型，具体类型如下：
Video：视频
Image：图片
Audio：音频
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
        if (array_key_exists("DownInfo",$param) and $param["DownInfo"] !== null) {
            $this->DownInfo = new DownInfo();
            $this->DownInfo->deserialize($param["DownInfo"]);
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
