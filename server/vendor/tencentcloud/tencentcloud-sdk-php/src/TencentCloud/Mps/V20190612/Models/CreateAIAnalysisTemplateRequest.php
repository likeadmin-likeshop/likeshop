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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAIAnalysisTemplate请求参数结构体
 *
 * @method string getName() 获取视频内容分析模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置视频内容分析模板名称，长度限制：64 个字符。
 * @method string getComment() 获取视频内容分析模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置视频内容分析模板描述信息，长度限制：256 个字符。
 * @method ClassificationConfigureInfo getClassificationConfigure() 获取智能分类任务控制参数。
 * @method void setClassificationConfigure(ClassificationConfigureInfo $ClassificationConfigure) 设置智能分类任务控制参数。
 * @method TagConfigureInfo getTagConfigure() 获取智能标签任务控制参数。
 * @method void setTagConfigure(TagConfigureInfo $TagConfigure) 设置智能标签任务控制参数。
 * @method CoverConfigureInfo getCoverConfigure() 获取智能封面任务控制参数。
 * @method void setCoverConfigure(CoverConfigureInfo $CoverConfigure) 设置智能封面任务控制参数。
 * @method FrameTagConfigureInfo getFrameTagConfigure() 获取智能按帧标签任务控制参数。
 * @method void setFrameTagConfigure(FrameTagConfigureInfo $FrameTagConfigure) 设置智能按帧标签任务控制参数。
 */
class CreateAIAnalysisTemplateRequest extends AbstractModel
{
    /**
     * @var string 视频内容分析模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 视频内容分析模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var ClassificationConfigureInfo 智能分类任务控制参数。
     */
    public $ClassificationConfigure;

    /**
     * @var TagConfigureInfo 智能标签任务控制参数。
     */
    public $TagConfigure;

    /**
     * @var CoverConfigureInfo 智能封面任务控制参数。
     */
    public $CoverConfigure;

    /**
     * @var FrameTagConfigureInfo 智能按帧标签任务控制参数。
     */
    public $FrameTagConfigure;

    /**
     * @param string $Name 视频内容分析模板名称，长度限制：64 个字符。
     * @param string $Comment 视频内容分析模板描述信息，长度限制：256 个字符。
     * @param ClassificationConfigureInfo $ClassificationConfigure 智能分类任务控制参数。
     * @param TagConfigureInfo $TagConfigure 智能标签任务控制参数。
     * @param CoverConfigureInfo $CoverConfigure 智能封面任务控制参数。
     * @param FrameTagConfigureInfo $FrameTagConfigure 智能按帧标签任务控制参数。
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
    }
}
