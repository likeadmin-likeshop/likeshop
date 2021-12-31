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
 * 目标媒体信息。
 *
 * @method string getFileName() 获取目标文件名，不能带特殊字符（如/等），无需后缀名，最长200字符。

注1：部分子服务支持占位符，形式为： {parameter}
预设parameter有：
index：序号；
 * @method void setFileName(string $FileName) 设置目标文件名，不能带特殊字符（如/等），无需后缀名，最长200字符。

注1：部分子服务支持占位符，形式为： {parameter}
预设parameter有：
index：序号；
 * @method string getFormat() 获取媒体封装格式，最长5字符，具体格式支持根据子任务确定。
 * @method void setFormat(string $Format) 设置媒体封装格式，最长5字符，具体格式支持根据子任务确定。
 * @method TargetVideoInfo getTargetVideoInfo() 获取视频流信息。
 * @method void setTargetVideoInfo(TargetVideoInfo $TargetVideoInfo) 设置视频流信息。
 * @method string getResultListSaveType() 获取【不再使用】 对于多输出任务，部分子服务推荐结果信息以列表文件形式，存储到用户存储服务中，可选值：
UseSaveInfo：默认，结果列表和结果存储同一位置；
NoListFile：不存储结果列表。
 * @method void setResultListSaveType(string $ResultListSaveType) 设置【不再使用】 对于多输出任务，部分子服务推荐结果信息以列表文件形式，存储到用户存储服务中，可选值：
UseSaveInfo：默认，结果列表和结果存储同一位置；
NoListFile：不存储结果列表。
 */
class MediaTargetInfo extends AbstractModel
{
    /**
     * @var string 目标文件名，不能带特殊字符（如/等），无需后缀名，最长200字符。

注1：部分子服务支持占位符，形式为： {parameter}
预设parameter有：
index：序号；
     */
    public $FileName;

    /**
     * @var string 媒体封装格式，最长5字符，具体格式支持根据子任务确定。
     */
    public $Format;

    /**
     * @var TargetVideoInfo 视频流信息。
     */
    public $TargetVideoInfo;

    /**
     * @var string 【不再使用】 对于多输出任务，部分子服务推荐结果信息以列表文件形式，存储到用户存储服务中，可选值：
UseSaveInfo：默认，结果列表和结果存储同一位置；
NoListFile：不存储结果列表。
     */
    public $ResultListSaveType;

    /**
     * @param string $FileName 目标文件名，不能带特殊字符（如/等），无需后缀名，最长200字符。

注1：部分子服务支持占位符，形式为： {parameter}
预设parameter有：
index：序号；
     * @param string $Format 媒体封装格式，最长5字符，具体格式支持根据子任务确定。
     * @param TargetVideoInfo $TargetVideoInfo 视频流信息。
     * @param string $ResultListSaveType 【不再使用】 对于多输出任务，部分子服务推荐结果信息以列表文件形式，存储到用户存储服务中，可选值：
UseSaveInfo：默认，结果列表和结果存储同一位置；
NoListFile：不存储结果列表。
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("TargetVideoInfo",$param) and $param["TargetVideoInfo"] !== null) {
            $this->TargetVideoInfo = new TargetVideoInfo();
            $this->TargetVideoInfo->deserialize($param["TargetVideoInfo"]);
        }

        if (array_key_exists("ResultListSaveType",$param) and $param["ResultListSaveType"] !== null) {
            $this->ResultListSaveType = $param["ResultListSaveType"];
        }
    }
}
