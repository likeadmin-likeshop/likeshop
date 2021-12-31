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
 * CreateAIRecognitionTemplate请求参数结构体
 *
 * @method string getName() 获取视频内容识别模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置视频内容识别模板名称，长度限制：64 个字符。
 * @method string getComment() 获取视频内容识别模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置视频内容识别模板描述信息，长度限制：256 个字符。
 * @method HeadTailConfigureInfo getHeadTailConfigure() 获取视频片头片尾识别控制参数。
 * @method void setHeadTailConfigure(HeadTailConfigureInfo $HeadTailConfigure) 设置视频片头片尾识别控制参数。
 * @method SegmentConfigureInfo getSegmentConfigure() 获取视频拆条识别控制参数。
 * @method void setSegmentConfigure(SegmentConfigureInfo $SegmentConfigure) 设置视频拆条识别控制参数。
 * @method FaceConfigureInfo getFaceConfigure() 获取人脸识别控制参数。
 * @method void setFaceConfigure(FaceConfigureInfo $FaceConfigure) 设置人脸识别控制参数。
 * @method OcrFullTextConfigureInfo getOcrFullTextConfigure() 获取文本全文识别控制参数。
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfo $OcrFullTextConfigure) 设置文本全文识别控制参数。
 * @method OcrWordsConfigureInfo getOcrWordsConfigure() 获取文本关键词识别控制参数。
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfo $OcrWordsConfigure) 设置文本关键词识别控制参数。
 * @method AsrFullTextConfigureInfo getAsrFullTextConfigure() 获取语音全文识别控制参数。
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfo $AsrFullTextConfigure) 设置语音全文识别控制参数。
 * @method AsrWordsConfigureInfo getAsrWordsConfigure() 获取语音关键词识别控制参数。
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfo $AsrWordsConfigure) 设置语音关键词识别控制参数。
 * @method ObjectConfigureInfo getObjectConfigure() 获取物体识别控制参数。
 * @method void setObjectConfigure(ObjectConfigureInfo $ObjectConfigure) 设置物体识别控制参数。
 * @method float getScreenshotInterval() 获取截帧间隔，单位为秒。当不填时，默认截帧间隔为 1 秒，最小值为 0.5 秒。
 * @method void setScreenshotInterval(float $ScreenshotInterval) 设置截帧间隔，单位为秒。当不填时，默认截帧间隔为 1 秒，最小值为 0.5 秒。
 * @method integer getSubAppId() 获取点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 * @method void setSubAppId(integer $SubAppId) 设置点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 */
class CreateAIRecognitionTemplateRequest extends AbstractModel
{
    /**
     * @var string 视频内容识别模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 视频内容识别模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var HeadTailConfigureInfo 视频片头片尾识别控制参数。
     */
    public $HeadTailConfigure;

    /**
     * @var SegmentConfigureInfo 视频拆条识别控制参数。
     */
    public $SegmentConfigure;

    /**
     * @var FaceConfigureInfo 人脸识别控制参数。
     */
    public $FaceConfigure;

    /**
     * @var OcrFullTextConfigureInfo 文本全文识别控制参数。
     */
    public $OcrFullTextConfigure;

    /**
     * @var OcrWordsConfigureInfo 文本关键词识别控制参数。
     */
    public $OcrWordsConfigure;

    /**
     * @var AsrFullTextConfigureInfo 语音全文识别控制参数。
     */
    public $AsrFullTextConfigure;

    /**
     * @var AsrWordsConfigureInfo 语音关键词识别控制参数。
     */
    public $AsrWordsConfigure;

    /**
     * @var ObjectConfigureInfo 物体识别控制参数。
     */
    public $ObjectConfigure;

    /**
     * @var float 截帧间隔，单位为秒。当不填时，默认截帧间隔为 1 秒，最小值为 0.5 秒。
     */
    public $ScreenshotInterval;

    /**
     * @var integer 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
     */
    public $SubAppId;

    /**
     * @param string $Name 视频内容识别模板名称，长度限制：64 个字符。
     * @param string $Comment 视频内容识别模板描述信息，长度限制：256 个字符。
     * @param HeadTailConfigureInfo $HeadTailConfigure 视频片头片尾识别控制参数。
     * @param SegmentConfigureInfo $SegmentConfigure 视频拆条识别控制参数。
     * @param FaceConfigureInfo $FaceConfigure 人脸识别控制参数。
     * @param OcrFullTextConfigureInfo $OcrFullTextConfigure 文本全文识别控制参数。
     * @param OcrWordsConfigureInfo $OcrWordsConfigure 文本关键词识别控制参数。
     * @param AsrFullTextConfigureInfo $AsrFullTextConfigure 语音全文识别控制参数。
     * @param AsrWordsConfigureInfo $AsrWordsConfigure 语音关键词识别控制参数。
     * @param ObjectConfigureInfo $ObjectConfigure 物体识别控制参数。
     * @param float $ScreenshotInterval 截帧间隔，单位为秒。当不填时，默认截帧间隔为 1 秒，最小值为 0.5 秒。
     * @param integer $SubAppId 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("HeadTailConfigure",$param) and $param["HeadTailConfigure"] !== null) {
            $this->HeadTailConfigure = new HeadTailConfigureInfo();
            $this->HeadTailConfigure->deserialize($param["HeadTailConfigure"]);
        }

        if (array_key_exists("SegmentConfigure",$param) and $param["SegmentConfigure"] !== null) {
            $this->SegmentConfigure = new SegmentConfigureInfo();
            $this->SegmentConfigure->deserialize($param["SegmentConfigure"]);
        }

        if (array_key_exists("FaceConfigure",$param) and $param["FaceConfigure"] !== null) {
            $this->FaceConfigure = new FaceConfigureInfo();
            $this->FaceConfigure->deserialize($param["FaceConfigure"]);
        }

        if (array_key_exists("OcrFullTextConfigure",$param) and $param["OcrFullTextConfigure"] !== null) {
            $this->OcrFullTextConfigure = new OcrFullTextConfigureInfo();
            $this->OcrFullTextConfigure->deserialize($param["OcrFullTextConfigure"]);
        }

        if (array_key_exists("OcrWordsConfigure",$param) and $param["OcrWordsConfigure"] !== null) {
            $this->OcrWordsConfigure = new OcrWordsConfigureInfo();
            $this->OcrWordsConfigure->deserialize($param["OcrWordsConfigure"]);
        }

        if (array_key_exists("AsrFullTextConfigure",$param) and $param["AsrFullTextConfigure"] !== null) {
            $this->AsrFullTextConfigure = new AsrFullTextConfigureInfo();
            $this->AsrFullTextConfigure->deserialize($param["AsrFullTextConfigure"]);
        }

        if (array_key_exists("AsrWordsConfigure",$param) and $param["AsrWordsConfigure"] !== null) {
            $this->AsrWordsConfigure = new AsrWordsConfigureInfo();
            $this->AsrWordsConfigure->deserialize($param["AsrWordsConfigure"]);
        }

        if (array_key_exists("ObjectConfigure",$param) and $param["ObjectConfigure"] !== null) {
            $this->ObjectConfigure = new ObjectConfigureInfo();
            $this->ObjectConfigure->deserialize($param["ObjectConfigure"]);
        }

        if (array_key_exists("ScreenshotInterval",$param) and $param["ScreenshotInterval"] !== null) {
            $this->ScreenshotInterval = $param["ScreenshotInterval"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
