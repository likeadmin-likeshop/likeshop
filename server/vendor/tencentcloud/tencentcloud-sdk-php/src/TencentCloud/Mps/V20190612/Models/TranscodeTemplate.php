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
 * 转码模板详情
 *
 * @method string getDefinition() 获取转码模板唯一标识。
 * @method void setDefinition(string $Definition) 设置转码模板唯一标识。
 * @method string getContainer() 获取封装格式，取值：mp4、flv、hls、mp3、flac、ogg。
 * @method void setContainer(string $Container) 设置封装格式，取值：mp4、flv、hls、mp3、flac、ogg。
 * @method string getName() 获取转码模板名称。
 * @method void setName(string $Name) 设置转码模板名称。
 * @method string getComment() 获取模板描述信息。
 * @method void setComment(string $Comment) 设置模板描述信息。
 * @method string getType() 获取模板类型，取值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
 * @method void setType(string $Type) 设置模板类型，取值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
 * @method integer getRemoveVideo() 获取是否去除视频数据，取值：
<li>0：保留；</li>
<li>1：去除。</li>
 * @method void setRemoveVideo(integer $RemoveVideo) 设置是否去除视频数据，取值：
<li>0：保留；</li>
<li>1：去除。</li>
 * @method integer getRemoveAudio() 获取是否去除音频数据，取值：
<li>0：保留；</li>
<li>1：去除。</li>
 * @method void setRemoveAudio(integer $RemoveAudio) 设置是否去除音频数据，取值：
<li>0：保留；</li>
<li>1：去除。</li>
 * @method VideoTemplateInfo getVideoTemplate() 获取视频流配置参数，仅当 RemoveVideo 为 0，该字段有效。
 * @method void setVideoTemplate(VideoTemplateInfo $VideoTemplate) 设置视频流配置参数，仅当 RemoveVideo 为 0，该字段有效。
 * @method AudioTemplateInfo getAudioTemplate() 获取音频流配置参数，仅当 RemoveAudio 为 0，该字段有效 。
 * @method void setAudioTemplate(AudioTemplateInfo $AudioTemplate) 设置音频流配置参数，仅当 RemoveAudio 为 0，该字段有效 。
 * @method TEHDConfig getTEHDConfig() 获取极速高清转码参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTEHDConfig(TEHDConfig $TEHDConfig) 设置极速高清转码参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerType() 获取封装格式过滤条件，可选值：
<li>Video：视频格式，可以同时包含视频流和音频流的封装格式；</li>
<li>PureAudio：纯音频格式，只能包含音频流的封装格式板。</li>
 * @method void setContainerType(string $ContainerType) 设置封装格式过滤条件，可选值：
<li>Video：视频格式，可以同时包含视频流和音频流的封装格式；</li>
<li>PureAudio：纯音频格式，只能包含音频流的封装格式板。</li>
 * @method string getCreateTime() 获取模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method string getUpdateTime() 获取模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 */
class TranscodeTemplate extends AbstractModel
{
    /**
     * @var string 转码模板唯一标识。
     */
    public $Definition;

    /**
     * @var string 封装格式，取值：mp4、flv、hls、mp3、flac、ogg。
     */
    public $Container;

    /**
     * @var string 转码模板名称。
     */
    public $Name;

    /**
     * @var string 模板描述信息。
     */
    public $Comment;

    /**
     * @var string 模板类型，取值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
     */
    public $Type;

    /**
     * @var integer 是否去除视频数据，取值：
<li>0：保留；</li>
<li>1：去除。</li>
     */
    public $RemoveVideo;

    /**
     * @var integer 是否去除音频数据，取值：
<li>0：保留；</li>
<li>1：去除。</li>
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfo 视频流配置参数，仅当 RemoveVideo 为 0，该字段有效。
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfo 音频流配置参数，仅当 RemoveAudio 为 0，该字段有效 。
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfig 极速高清转码参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TEHDConfig;

    /**
     * @var string 封装格式过滤条件，可选值：
<li>Video：视频格式，可以同时包含视频流和音频流的封装格式；</li>
<li>PureAudio：纯音频格式，只能包含音频流的封装格式板。</li>
     */
    public $ContainerType;

    /**
     * @var string 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     */
    public $UpdateTime;

    /**
     * @param string $Definition 转码模板唯一标识。
     * @param string $Container 封装格式，取值：mp4、flv、hls、mp3、flac、ogg。
     * @param string $Name 转码模板名称。
     * @param string $Comment 模板描述信息。
     * @param string $Type 模板类型，取值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
     * @param integer $RemoveVideo 是否去除视频数据，取值：
<li>0：保留；</li>
<li>1：去除。</li>
     * @param integer $RemoveAudio 是否去除音频数据，取值：
<li>0：保留；</li>
<li>1：去除。</li>
     * @param VideoTemplateInfo $VideoTemplate 视频流配置参数，仅当 RemoveVideo 为 0，该字段有效。
     * @param AudioTemplateInfo $AudioTemplate 音频流配置参数，仅当 RemoveAudio 为 0，该字段有效 。
     * @param TEHDConfig $TEHDConfig 极速高清转码参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerType 封装格式过滤条件，可选值：
<li>Video：视频格式，可以同时包含视频流和音频流的封装格式；</li>
<li>PureAudio：纯音频格式，只能包含音频流的封装格式板。</li>
     * @param string $CreateTime 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     * @param string $UpdateTime 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
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

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }

        if (array_key_exists("VideoTemplate",$param) and $param["VideoTemplate"] !== null) {
            $this->VideoTemplate = new VideoTemplateInfo();
            $this->VideoTemplate->deserialize($param["VideoTemplate"]);
        }

        if (array_key_exists("AudioTemplate",$param) and $param["AudioTemplate"] !== null) {
            $this->AudioTemplate = new AudioTemplateInfo();
            $this->AudioTemplate->deserialize($param["AudioTemplate"]);
        }

        if (array_key_exists("TEHDConfig",$param) and $param["TEHDConfig"] !== null) {
            $this->TEHDConfig = new TEHDConfig();
            $this->TEHDConfig->deserialize($param["TEHDConfig"]);
        }

        if (array_key_exists("ContainerType",$param) and $param["ContainerType"] !== null) {
            $this->ContainerType = $param["ContainerType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
