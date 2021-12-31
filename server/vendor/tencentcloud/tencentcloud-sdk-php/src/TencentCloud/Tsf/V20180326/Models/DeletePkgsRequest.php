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
 * DeletePkgs请求参数结构体
 *
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method array getPkgIds() 获取需要删除的程序包ID列表
 * @method void setPkgIds(array $PkgIds) 设置需要删除的程序包ID列表
 * @method string getRepositoryType() 获取程序包仓库类型
 * @method void setRepositoryType(string $RepositoryType) 设置程序包仓库类型
 * @method string getRepositoryId() 获取程序包仓库id
 * @method void setRepositoryId(string $RepositoryId) 设置程序包仓库id
 */
class DeletePkgsRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @var array 需要删除的程序包ID列表
     */
    public $PkgIds;

    /**
     * @var string 程序包仓库类型
     */
    public $RepositoryType;

    /**
     * @var string 程序包仓库id
     */
    public $RepositoryId;

    /**
     * @param string $ApplicationId 应用ID
     * @param array $PkgIds 需要删除的程序包ID列表
     * @param string $RepositoryType 程序包仓库类型
     * @param string $RepositoryId 程序包仓库id
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("PkgIds",$param) and $param["PkgIds"] !== null) {
            $this->PkgIds = $param["PkgIds"];
        }

        if (array_key_exists("RepositoryType",$param) and $param["RepositoryType"] !== null) {
            $this->RepositoryType = $param["RepositoryType"];
        }

        if (array_key_exists("RepositoryId",$param) and $param["RepositoryId"] !== null) {
            $this->RepositoryId = $param["RepositoryId"];
        }
    }
}
