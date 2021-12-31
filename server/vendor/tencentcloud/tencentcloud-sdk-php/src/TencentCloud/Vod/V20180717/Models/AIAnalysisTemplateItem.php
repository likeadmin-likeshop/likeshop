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
 * AI 智能分析模板详情
 *
 * @method integer getDefinition() 获取智能分析模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置智能分析模板唯一标识。
 * @method string getName() 获取智能分析模板名称。
 * @method void setName(string $Name) 设置智能分析模板名称。
 * @method string getComment() 获取智能分析模板描述信息。
 * @method void setComment(string $Comment) 设置智能分析模板描述信息。
 * @method ClassificationConfigureInfo getClassificationConfigure() 获取智能分类任务控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassificationConfigure(ClassificationConfigureInfo $ClassificationConfigure) 设置智能分类任务控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method TagConfigureInfo getTagConfigure() 获取智能标签任务控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagConfigure(TagConfigureInfo $TagConfigure) 设置智能标签任务控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CoverConfigureInfo getCoverConfigure() 获取智能封面任务控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoverConfigure(CoverConfigureInfo $CoverConfigure) 设置智能封面任务控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method FrameTagConfigureInfo getFrameTagConfigure() 获取智能按帧标签任务控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameTagConfigure(FrameTagConfigureInfo $FrameTagConfigure) 设置智能按帧标签任务控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method HighlightsConfigureInfo getHighlightConfigure() 获取智能精彩集锦任务控制参数。
 * @method void setHighlightConfigure(HighlightsConfigureInfo $HighlightConfigure) 设置智能精彩集锦任务控制参数。
 * @method string getCreateTime() 获取模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getUpdateTime() 获取模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 */
class AIAnalysisTemplateItem extends AbstractModel
{
    /**
     * @var integer 智能分析模板唯一标识。
     */
    public $Definition;

    /**
     * @var string 智能分析模板名称。
     */
    public $Name;

    /**
     * @var string 智能分析模板描述信息。
     */
    public $Comment;

    /**
     * @var ClassificationConfigureInfo 智能分类任务控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassificationConfigure;

    /**
     * @var TagConfigureInfo 智能标签任务控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagConfigure;

    /**
     * @var CoverConfigureInfo 智能封面任务控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoverConfigure;

    /**
     * @var FrameTagConfigureInfo 智能按帧标签任务控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameTagConfigure;

    /**
     * @var HighlightsConfigureInfo 智能精彩集锦任务控制参数。
     */
    public $HighlightConfigure;

    /**
     * @var string 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $UpdateTime;

    /**
     * @param integer $Definition 智能分析模板唯一标识。
     * @param string $Name 智能分析模板名称。
     * @param string $Comment 智能分析模板描述信息。
     * @param ClassificationConfigureInfo $ClassificationConfigure 智能分类任务控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param TagConfigureInfo $TagConfigure 智能标签任务控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CoverConfigureInfo $CoverConfigure 智能封面任务控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param FrameTagConfigureInfo $FrameTagConfigure 智能按帧标签任务控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param HighlightsConfigureInfo $HighlightConfigure 智能精彩集锦任务控制参数。
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

        if (array_key_exists("ClassificationConfigure",$param) and $param["ClassificationConfigure"] !== null) {
            $this->ClassificationConfigure = new ClassificationConfigureInfo();
            $this->ClassificationConfigure->deserialize($param["ClassificationConfigure"]);
        }

        if (array_key_exists("TagConfigure",$param) and $param["TagConfigure"] !== null) {
            $this->TagConfigure = new TagConfigureInfo();
            $this->TagConfigure->deserialize($param["TagConfigure"]);
        }

        if (array_key_exists("CoverConfigure",$param) and $param["CoverConfigure"] !== null) {
            $this->CoverConfigure = new CoverConfigureInfo();
            $this->CoverConfigure->deserialize($param["CoverConfigure"]);
        }

        if (array_key_exists("FrameTagConfigure",$param) and $param["FrameTagConfigure"] !== null) {
            $this->FrameTagConfigure = new FrameTagConfigureInfo();
            $this->FrameTagConfigure->deserialize($param["FrameTagConfigure"]);
        }

        if (array_key_exists("HighlightConfigure",$param) and $param["HighlightConfigure"] !== null) {
            $this->HighlightConfigure = new HighlightsConfigureInfo();
            $this->HighlightConfigure->deserialize($param["HighlightConfigure"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
