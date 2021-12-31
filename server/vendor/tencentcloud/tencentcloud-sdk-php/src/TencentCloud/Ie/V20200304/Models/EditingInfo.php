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
 * 智能编辑任务参数信息
 *
 * @method TagEditingInfo getTagEditingInfo() 获取视频标签识别任务参数，不填则不开启。
 * @method void setTagEditingInfo(TagEditingInfo $TagEditingInfo) 设置视频标签识别任务参数，不填则不开启。
 * @method ClassificationEditingInfo getClassificationEditingInfo() 获取视频分类识别任务参数，不填则不开启。
 * @method void setClassificationEditingInfo(ClassificationEditingInfo $ClassificationEditingInfo) 设置视频分类识别任务参数，不填则不开启。
 * @method StripEditingInfo getStripEditingInfo() 获取智能拆条任务参数，不填则不开启。
 * @method void setStripEditingInfo(StripEditingInfo $StripEditingInfo) 设置智能拆条任务参数，不填则不开启。
 * @method HighlightsEditingInfo getHighlightsEditingInfo() 获取智能集锦任务参数，不填则不开启。
 * @method void setHighlightsEditingInfo(HighlightsEditingInfo $HighlightsEditingInfo) 设置智能集锦任务参数，不填则不开启。
 * @method CoverEditingInfo getCoverEditingInfo() 获取智能封面任务参数，不填则不开启。
 * @method void setCoverEditingInfo(CoverEditingInfo $CoverEditingInfo) 设置智能封面任务参数，不填则不开启。
 * @method OpeningEndingEditingInfo getOpeningEndingEditingInfo() 获取片头片尾识别任务参数，不填则不开启。
 * @method void setOpeningEndingEditingInfo(OpeningEndingEditingInfo $OpeningEndingEditingInfo) 设置片头片尾识别任务参数，不填则不开启。
 */
class EditingInfo extends AbstractModel
{
    /**
     * @var TagEditingInfo 视频标签识别任务参数，不填则不开启。
     */
    public $TagEditingInfo;

    /**
     * @var ClassificationEditingInfo 视频分类识别任务参数，不填则不开启。
     */
    public $ClassificationEditingInfo;

    /**
     * @var StripEditingInfo 智能拆条任务参数，不填则不开启。
     */
    public $StripEditingInfo;

    /**
     * @var HighlightsEditingInfo 智能集锦任务参数，不填则不开启。
     */
    public $HighlightsEditingInfo;

    /**
     * @var CoverEditingInfo 智能封面任务参数，不填则不开启。
     */
    public $CoverEditingInfo;

    /**
     * @var OpeningEndingEditingInfo 片头片尾识别任务参数，不填则不开启。
     */
    public $OpeningEndingEditingInfo;

    /**
     * @param TagEditingInfo $TagEditingInfo 视频标签识别任务参数，不填则不开启。
     * @param ClassificationEditingInfo $ClassificationEditingInfo 视频分类识别任务参数，不填则不开启。
     * @param StripEditingInfo $StripEditingInfo 智能拆条任务参数，不填则不开启。
     * @param HighlightsEditingInfo $HighlightsEditingInfo 智能集锦任务参数，不填则不开启。
     * @param CoverEditingInfo $CoverEditingInfo 智能封面任务参数，不填则不开启。
     * @param OpeningEndingEditingInfo $OpeningEndingEditingInfo 片头片尾识别任务参数，不填则不开启。
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
        if (array_key_exists("TagEditingInfo",$param) and $param["TagEditingInfo"] !== null) {
            $this->TagEditingInfo = new TagEditingInfo();
            $this->TagEditingInfo->deserialize($param["TagEditingInfo"]);
        }

        if (array_key_exists("ClassificationEditingInfo",$param) and $param["ClassificationEditingInfo"] !== null) {
            $this->ClassificationEditingInfo = new ClassificationEditingInfo();
            $this->ClassificationEditingInfo->deserialize($param["ClassificationEditingInfo"]);
        }

        if (array_key_exists("StripEditingInfo",$param) and $param["StripEditingInfo"] !== null) {
            $this->StripEditingInfo = new StripEditingInfo();
            $this->StripEditingInfo->deserialize($param["StripEditingInfo"]);
        }

        if (array_key_exists("HighlightsEditingInfo",$param) and $param["HighlightsEditingInfo"] !== null) {
            $this->HighlightsEditingInfo = new HighlightsEditingInfo();
            $this->HighlightsEditingInfo->deserialize($param["HighlightsEditingInfo"]);
        }

        if (array_key_exists("CoverEditingInfo",$param) and $param["CoverEditingInfo"] !== null) {
            $this->CoverEditingInfo = new CoverEditingInfo();
            $this->CoverEditingInfo->deserialize($param["CoverEditingInfo"]);
        }

        if (array_key_exists("OpeningEndingEditingInfo",$param) and $param["OpeningEndingEditingInfo"] !== null) {
            $this->OpeningEndingEditingInfo = new OpeningEndingEditingInfo();
            $this->OpeningEndingEditingInfo->deserialize($param["OpeningEndingEditingInfo"]);
        }
    }
}
