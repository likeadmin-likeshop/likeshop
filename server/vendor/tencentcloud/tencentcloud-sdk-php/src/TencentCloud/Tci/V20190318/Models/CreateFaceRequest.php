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
 * CreateFace请求参数结构体
 *
 * @method string getPersonId() 获取人员唯一标识符
 * @method void setPersonId(string $PersonId) 设置人员唯一标识符
 * @method array getImages() 获取图片数据 base64 字符串，与 Urls 参数选择一个输入
 * @method void setImages(array $Images) 设置图片数据 base64 字符串，与 Urls 参数选择一个输入
 * @method string getLibraryId() 获取人员库唯一标识符
 * @method void setLibraryId(string $LibraryId) 设置人员库唯一标识符
 * @method array getUrls() 获取图片下载地址，与 Images 参数选择一个输入
 * @method void setUrls(array $Urls) 设置图片下载地址，与 Images 参数选择一个输入
 */
class CreateFaceRequest extends AbstractModel
{
    /**
     * @var string 人员唯一标识符
     */
    public $PersonId;

    /**
     * @var array 图片数据 base64 字符串，与 Urls 参数选择一个输入
     */
    public $Images;

    /**
     * @var string 人员库唯一标识符
     */
    public $LibraryId;

    /**
     * @var array 图片下载地址，与 Images 参数选择一个输入
     */
    public $Urls;

    /**
     * @param string $PersonId 人员唯一标识符
     * @param array $Images 图片数据 base64 字符串，与 Urls 参数选择一个输入
     * @param string $LibraryId 人员库唯一标识符
     * @param array $Urls 图片下载地址，与 Images 参数选择一个输入
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("LibraryId",$param) and $param["LibraryId"] !== null) {
            $this->LibraryId = $param["LibraryId"];
        }

        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }
    }
}
