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
 * 单个图片处理操作。
 *
 * @method string getType() 获取图片处理类型。可选类型有：
<li>Scale : 图片缩略处理。</li>
<li>CenterCut : 图片裁剪处理。</li>
 * @method void setType(string $Type) 设置图片处理类型。可选类型有：
<li>Scale : 图片缩略处理。</li>
<li>CenterCut : 图片裁剪处理。</li>
 * @method ImageScale getScale() 获取图片缩略处理，仅当 Type 为 Scale 时有效。
 * @method void setScale(ImageScale $Scale) 设置图片缩略处理，仅当 Type 为 Scale 时有效。
 * @method ImageCenterCut getCenterCut() 获取图片裁剪处理，仅当 Type 为 CenterCut 时有效。
 * @method void setCenterCut(ImageCenterCut $CenterCut) 设置图片裁剪处理，仅当 Type 为 CenterCut 时有效。
 */
class ImageOperation extends AbstractModel
{
    /**
     * @var string 图片处理类型。可选类型有：
<li>Scale : 图片缩略处理。</li>
<li>CenterCut : 图片裁剪处理。</li>
     */
    public $Type;

    /**
     * @var ImageScale 图片缩略处理，仅当 Type 为 Scale 时有效。
     */
    public $Scale;

    /**
     * @var ImageCenterCut 图片裁剪处理，仅当 Type 为 CenterCut 时有效。
     */
    public $CenterCut;

    /**
     * @param string $Type 图片处理类型。可选类型有：
<li>Scale : 图片缩略处理。</li>
<li>CenterCut : 图片裁剪处理。</li>
     * @param ImageScale $Scale 图片缩略处理，仅当 Type 为 Scale 时有效。
     * @param ImageCenterCut $CenterCut 图片裁剪处理，仅当 Type 为 CenterCut 时有效。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = new ImageScale();
            $this->Scale->deserialize($param["Scale"]);
        }

        if (array_key_exists("CenterCut",$param) and $param["CenterCut"] !== null) {
            $this->CenterCut = new ImageCenterCut();
            $this->CenterCut->deserialize($param["CenterCut"]);
        }
    }
}
