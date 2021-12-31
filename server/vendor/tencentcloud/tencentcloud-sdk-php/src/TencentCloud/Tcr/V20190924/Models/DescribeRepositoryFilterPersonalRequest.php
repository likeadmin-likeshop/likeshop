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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRepositoryFilterPersonal请求参数结构体
 *
 * @method string getRepoName() 获取搜索镜像名
 * @method void setRepoName(string $RepoName) 设置搜索镜像名
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回最大数量，默认 20，最大100
 * @method void setLimit(integer $Limit) 设置返回最大数量，默认 20，最大100
 * @method integer getPublic() 获取筛选条件：1表示public，0表示private
 * @method void setPublic(integer $Public) 设置筛选条件：1表示public，0表示private
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 */
class DescribeRepositoryFilterPersonalRequest extends AbstractModel
{
    /**
     * @var string 搜索镜像名
     */
    public $RepoName;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回最大数量，默认 20，最大100
     */
    public $Limit;

    /**
     * @var integer 筛选条件：1表示public，0表示private
     */
    public $Public;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @param string $RepoName 搜索镜像名
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回最大数量，默认 20，最大100
     * @param integer $Public 筛选条件：1表示public，0表示private
     * @param string $Namespace 命名空间
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
        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Public",$param) and $param["Public"] !== null) {
            $this->Public = $param["Public"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
