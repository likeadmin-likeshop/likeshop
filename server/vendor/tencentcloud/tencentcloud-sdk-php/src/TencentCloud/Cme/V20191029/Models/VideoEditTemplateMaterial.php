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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频编辑模板素材信息。
 *
 * @method string getAspectRatio() 获取视频编辑模板宽高比。
 * @method void setAspectRatio(string $AspectRatio) 设置视频编辑模板宽高比。
 * @method array getSlotSet() 获取卡槽信息。
 * @method void setSlotSet(array $SlotSet) 设置卡槽信息。
 * @method string getPreviewVideoUrl() 获取模板预览视频 URL 地址 。
 * @method void setPreviewVideoUrl(string $PreviewVideoUrl) 设置模板预览视频 URL 地址 。
 */
class VideoEditTemplateMaterial extends AbstractModel
{
    /**
     * @var string 视频编辑模板宽高比。
     */
    public $AspectRatio;

    /**
     * @var array 卡槽信息。
     */
    public $SlotSet;

    /**
     * @var string 模板预览视频 URL 地址 。
     */
    public $PreviewVideoUrl;

    /**
     * @param string $AspectRatio 视频编辑模板宽高比。
     * @param array $SlotSet 卡槽信息。
     * @param string $PreviewVideoUrl 模板预览视频 URL 地址 。
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
        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("SlotSet",$param) and $param["SlotSet"] !== null) {
            $this->SlotSet = [];
            foreach ($param["SlotSet"] as $key => $value){
                $obj = new SlotInfo();
                $obj->deserialize($value);
                array_push($this->SlotSet, $obj);
            }
        }

        if (array_key_exists("PreviewVideoUrl",$param) and $param["PreviewVideoUrl"] !== null) {
            $this->PreviewVideoUrl = $param["PreviewVideoUrl"];
        }
    }
}
