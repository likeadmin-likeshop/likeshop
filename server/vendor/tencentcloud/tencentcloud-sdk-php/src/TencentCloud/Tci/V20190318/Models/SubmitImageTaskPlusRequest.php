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
 * SubmitImageTaskPlus请求参数结构体
 *
 * @method array getFileContent() 获取输入分析对象内容，输入数据格式参考FileType参数释义
 * @method void setFileContent(array $FileContent) 设置输入分析对象内容，输入数据格式参考FileType参数释义
 * @method string getFileType() 获取输入分析对象类型，picture：二进制图片的 base64 编码字符串，picture_url:图片地址，vod_url：视频地址，live_url：直播地址
 * @method void setFileType(string $FileType) 设置输入分析对象类型，picture：二进制图片的 base64 编码字符串，picture_url:图片地址，vod_url：视频地址，live_url：直播地址
 * @method ImageTaskFunction getFunctions() 获取任务控制选项
 * @method void setFunctions(ImageTaskFunction $Functions) 设置任务控制选项
 * @method array getLightStandardSet() 获取光照标准列表
 * @method void setLightStandardSet(array $LightStandardSet) 设置光照标准列表
 * @method integer getFrameInterval() 获取抽帧的时间间隔，单位毫秒，默认值1000，保留字段，当前不支持填写。
 * @method void setFrameInterval(integer $FrameInterval) 设置抽帧的时间间隔，单位毫秒，默认值1000，保留字段，当前不支持填写。
 * @method array getLibrarySet() 获取查询人员库列表
 * @method void setLibrarySet(array $LibrarySet) 设置查询人员库列表
 * @method integer getMaxVideoDuration() 获取视频评估时间，单位秒，点播场景默认值为2小时（无法探测长度时）或完整视频，直播场景默认值为10分钟或直播提前结束
 * @method void setMaxVideoDuration(integer $MaxVideoDuration) 设置视频评估时间，单位秒，点播场景默认值为2小时（无法探测长度时）或完整视频，直播场景默认值为10分钟或直播提前结束
 * @method float getSimThreshold() 获取人脸识别中的相似度阈值，默认值为0.89，保留字段，当前不支持填写。
 * @method void setSimThreshold(float $SimThreshold) 设置人脸识别中的相似度阈值，默认值为0.89，保留字段，当前不支持填写。
 */
class SubmitImageTaskPlusRequest extends AbstractModel
{
    /**
     * @var array 输入分析对象内容，输入数据格式参考FileType参数释义
     */
    public $FileContent;

    /**
     * @var string 输入分析对象类型，picture：二进制图片的 base64 编码字符串，picture_url:图片地址，vod_url：视频地址，live_url：直播地址
     */
    public $FileType;

    /**
     * @var ImageTaskFunction 任务控制选项
     */
    public $Functions;

    /**
     * @var array 光照标准列表
     */
    public $LightStandardSet;

    /**
     * @var integer 抽帧的时间间隔，单位毫秒，默认值1000，保留字段，当前不支持填写。
     */
    public $FrameInterval;

    /**
     * @var array 查询人员库列表
     */
    public $LibrarySet;

    /**
     * @var integer 视频评估时间，单位秒，点播场景默认值为2小时（无法探测长度时）或完整视频，直播场景默认值为10分钟或直播提前结束
     */
    public $MaxVideoDuration;

    /**
     * @var float 人脸识别中的相似度阈值，默认值为0.89，保留字段，当前不支持填写。
     */
    public $SimThreshold;

    /**
     * @param array $FileContent 输入分析对象内容，输入数据格式参考FileType参数释义
     * @param string $FileType 输入分析对象类型，picture：二进制图片的 base64 编码字符串，picture_url:图片地址，vod_url：视频地址，live_url：直播地址
     * @param ImageTaskFunction $Functions 任务控制选项
     * @param array $LightStandardSet 光照标准列表
     * @param integer $FrameInterval 抽帧的时间间隔，单位毫秒，默认值1000，保留字段，当前不支持填写。
     * @param array $LibrarySet 查询人员库列表
     * @param integer $MaxVideoDuration 视频评估时间，单位秒，点播场景默认值为2小时（无法探测长度时）或完整视频，直播场景默认值为10分钟或直播提前结束
     * @param float $SimThreshold 人脸识别中的相似度阈值，默认值为0.89，保留字段，当前不支持填写。
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

        if (array_key_exists("Functions",$param) and $param["Functions"] !== null) {
            $this->Functions = new ImageTaskFunction();
            $this->Functions->deserialize($param["Functions"]);
        }

        if (array_key_exists("LightStandardSet",$param) and $param["LightStandardSet"] !== null) {
            $this->LightStandardSet = [];
            foreach ($param["LightStandardSet"] as $key => $value){
                $obj = new LightStandard();
                $obj->deserialize($value);
                array_push($this->LightStandardSet, $obj);
            }
        }

        if (array_key_exists("FrameInterval",$param) and $param["FrameInterval"] !== null) {
            $this->FrameInterval = $param["FrameInterval"];
        }

        if (array_key_exists("LibrarySet",$param) and $param["LibrarySet"] !== null) {
            $this->LibrarySet = $param["LibrarySet"];
        }

        if (array_key_exists("MaxVideoDuration",$param) and $param["MaxVideoDuration"] !== null) {
            $this->MaxVideoDuration = $param["MaxVideoDuration"];
        }

        if (array_key_exists("SimThreshold",$param) and $param["SimThreshold"] !== null) {
            $this->SimThreshold = $param["SimThreshold"];
        }
    }
}
