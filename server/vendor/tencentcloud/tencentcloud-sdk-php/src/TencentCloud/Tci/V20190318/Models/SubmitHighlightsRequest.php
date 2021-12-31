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
 * SubmitHighlights请求参数结构体
 *
 * @method HLFunction getFunctions() 获取表情配置开关项。
 * @method void setFunctions(HLFunction $Functions) 设置表情配置开关项。
 * @method string getFileContent() 获取视频url。
 * @method void setFileContent(string $FileContent) 设置视频url。
 * @method string getFileType() 获取视频类型及来源，目前只支持点播类型："vod_url"。
 * @method void setFileType(string $FileType) 设置视频类型及来源，目前只支持点播类型："vod_url"。
 * @method array getLibIds() 获取需要检索的人脸合集库，不在库中的人脸将不参与精彩集锦。
 * @method void setLibIds(array $LibIds) 设置需要检索的人脸合集库，不在库中的人脸将不参与精彩集锦。
 * @method integer getFrameInterval() 获取视频处理的抽帧间隔，单位毫秒。建议留空。
 * @method void setFrameInterval(integer $FrameInterval) 设置视频处理的抽帧间隔，单位毫秒。建议留空。
 * @method integer getKeywordsLanguage() 获取关键词语言类型，0为英文，1为中文。
 * @method void setKeywordsLanguage(integer $KeywordsLanguage) 设置关键词语言类型，0为英文，1为中文。
 * @method array getKeywordsStrings() 获取关键词数组，当且仅当Funtions中的EnableKeywordWonderfulTime为true时有意义，匹配相应的关键字。
 * @method void setKeywordsStrings(array $KeywordsStrings) 设置关键词数组，当且仅当Funtions中的EnableKeywordWonderfulTime为true时有意义，匹配相应的关键字。
 * @method integer getMaxVideoDuration() 获取处理视频的总时长，单位毫秒。该值为0或未设置时，默认值两小时生效；当该值大于视频实际时长时，视频实际时长生效；当该值小于视频实际时长时，该值生效；当获取视频实际时长失败时，若该值设置则生效，否则默认值生效。建议留空。
 * @method void setMaxVideoDuration(integer $MaxVideoDuration) 设置处理视频的总时长，单位毫秒。该值为0或未设置时，默认值两小时生效；当该值大于视频实际时长时，视频实际时长生效；当该值小于视频实际时长时，该值生效；当获取视频实际时长失败时，若该值设置则生效，否则默认值生效。建议留空。
 * @method float getSimThreshold() 获取人脸检索的相似度阈值，默认值0.89。建议留空。
 * @method void setSimThreshold(float $SimThreshold) 设置人脸检索的相似度阈值，默认值0.89。建议留空。
 */
class SubmitHighlightsRequest extends AbstractModel
{
    /**
     * @var HLFunction 表情配置开关项。
     */
    public $Functions;

    /**
     * @var string 视频url。
     */
    public $FileContent;

    /**
     * @var string 视频类型及来源，目前只支持点播类型："vod_url"。
     */
    public $FileType;

    /**
     * @var array 需要检索的人脸合集库，不在库中的人脸将不参与精彩集锦。
     */
    public $LibIds;

    /**
     * @var integer 视频处理的抽帧间隔，单位毫秒。建议留空。
     */
    public $FrameInterval;

    /**
     * @var integer 关键词语言类型，0为英文，1为中文。
     */
    public $KeywordsLanguage;

    /**
     * @var array 关键词数组，当且仅当Funtions中的EnableKeywordWonderfulTime为true时有意义，匹配相应的关键字。
     */
    public $KeywordsStrings;

    /**
     * @var integer 处理视频的总时长，单位毫秒。该值为0或未设置时，默认值两小时生效；当该值大于视频实际时长时，视频实际时长生效；当该值小于视频实际时长时，该值生效；当获取视频实际时长失败时，若该值设置则生效，否则默认值生效。建议留空。
     */
    public $MaxVideoDuration;

    /**
     * @var float 人脸检索的相似度阈值，默认值0.89。建议留空。
     */
    public $SimThreshold;

    /**
     * @param HLFunction $Functions 表情配置开关项。
     * @param string $FileContent 视频url。
     * @param string $FileType 视频类型及来源，目前只支持点播类型："vod_url"。
     * @param array $LibIds 需要检索的人脸合集库，不在库中的人脸将不参与精彩集锦。
     * @param integer $FrameInterval 视频处理的抽帧间隔，单位毫秒。建议留空。
     * @param integer $KeywordsLanguage 关键词语言类型，0为英文，1为中文。
     * @param array $KeywordsStrings 关键词数组，当且仅当Funtions中的EnableKeywordWonderfulTime为true时有意义，匹配相应的关键字。
     * @param integer $MaxVideoDuration 处理视频的总时长，单位毫秒。该值为0或未设置时，默认值两小时生效；当该值大于视频实际时长时，视频实际时长生效；当该值小于视频实际时长时，该值生效；当获取视频实际时长失败时，若该值设置则生效，否则默认值生效。建议留空。
     * @param float $SimThreshold 人脸检索的相似度阈值，默认值0.89。建议留空。
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
        if (array_key_exists("Functions",$param) and $param["Functions"] !== null) {
            $this->Functions = new HLFunction();
            $this->Functions->deserialize($param["Functions"]);
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("LibIds",$param) and $param["LibIds"] !== null) {
            $this->LibIds = $param["LibIds"];
        }

        if (array_key_exists("FrameInterval",$param) and $param["FrameInterval"] !== null) {
            $this->FrameInterval = $param["FrameInterval"];
        }

        if (array_key_exists("KeywordsLanguage",$param) and $param["KeywordsLanguage"] !== null) {
            $this->KeywordsLanguage = $param["KeywordsLanguage"];
        }

        if (array_key_exists("KeywordsStrings",$param) and $param["KeywordsStrings"] !== null) {
            $this->KeywordsStrings = $param["KeywordsStrings"];
        }

        if (array_key_exists("MaxVideoDuration",$param) and $param["MaxVideoDuration"] !== null) {
            $this->MaxVideoDuration = $param["MaxVideoDuration"];
        }

        if (array_key_exists("SimThreshold",$param) and $param["SimThreshold"] !== null) {
            $this->SimThreshold = $param["SimThreshold"];
        }
    }
}
