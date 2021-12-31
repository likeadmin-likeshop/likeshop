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
 * 视频内容识别模板详情
 *
 * @method integer getDefinition() 获取视频内容识别模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置视频内容识别模板唯一标识。
 * @method string getName() 获取视频内容识别模板名称。
 * @method void setName(string $Name) 设置视频内容识别模板名称。
 * @method string getComment() 获取视频内容识别模板描述信息。
 * @method void setComment(string $Comment) 设置视频内容识别模板描述信息。
 * @method HeadTailConfigureInfo getHeadTailConfigure() 获取头尾识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeadTailConfigure(HeadTailConfigureInfo $HeadTailConfigure) 设置头尾识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SegmentConfigureInfo getSegmentConfigure() 获取拆条识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentConfigure(SegmentConfigureInfo $SegmentConfigure) 设置拆条识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method FaceConfigureInfo getFaceConfigure() 获取人脸识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFaceConfigure(FaceConfigureInfo $FaceConfigure) 设置人脸识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OcrFullTextConfigureInfo getOcrFullTextConfigure() 获取文本全文识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfo $OcrFullTextConfigure) 设置文本全文识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OcrWordsConfigureInfo getOcrWordsConfigure() 获取文本关键词识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfo $OcrWordsConfigure) 设置文本关键词识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AsrFullTextConfigureInfo getAsrFullTextConfigure() 获取语音全文识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfo $AsrFullTextConfigure) 设置语音全文识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AsrWordsConfigureInfo getAsrWordsConfigure() 获取语音关键词识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfo $AsrWordsConfigure) 设置语音关键词识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ObjectConfigureInfo getObjectConfigure() 获取物体识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectConfigure(ObjectConfigureInfo $ObjectConfigure) 设置物体识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getScreenshotInterval() 获取截图时间间隔，单位：秒。
 * @method void setScreenshotInterval(float $ScreenshotInterval) 设置截图时间间隔，单位：秒。
 * @method string getCreateTime() 获取模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getUpdateTime() 获取模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 */
class AIRecognitionTemplateItem extends AbstractModel
{
    /**
     * @var integer 视频内容识别模板唯一标识。
     */
    public $Definition;

    /**
     * @var string 视频内容识别模板名称。
     */
    public $Name;

    /**
     * @var string 视频内容识别模板描述信息。
     */
    public $Comment;

    /**
     * @var HeadTailConfigureInfo 头尾识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeadTailConfigure;

    /**
     * @var SegmentConfigureInfo 拆条识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentConfigure;

    /**
     * @var FaceConfigureInfo 人脸识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FaceConfigure;

    /**
     * @var OcrFullTextConfigureInfo 文本全文识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrFullTextConfigure;

    /**
     * @var OcrWordsConfigureInfo 文本关键词识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrWordsConfigure;

    /**
     * @var AsrFullTextConfigureInfo 语音全文识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrFullTextConfigure;

    /**
     * @var AsrWordsConfigureInfo 语音关键词识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrWordsConfigure;

    /**
     * @var ObjectConfigureInfo 物体识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectConfigure;

    /**
     * @var float 截图时间间隔，单位：秒。
     */
    public $ScreenshotInterval;

    /**
     * @var string 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $UpdateTime;

    /**
     * @param integer $Definition 视频内容识别模板唯一标识。
     * @param string $Name 视频内容识别模板名称。
     * @param string $Comment 视频内容识别模板描述信息。
     * @param HeadTailConfigureInfo $HeadTailConfigure 头尾识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SegmentConfigureInfo $SegmentConfigure 拆条识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param FaceConfigureInfo $FaceConfigure 人脸识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OcrFullTextConfigureInfo $OcrFullTextConfigure 文本全文识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OcrWordsConfigureInfo $OcrWordsConfigure 文本关键词识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AsrFullTextConfigureInfo $AsrFullTextConfigure 语音全文识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AsrWordsConfigureInfo $AsrWordsConfigure 语音关键词识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ObjectConfigureInfo $ObjectConfigure 物体识别控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ScreenshotInterval 截图时间间隔，单位：秒。
     * @param string $CreateTime 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $UpdateTime 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
