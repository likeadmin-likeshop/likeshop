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
 * DescribeNamespaces请求参数结构体
 *
 * @method string getRegistryId() 获取实例Id
 * @method void setRegistryId(string $RegistryId) 设置实例Id
 * @method string getNamespaceName() 获取指定命名空间，不填写默认查询所有命名空间
 * @method void setNamespaceName(string $NamespaceName) 设置指定命名空间，不填写默认查询所有命名空间
 * @method integer getLimit() 获取每页个数
 * @method void setLimit(integer $Limit) 设置每页个数
 * @method integer getOffset() 获取页偏移
 * @method void setOffset(integer $Offset) 设置页偏移
 */
class DescribeNamespacesRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $RegistryId;

    /**
     * @var string 指定命名空间，不填写默认查询所有命名空间
     */
    public $NamespaceName;

    /**
     * @var integer 每页个数
     */
    public $Limit;

    /**
     * @var integer 页偏移
     */
    public $Offset;

    /**
     * @param string $RegistryId 实例Id
     * @param string $NamespaceName 指定命名空间，不填写默认查询所有命名空间
     * @param integer $Limit 每页个数
     * @param integer $Offset 页偏移
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
