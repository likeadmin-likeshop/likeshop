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
 * RecognizeMediaForZhiXue请求参数结构体
 *
 * @method MediaInputInfo getInputInfo() 获取输入媒体文件存储信息。
 * @method void setInputInfo(MediaInputInfo $InputInfo) 设置输入媒体文件存储信息。
 * @method ExpressionConfigInfo getExpressionConfig() 获取表情识别参数配置。默认开启。
 * @method void setExpressionConfig(ExpressionConfigInfo $ExpressionConfig) 设置表情识别参数配置。默认开启。
 * @method ActionConfigInfo getActionConfig() 获取动作识别参数配置。默认开启。
 * @method void setActionConfig(ActionConfigInfo $ActionConfig) 设置动作识别参数配置。默认开启。
 */
class RecognizeMediaForZhiXueRequest extends AbstractModel
{
    /**
     * @var MediaInputInfo 输入媒体文件存储信息。
     */
    public $InputInfo;

    /**
     * @var ExpressionConfigInfo 表情识别参数配置。默认开启。
     */
    public $ExpressionConfig;

    /**
     * @var ActionConfigInfo 动作识别参数配置。默认开启。
     */
    public $ActionConfig;

    /**
     * @param MediaInputInfo $InputInfo 输入媒体文件存储信息。
     * @param ExpressionConfigInfo $ExpressionConfig 表情识别参数配置。默认开启。
     * @param ActionConfigInfo $ActionConfig 动作识别参数配置。默认开启。
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
        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("ExpressionConfig",$param) and $param["ExpressionConfig"] !== null) {
            $this->ExpressionConfig = new ExpressionConfigInfo();
            $this->ExpressionConfig->deserialize($param["ExpressionConfig"]);
        }

        if (array_key_exists("ActionConfig",$param) and $param["ActionConfig"] !== null) {
            $this->ActionConfig = new ActionConfigInfo();
            $this->ActionConfig->deserialize($param["ActionConfig"]);
        }
    }
}
