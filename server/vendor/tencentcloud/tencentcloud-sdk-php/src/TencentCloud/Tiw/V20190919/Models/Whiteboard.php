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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时录制白板参数，例如白板宽高等
 *
 * @method integer getWidth() 获取实时录制结果里白板视频宽，默认为1280
 * @method void setWidth(integer $Width) 设置实时录制结果里白板视频宽，默认为1280
 * @method integer getHeight() 获取实时录制结果里白板视频高，默认为960
 * @method void setHeight(integer $Height) 设置实时录制结果里白板视频高，默认为960
 * @method string getInitParam() 获取白板初始化参数，透传到白板 SDK
 * @method void setInitParam(string $InitParam) 设置白板初始化参数，透传到白板 SDK
 */
class Whiteboard extends AbstractModel
{
    /**
     * @var integer 实时录制结果里白板视频宽，默认为1280
     */
    public $Width;

    /**
     * @var integer 实时录制结果里白板视频高，默认为960
     */
    public $Height;

    /**
     * @var string 白板初始化参数，透传到白板 SDK
     */
    public $InitParam;

    /**
     * @param integer $Width 实时录制结果里白板视频宽，默认为1280
     * @param integer $Height 实时录制结果里白板视频高，默认为960
     * @param string $InitParam 白板初始化参数，透传到白板 SDK
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
        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("InitParam",$param) and $param["InitParam"] !== null) {
            $this->InitParam = $param["InitParam"];
        }
    }
}
