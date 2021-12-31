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
 * AttachMediaSubtitles请求参数结构体
 *
 * @method string getFileId() 获取媒体文件唯一标识。
 * @method void setFileId(string $FileId) 设置媒体文件唯一标识。
 * @method string getOperation() 获取操作。取值如下：
<li>Attach：关联字幕。</li>
<li>Detach：解除关联字幕。</li>
 * @method void setOperation(string $Operation) 设置操作。取值如下：
<li>Attach：关联字幕。</li>
<li>Detach：解除关联字幕。</li>
 * @method integer getAdaptiveDynamicStreamingDefinition() 获取[转自适应码流模板号](https://cloud.tencent.com/document/product/266/34071#zsy)。
 * @method void setAdaptiveDynamicStreamingDefinition(integer $AdaptiveDynamicStreamingDefinition) 设置[转自适应码流模板号](https://cloud.tencent.com/document/product/266/34071#zsy)。
 * @method array getSubtitleIds() 获取字幕的唯一标识。
 * @method void setSubtitleIds(array $SubtitleIds) 设置字幕的唯一标识。
 * @method integer getSubAppId() 获取点播[子应用](/document/product/266/14574) ID 。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 * @method void setSubAppId(integer $SubAppId) 设置点播[子应用](/document/product/266/14574) ID 。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 */
class AttachMediaSubtitlesRequest extends AbstractModel
{
    /**
     * @var string 媒体文件唯一标识。
     */
    public $FileId;

    /**
     * @var string 操作。取值如下：
<li>Attach：关联字幕。</li>
<li>Detach：解除关联字幕。</li>
     */
    public $Operation;

    /**
     * @var integer [转自适应码流模板号](https://cloud.tencent.com/document/product/266/34071#zsy)。
     */
    public $AdaptiveDynamicStreamingDefinition;

    /**
     * @var array 字幕的唯一标识。
     */
    public $SubtitleIds;

    /**
     * @var integer 点播[子应用](/document/product/266/14574) ID 。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
     */
    public $SubAppId;

    /**
     * @param string $FileId 媒体文件唯一标识。
     * @param string $Operation 操作。取值如下：
<li>Attach：关联字幕。</li>
<li>Detach：解除关联字幕。</li>
     * @param integer $AdaptiveDynamicStreamingDefinition [转自适应码流模板号](https://cloud.tencent.com/document/product/266/34071#zsy)。
     * @param array $SubtitleIds 字幕的唯一标识。
     * @param integer $SubAppId 点播[子应用](/document/product/266/14574) ID 。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("AdaptiveDynamicStreamingDefinition",$param) and $param["AdaptiveDynamicStreamingDefinition"] !== null) {
            $this->AdaptiveDynamicStreamingDefinition = $param["AdaptiveDynamicStreamingDefinition"];
        }

        if (array_key_exists("SubtitleIds",$param) and $param["SubtitleIds"] !== null) {
            $this->SubtitleIds = $param["SubtitleIds"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
