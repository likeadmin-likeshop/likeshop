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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckFacePhoto请求参数结构体
 *
 * @method string getFileContent() 获取输入分析对象内容
 * @method void setFileContent(string $FileContent) 设置输入分析对象内容
 * @method string getFileType() 获取输入分析对象类型，picture_url:图片地址
 * @method void setFileType(string $FileType) 设置输入分析对象类型，picture_url:图片地址
 */
class CheckFacePhotoRequest extends AbstractModel
{
    /**
     * @var string 输入分析对象内容
     */
    public $FileContent;

    /**
     * @var string 输入分析对象类型，picture_url:图片地址
     */
    public $FileType;

    /**
     * @param string $FileContent 输入分析对象内容
     * @param string $FileType 输入分析对象类型，picture_url:图片地址
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
        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }
    }
}
