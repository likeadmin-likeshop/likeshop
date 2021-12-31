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
 * 函数代码
 *
 * @method string getCosBucketName() 获取对象存储桶名称（填写存储桶名称自定义部分，不包含-appid）
 * @method void setCosBucketName(string $CosBucketName) 设置对象存储桶名称（填写存储桶名称自定义部分，不包含-appid）
 * @method string getCosObjectName() 获取对象存储对象路径
 * @method void setCosObjectName(string $CosObjectName) 设置对象存储对象路径
 * @method string getZipFile() 获取包含函数代码文件及其依赖项的 zip 格式文件，zip包大小上限为 50MB，使用该接口时要求将 zip 文件的内容转成 base64 编码
 * @method void setZipFile(string $ZipFile) 设置包含函数代码文件及其依赖项的 zip 格式文件，zip包大小上限为 50MB，使用该接口时要求将 zip 文件的内容转成 base64 编码
 * @method string getCosBucketRegion() 获取对象存储的地域，地域为北京时需要传入ap-beijing,北京一区时需要传递ap-beijing-1，其他的地域不需要传递。
 * @method void setCosBucketRegion(string $CosBucketRegion) 设置对象存储的地域，地域为北京时需要传入ap-beijing,北京一区时需要传递ap-beijing-1，其他的地域不需要传递。
 * @method string getDemoId() 获取如果是通过Demo创建的话，需要传入DemoId
 * @method void setDemoId(string $DemoId) 设置如果是通过Demo创建的话，需要传入DemoId
 * @method string getTempCosObjectName() 获取如果是从TempCos创建的话，需要传入TempCosObjectName
 * @method void setTempCosObjectName(string $TempCosObjectName) 设置如果是从TempCos创建的话，需要传入TempCosObjectName
 * @method string getGitUrl() 获取Git地址
 * @method void setGitUrl(string $GitUrl) 设置Git地址
 * @method string getGitUserName() 获取Git用户名
 * @method void setGitUserName(string $GitUserName) 设置Git用户名
 * @method string getGitPassword() 获取Git密码
 * @method void setGitPassword(string $GitPassword) 设置Git密码
 * @method string getGitPasswordSecret() 获取加密后的Git密码，一般无需指定
 * @method void setGitPasswordSecret(string $GitPasswordSecret) 设置加密后的Git密码，一般无需指定
 * @method string getGitBranch() 获取Git分支
 * @method void setGitBranch(string $GitBranch) 设置Git分支
 * @method string getGitDirectory() 获取代码在Git仓库中的路径
 * @method void setGitDirectory(string $GitDirectory) 设置代码在Git仓库中的路径
 * @method string getGitCommitId() 获取指定要拉取的版本
 * @method void setGitCommitId(string $GitCommitId) 设置指定要拉取的版本
 * @method string getGitUserNameSecret() 获取加密后的Git用户名，一般无需指定
 * @method void setGitUserNameSecret(string $GitUserNameSecret) 设置加密后的Git用户名，一般无需指定
 */
class Code extends AbstractModel
{
    /**
     * @var string 对象存储桶名称（填写存储桶名称自定义部分，不包含-appid）
     */
    public $CosBucketName;

    /**
     * @var string 对象存储对象路径
     */
    public $CosObjectName;

    /**
     * @var string 包含函数代码文件及其依赖项的 zip 格式文件，zip包大小上限为 50MB，使用该接口时要求将 zip 文件的内容转成 base64 编码
     */
    public $ZipFile;

    /**
     * @var string 对象存储的地域，地域为北京时需要传入ap-beijing,北京一区时需要传递ap-beijing-1，其他的地域不需要传递。
     */
    public $CosBucketRegion;

    /**
     * @var string 如果是通过Demo创建的话，需要传入DemoId
     */
    public $DemoId;

    /**
     * @var string 如果是从TempCos创建的话，需要传入TempCosObjectName
     */
    public $TempCosObjectName;

    /**
     * @var string Git地址
     */
    public $GitUrl;

    /**
     * @var string Git用户名
     */
    public $GitUserName;

    /**
     * @var string Git密码
     */
    public $GitPassword;

    /**
     * @var string 加密后的Git密码，一般无需指定
     */
    public $GitPasswordSecret;

    /**
     * @var string Git分支
     */
    public $GitBranch;

    /**
     * @var string 代码在Git仓库中的路径
     */
    public $GitDirectory;

    /**
     * @var string 指定要拉取的版本
     */
    public $GitCommitId;

    /**
     * @var string 加密后的Git用户名，一般无需指定
     */
    public $GitUserNameSecret;

    /**
     * @param string $CosBucketName 对象存储桶名称（填写存储桶名称自定义部分，不包含-appid）
     * @param string $CosObjectName 对象存储对象路径
     * @param string $ZipFile 包含函数代码文件及其依赖项的 zip 格式文件，zip包大小上限为 50MB，使用该接口时要求将 zip 文件的内容转成 base64 编码
     * @param string $CosBucketRegion 对象存储的地域，地域为北京时需要传入ap-beijing,北京一区时需要传递ap-beijing-1，其他的地域不需要传递。
     * @param string $DemoId 如果是通过Demo创建的话，需要传入DemoId
     * @param string $TempCosObjectName 如果是从TempCos创建的话，需要传入TempCosObjectName
     * @param string $GitUrl Git地址
     * @param string $GitUserName Git用户名
     * @param string $GitPassword Git密码
     * @param string $GitPasswordSecret 加密后的Git密码，一般无需指定
     * @param string $GitBranch Git分支
     * @param string $GitDirectory 代码在Git仓库中的路径
     * @param string $GitCommitId 指定要拉取的版本
     * @param string $GitUserNameSecret 加密后的Git用户名，一般无需指定
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
        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CosObjectName",$param) and $param["CosObjectName"] !== null) {
            $this->CosObjectName = $param["CosObjectName"];
        }

        if (array_key_exists("ZipFile",$param) and $param["ZipFile"] !== null) {
            $this->ZipFile = $param["ZipFile"];
        }

        if (array_key_exists("CosBucketRegion",$param) and $param["CosBucketRegion"] !== null) {
            $this->CosBucketRegion = $param["CosBucketRegion"];
        }

        if (array_key_exists("DemoId",$param) and $param["DemoId"] !== null) {
            $this->DemoId = $param["DemoId"];
        }

        if (array_key_exists("TempCosObjectName",$param) and $param["TempCosObjectName"] !== null) {
            $this->TempCosObjectName = $param["TempCosObjectName"];
        }

        if (array_key_exists("GitUrl",$param) and $param["GitUrl"] !== null) {
            $this->GitUrl = $param["GitUrl"];
        }

        if (array_key_exists("GitUserName",$param) and $param["GitUserName"] !== null) {
            $this->GitUserName = $param["GitUserName"];
        }

        if (array_key_exists("GitPassword",$param) and $param["GitPassword"] !== null) {
            $this->GitPassword = $param["GitPassword"];
        }

        if (array_key_exists("GitPasswordSecret",$param) and $param["GitPasswordSecret"] !== null) {
            $this->GitPasswordSecret = $param["GitPasswordSecret"];
        }

        if (array_key_exists("GitBranch",$param) and $param["GitBranch"] !== null) {
            $this->GitBranch = $param["GitBranch"];
        }

        if (array_key_exists("GitDirectory",$param) and $param["GitDirectory"] !== null) {
            $this->GitDirectory = $param["GitDirectory"];
        }

        if (array_key_exists("GitCommitId",$param) and $param["GitCommitId"] !== null) {
            $this->GitCommitId = $param["GitCommitId"];
        }

        if (array_key_exists("GitUserNameSecret",$param) and $param["GitUserNameSecret"] !== null) {
            $this->GitUserNameSecret = $param["GitUserNameSecret"];
        }
    }
}
