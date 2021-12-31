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
 * DescribeSimpleNamespaces请求参数结构体
 *
 * @method array getNamespaceIdList() 获取命名空间ID列表，不传入时查询全量
 * @method void setNamespaceIdList(array $NamespaceIdList) 设置命名空间ID列表，不传入时查询全量
 * @method string getClusterId() 获取集群ID，不传入时查询全量
 * @method void setClusterId(string $ClusterId) 设置集群ID，不传入时查询全量
 * @method integer getLimit() 获取每页条数
 * @method void setLimit(integer $Limit) 设置每页条数
 * @method integer getOffset() 获取起始偏移量
 * @method void setOffset(integer $Offset) 设置起始偏移量
 * @method string getNamespaceId() 获取命名空间ID，不传入时查询全量
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID，不传入时查询全量
 * @method array getNamespaceResourceTypeList() 获取查询资源类型列表
 * @method void setNamespaceResourceTypeList(array $NamespaceResourceTypeList) 设置查询资源类型列表
 * @method string getSearchWord() 获取通过id和name进行过滤
 * @method void setSearchWord(string $SearchWord) 设置通过id和name进行过滤
 * @method array getNamespaceTypeList() 获取查询的命名空间类型列表
 * @method void setNamespaceTypeList(array $NamespaceTypeList) 设置查询的命名空间类型列表
 * @method string getNamespaceName() 获取通过命名空间名精确过滤
 * @method void setNamespaceName(string $NamespaceName) 设置通过命名空间名精确过滤
 * @method string getIsDefault() 获取通过是否是默认命名空间过滤，不传表示拉取全部命名空间。0：默认，命名空间。1：非默认命名空间
 * @method void setIsDefault(string $IsDefault) 设置通过是否是默认命名空间过滤，不传表示拉取全部命名空间。0：默认，命名空间。1：非默认命名空间
 */
class DescribeSimpleNamespacesRequest extends AbstractModel
{
    /**
     * @var array 命名空间ID列表，不传入时查询全量
     */
    public $NamespaceIdList;

    /**
     * @var string 集群ID，不传入时查询全量
     */
    public $ClusterId;

    /**
     * @var integer 每页条数
     */
    public $Limit;

    /**
     * @var integer 起始偏移量
     */
    public $Offset;

    /**
     * @var string 命名空间ID，不传入时查询全量
     */
    public $NamespaceId;

    /**
     * @var array 查询资源类型列表
     */
    public $NamespaceResourceTypeList;

    /**
     * @var string 通过id和name进行过滤
     */
    public $SearchWord;

    /**
     * @var array 查询的命名空间类型列表
     */
    public $NamespaceTypeList;

    /**
     * @var string 通过命名空间名精确过滤
     */
    public $NamespaceName;

    /**
     * @var string 通过是否是默认命名空间过滤，不传表示拉取全部命名空间。0：默认，命名空间。1：非默认命名空间
     */
    public $IsDefault;

    /**
     * @param array $NamespaceIdList 命名空间ID列表，不传入时查询全量
     * @param string $ClusterId 集群ID，不传入时查询全量
     * @param integer $Limit 每页条数
     * @param integer $Offset 起始偏移量
     * @param string $NamespaceId 命名空间ID，不传入时查询全量
     * @param array $NamespaceResourceTypeList 查询资源类型列表
     * @param string $SearchWord 通过id和name进行过滤
     * @param array $NamespaceTypeList 查询的命名空间类型列表
     * @param string $NamespaceName 通过命名空间名精确过滤
     * @param string $IsDefault 通过是否是默认命名空间过滤，不传表示拉取全部命名空间。0：默认，命名空间。1：非默认命名空间
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
        if (array_key_exists("NamespaceIdList",$param) and $param["NamespaceIdList"] !== null) {
            $this->NamespaceIdList = $param["NamespaceIdList"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceResourceTypeList",$param) and $param["NamespaceResourceTypeList"] !== null) {
            $this->NamespaceResourceTypeList = $param["NamespaceResourceTypeList"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("NamespaceTypeList",$param) and $param["NamespaceTypeList"] !== null) {
            $this->NamespaceTypeList = $param["NamespaceTypeList"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
