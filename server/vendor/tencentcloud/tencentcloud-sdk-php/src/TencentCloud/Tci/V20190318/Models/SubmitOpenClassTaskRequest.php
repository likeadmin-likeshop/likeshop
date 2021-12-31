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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitOpenClassTask请求参数结构体
 *
 * @method string getFileContent() 获取输入分析对象内容，输入数据格式参考FileType参数释义
 * @method void setFileContent(string $FileContent) 设置输入分析对象内容，输入数据格式参考FileType参数释义
 * @method string getFileType() 获取输入分析对象类型，picture_url:图片地址，vod_url:视频地址，live_url：直播地址,picture: 图片二进制数据的BASE64编码
 * @method void setFileType(string $FileType) 设置输入分析对象类型，picture_url:图片地址，vod_url:视频地址，live_url：直播地址,picture: 图片二进制数据的BASE64编码
 * @method array getLibrarySet() 获取查询人员库列表，可填写学生们的注册照所在人员库
 * @method void setLibrarySet(array $LibrarySet) 设置查询人员库列表，可填写学生们的注册照所在人员库
 * @method integer getMaxVideoDuration() 获取视频评估时间，单位秒，点播场景默认值为2小时（无法探测长度时）或完整视频，直播场景默认值为10分钟或直播提前结束
 * @method void setMaxVideoDuration(integer $MaxVideoDuration) 设置视频评估时间，单位秒，点播场景默认值为2小时（无法探测长度时）或完整视频，直播场景默认值为10分钟或直播提前结束
 */
class SubmitOpenClassTaskRequest extends AbstractModel
{
    /**
     * @var string 输入分析对象内容，输入数据格式参考FileType参数释义
     */
    public $FileContent;

    /**
     * @var string 输入分析对象类型，picture_url:图片地址，vod_url:视频地址，live_url：直播地址,picture: 图片二进制数据的BASE64编码
     */
    public $FileType;

    /**
     * @var array 查询人员库列表，可填写学生们的注册照所在人员库
     */
    public $LibrarySet;

    /**
     * @var integer 视频评估时间，单位秒，点播场景默认值为2小时（无法探测长度时）或完整视频，直播场景默认值为10分钟或直播提前结束
     */
    public $MaxVideoDuration;

    /**
     * @param string $FileContent 输入分析对象内容，输入数据格式参考FileType参数释义
     * @param string $FileType 输入分析对象类型，picture_url:图片地址，vod_url:视频地址，live_url：直播地址,picture: 图片二进制数据的BASE64编码
     * @param array $LibrarySet 查询人员库列表，可填写学生们的注册照所在人员库
     * @param integer $MaxVideoDuration 视频评估时间，单位秒，点播场景默认值为2小时（无法探测长度时）或完整视频，直播场景默认值为10分钟或直播提前结束
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
        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("LibrarySet",$param) and $param["LibrarySet"] !== null) {
            $this->LibrarySet = $param["LibrarySet"];
        }

        if (array_key_exists("MaxVideoDuration",$param) and $param["MaxVideoDuration"] !== null) {
            $this->MaxVideoDuration = $param["MaxVideoDuration"];
        }
    }
}
