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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourcesByTags请求参数结构体
 *
 * @method array getTagFilters() 获取标签过滤数组
 * @method void setTagFilters(array $TagFilters) 设置标签过滤数组
 * @method integer getCreateUin() 获取创建标签者uin
 * @method void setCreateUin(integer $CreateUin) 设置创建标签者uin
 * @method integer getOffset() 获取数据偏移量，默认为 0, 必须为Limit参数的整数倍
 * @method void setOffset(integer $Offset) 设置数据偏移量，默认为 0, 必须为Limit参数的整数倍
 * @method integer getLimit() 获取每页大小，默认为 15
 * @method void setLimit(integer $Limit) 设置每页大小，默认为 15
 * @method string getResourcePrefix() 获取资源前缀
 * @method void setResourcePrefix(string $ResourcePrefix) 设置资源前缀
 * @method string getResourceId() 获取资源唯一标记
 * @method void setResourceId(string $ResourceId) 设置资源唯一标记
 * @method string getResourceRegion() 获取资源所在地域
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所在地域
 * @method string getServiceType() 获取业务类型
 * @method void setServiceType(string $ServiceType) 设置业务类型
 */
class DescribeResourcesByTagsRequest extends AbstractModel
{
    /**
     * @var array 标签过滤数组
     */
    public $TagFilters;

    /**
     * @var integer 创建标签者uin
     */
    public $CreateUin;

    /**
     * @var integer 数据偏移量，默认为 0, 必须为Limit参数的整数倍
     */
    public $Offset;

    /**
     * @var integer 每页大小，默认为 15
     */
    public $Limit;

    /**
     * @var string 资源前缀
     */
    public $ResourcePrefix;

    /**
     * @var string 资源唯一标记
     */
    public $ResourceId;

    /**
     * @var string 资源所在地域
     */
    public $ResourceRegion;

    /**
     * @var string 业务类型
     */
    public $ServiceType;

    /**
     * @param array $TagFilters 标签过滤数组
     * @param integer $CreateUin 创建标签者uin
     * @param integer $Offset 数据偏移量，默认为 0, 必须为Limit参数的整数倍
     * @param integer $Limit 每页大小，默认为 15
     * @param string $ResourcePrefix 资源前缀
     * @param string $ResourceId 资源唯一标记
     * @param string $ResourceRegion 资源所在地域
     * @param string $ServiceType 业务类型
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
        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ResourcePrefix",$param) and $param["ResourcePrefix"] !== null) {
            $this->ResourcePrefix = $param["ResourcePrefix"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }
    }
}
