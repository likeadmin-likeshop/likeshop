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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PublishLayerVersion请求参数结构体
 *
 * @method string getLayerName() 获取层名称，支持26个英文字母大小写、数字、连接符和下划线，第一个字符只能以字母开头，最后一个字符不能为连接符或者下划线，名称长度1-64
 * @method void setLayerName(string $LayerName) 设置层名称，支持26个英文字母大小写、数字、连接符和下划线，第一个字符只能以字母开头，最后一个字符不能为连接符或者下划线，名称长度1-64
 * @method array getCompatibleRuntimes() 获取层适用的运行时，可多选，可选的值对应函数的 Runtime 可选值。
 * @method void setCompatibleRuntimes(array $CompatibleRuntimes) 设置层适用的运行时，可多选，可选的值对应函数的 Runtime 可选值。
 * @method Code getContent() 获取层的文件来源或文件内容
 * @method void setContent(Code $Content) 设置层的文件来源或文件内容
 * @method string getDescription() 获取层的版本的描述
 * @method void setDescription(string $Description) 设置层的版本的描述
 * @method string getLicenseInfo() 获取层的软件许可证
 * @method void setLicenseInfo(string $LicenseInfo) 设置层的软件许可证
 */
class PublishLayerVersionRequest extends AbstractModel
{
    /**
     * @var string 层名称，支持26个英文字母大小写、数字、连接符和下划线，第一个字符只能以字母开头，最后一个字符不能为连接符或者下划线，名称长度1-64
     */
    public $LayerName;

    /**
     * @var array 层适用的运行时，可多选，可选的值对应函数的 Runtime 可选值。
     */
    public $CompatibleRuntimes;

    /**
     * @var Code 层的文件来源或文件内容
     */
    public $Content;

    /**
     * @var string 层的版本的描述
     */
    public $Description;

    /**
     * @var string 层的软件许可证
     */
    public $LicenseInfo;

    /**
     * @param string $LayerName 层名称，支持26个英文字母大小写、数字、连接符和下划线，第一个字符只能以字母开头，最后一个字符不能为连接符或者下划线，名称长度1-64
     * @param array $CompatibleRuntimes 层适用的运行时，可多选，可选的值对应函数的 Runtime 可选值。
     * @param Code $Content 层的文件来源或文件内容
     * @param string $Description 层的版本的描述
     * @param string $LicenseInfo 层的软件许可证
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
        if (array_key_exists("LayerName",$param) and $param["LayerName"] !== null) {
            $this->LayerName = $param["LayerName"];
        }

        if (array_key_exists("CompatibleRuntimes",$param) and $param["CompatibleRuntimes"] !== null) {
            $this->CompatibleRuntimes = $param["CompatibleRuntimes"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new Code();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("LicenseInfo",$param) and $param["LicenseInfo"] !== null) {
            $this->LicenseInfo = $param["LicenseInfo"];
        }
    }
}
