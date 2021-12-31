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
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建样例时候content元素
 *
 * @method integer getContentType() 获取素材类型：1-文本 2-图片 3-视频 4-音频
 * @method void setContentType(integer $ContentType) 设置素材类型：1-文本 2-图片 3-视频 4-音频
 * @method string getContent() 获取素材内容：如果素材是文本类型，直接填写文本内容，否则填写素材文件上传到cos后的url地址
 * @method void setContent(string $Content) 设置素材内容：如果素材是文本类型，直接填写文本内容，否则填写素材文件上传到cos后的url地址
 */
class CreateMmsInstanceItem extends AbstractModel
{
    /**
     * @var integer 素材类型：1-文本 2-图片 3-视频 4-音频
     */
    public $ContentType;

    /**
     * @var string 素材内容：如果素材是文本类型，直接填写文本内容，否则填写素材文件上传到cos后的url地址
     */
    public $Content;

    /**
     * @param integer $ContentType 素材类型：1-文本 2-图片 3-视频 4-音频
     * @param string $Content 素材内容：如果素材是文本类型，直接填写文本内容，否则填写素材文件上传到cos后的url地址
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
        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
