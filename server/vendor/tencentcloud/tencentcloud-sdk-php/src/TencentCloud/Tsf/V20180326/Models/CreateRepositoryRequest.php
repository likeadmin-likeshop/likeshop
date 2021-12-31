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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRepository请求参数结构体
 *
 * @method string getRepositoryName() 获取仓库名称
 * @method void setRepositoryName(string $RepositoryName) 设置仓库名称
 * @method string getRepositoryType() 获取仓库类型（默认仓库：default，私有仓库：private）
 * @method void setRepositoryType(string $RepositoryType) 设置仓库类型（默认仓库：default，私有仓库：private）
 * @method string getBucketName() 获取仓库所在桶名称
 * @method void setBucketName(string $BucketName) 设置仓库所在桶名称
 * @method string getBucketRegion() 获取仓库所在桶地域
 * @method void setBucketRegion(string $BucketRegion) 设置仓库所在桶地域
 * @method string getDirectory() 获取目录
 * @method void setDirectory(string $Directory) 设置目录
 * @method string getRepositoryDesc() 获取仓库描述
 * @method void setRepositoryDesc(string $RepositoryDesc) 设置仓库描述
 */
class CreateRepositoryRequest extends AbstractModel
{
    /**
     * @var string 仓库名称
     */
    public $RepositoryName;

    /**
     * @var string 仓库类型（默认仓库：default，私有仓库：private）
     */
    public $RepositoryType;

    /**
     * @var string 仓库所在桶名称
     */
    public $BucketName;

    /**
     * @var string 仓库所在桶地域
     */
    public $BucketRegion;

    /**
     * @var string 目录
     */
    public $Directory;

    /**
     * @var string 仓库描述
     */
    public $RepositoryDesc;

    /**
     * @param string $RepositoryName 仓库名称
     * @param string $RepositoryType 仓库类型（默认仓库：default，私有仓库：private）
     * @param string $BucketName 仓库所在桶名称
     * @param string $BucketRegion 仓库所在桶地域
     * @param string $Directory 目录
     * @param string $RepositoryDesc 仓库描述
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
        if (array_key_exists("RepositoryName",$param) and $param["RepositoryName"] !== null) {
            $this->RepositoryName = $param["RepositoryName"];
        }

        if (array_key_exists("RepositoryType",$param) and $param["RepositoryType"] !== null) {
            $this->RepositoryType = $param["RepositoryType"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("Directory",$param) and $param["Directory"] !== null) {
            $this->Directory = $param["Directory"];
        }

        if (array_key_exists("RepositoryDesc",$param) and $param["RepositoryDesc"] !== null) {
            $this->RepositoryDesc = $param["RepositoryDesc"];
        }
    }
}
