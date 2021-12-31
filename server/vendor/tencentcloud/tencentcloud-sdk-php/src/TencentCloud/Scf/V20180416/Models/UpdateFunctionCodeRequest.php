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
 * UpdateFunctionCode请求参数结构体
 *
 * @method string getFunctionName() 获取要修改的函数名称
 * @method void setFunctionName(string $FunctionName) 设置要修改的函数名称
 * @method string getHandler() 获取函数处理方法名称。名称格式支持“文件名称.函数名称”形式（java 名称格式 包名.类名::方法名），文件名称和函数名称之间以"."隔开，文件名称和函数名称要求以字母开始和结尾，中间允许插入字母、数字、下划线和连接符，文件名称和函数名字的长度要求 2-60 个字符
 * @method void setHandler(string $Handler) 设置函数处理方法名称。名称格式支持“文件名称.函数名称”形式（java 名称格式 包名.类名::方法名），文件名称和函数名称之间以"."隔开，文件名称和函数名称要求以字母开始和结尾，中间允许插入字母、数字、下划线和连接符，文件名称和函数名字的长度要求 2-60 个字符
 * @method string getCosBucketName() 获取对象存储桶名称
 * @method void setCosBucketName(string $CosBucketName) 设置对象存储桶名称
 * @method string getCosObjectName() 获取对象存储对象路径
 * @method void setCosObjectName(string $CosObjectName) 设置对象存储对象路径
 * @method string getZipFile() 获取包含函数代码文件及其依赖项的 zip 格式文件，使用该接口时要求将 zip 文件的内容转成 base64 编码，最大支持20M
 * @method void setZipFile(string $ZipFile) 设置包含函数代码文件及其依赖项的 zip 格式文件，使用该接口时要求将 zip 文件的内容转成 base64 编码，最大支持20M
 * @method string getNamespace() 获取函数所属命名空间
 * @method void setNamespace(string $Namespace) 设置函数所属命名空间
 * @method string getCosBucketRegion() 获取对象存储的地域，注：北京分为ap-beijing和ap-beijing-1
 * @method void setCosBucketRegion(string $CosBucketRegion) 设置对象存储的地域，注：北京分为ap-beijing和ap-beijing-1
 * @method string getEnvId() 获取函数所属环境
 * @method void setEnvId(string $EnvId) 设置函数所属环境
 * @method string getPublish() 获取在更新时是否同步发布新版本，默认为：FALSE，不发布
 * @method void setPublish(string $Publish) 设置在更新时是否同步发布新版本，默认为：FALSE，不发布
 * @method Code getCode() 获取函数代码
 * @method void setCode(Code $Code) 设置函数代码
 * @method string getCodeSource() 获取代码来源方式，支持 ZipFile, Cos, Inline 之一
 * @method void setCodeSource(string $CodeSource) 设置代码来源方式，支持 ZipFile, Cos, Inline 之一
 */
class UpdateFunctionCodeRequest extends AbstractModel
{
    /**
     * @var string 要修改的函数名称
     */
    public $FunctionName;

    /**
     * @var string 函数处理方法名称。名称格式支持“文件名称.函数名称”形式（java 名称格式 包名.类名::方法名），文件名称和函数名称之间以"."隔开，文件名称和函数名称要求以字母开始和结尾，中间允许插入字母、数字、下划线和连接符，文件名称和函数名字的长度要求 2-60 个字符
     */
    public $Handler;

    /**
     * @var string 对象存储桶名称
     */
    public $CosBucketName;

    /**
     * @var string 对象存储对象路径
     */
    public $CosObjectName;

    /**
     * @var string 包含函数代码文件及其依赖项的 zip 格式文件，使用该接口时要求将 zip 文件的内容转成 base64 编码，最大支持20M
     */
    public $ZipFile;

    /**
     * @var string 函数所属命名空间
     */
    public $Namespace;

    /**
     * @var string 对象存储的地域，注：北京分为ap-beijing和ap-beijing-1
     */
    public $CosBucketRegion;

    /**
     * @var string 函数所属环境
     */
    public $EnvId;

    /**
     * @var string 在更新时是否同步发布新版本，默认为：FALSE，不发布
     */
    public $Publish;

    /**
     * @var Code 函数代码
     */
    public $Code;

    /**
     * @var string 代码来源方式，支持 ZipFile, Cos, Inline 之一
     */
    public $CodeSource;

    /**
     * @param string $FunctionName 要修改的函数名称
     * @param string $Handler 函数处理方法名称。名称格式支持“文件名称.函数名称”形式（java 名称格式 包名.类名::方法名），文件名称和函数名称之间以"."隔开，文件名称和函数名称要求以字母开始和结尾，中间允许插入字母、数字、下划线和连接符，文件名称和函数名字的长度要求 2-60 个字符
     * @param string $CosBucketName 对象存储桶名称
     * @param string $CosObjectName 对象存储对象路径
     * @param string $ZipFile 包含函数代码文件及其依赖项的 zip 格式文件，使用该接口时要求将 zip 文件的内容转成 base64 编码，最大支持20M
     * @param string $Namespace 函数所属命名空间
     * @param string $CosBucketRegion 对象存储的地域，注：北京分为ap-beijing和ap-beijing-1
     * @param string $EnvId 函数所属环境
     * @param string $Publish 在更新时是否同步发布新版本，默认为：FALSE，不发布
     * @param Code $Code 函数代码
     * @param string $CodeSource 代码来源方式，支持 ZipFile, Cos, Inline 之一
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Handler",$param) and $param["Handler"] !== null) {
            $this->Handler = $param["Handler"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CosObjectName",$param) and $param["CosObjectName"] !== null) {
            $this->CosObjectName = $param["CosObjectName"];
        }

        if (array_key_exists("ZipFile",$param) and $param["ZipFile"] !== null) {
            $this->ZipFile = $param["ZipFile"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("CosBucketRegion",$param) and $param["CosBucketRegion"] !== null) {
            $this->CosBucketRegion = $param["CosBucketRegion"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Publish",$param) and $param["Publish"] !== null) {
            $this->Publish = $param["Publish"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = new Code();
            $this->Code->deserialize($param["Code"]);
        }

        if (array_key_exists("CodeSource",$param) and $param["CodeSource"] !== null) {
            $this->CodeSource = $param["CodeSource"];
        }
    }
}
