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
 * DescribeResourceTags请求参数结构体
 *
 * @method integer getCreateUin() 获取创建者uin
 * @method void setCreateUin(integer $CreateUin) 设置创建者uin
 * @method string getResourceRegion() 获取资源所在地域
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所在地域
 * @method string getServiceType() 获取业务类型
 * @method void setServiceType(string $ServiceType) 设置业务类型
 * @method string getResourcePrefix() 获取资源前缀
 * @method void setResourcePrefix(string $ResourcePrefix) 设置资源前缀
 * @method string getResourceId() 获取资源唯一标识。只输入ResourceId进行查询可能会查询较慢，或者无法匹配到结果，建议在输入ResourceId的同时也输入ServiceType、ResourcePrefix和ResourceRegion（不区分地域的资源可忽略该参数）
 * @method void setResourceId(string $ResourceId) 设置资源唯一标识。只输入ResourceId进行查询可能会查询较慢，或者无法匹配到结果，建议在输入ResourceId的同时也输入ServiceType、ResourcePrefix和ResourceRegion（不区分地域的资源可忽略该参数）
 * @method integer getOffset() 获取数据偏移量，默认为 0, 必须为Limit参数的整数倍
 * @method void setOffset(integer $Offset) 设置数据偏移量，默认为 0, 必须为Limit参数的整数倍
 * @method integer getLimit() 获取每页大小，默认为 15
 * @method void setLimit(integer $Limit) 设置每页大小，默认为 15
 * @method integer getCosResourceId() 获取是否是cos的资源（0或者1），输入的ResourceId为cos资源时必填
 * @method void setCosResourceId(integer $CosResourceId) 设置是否是cos的资源（0或者1），输入的ResourceId为cos资源时必填
 */
class DescribeResourceTagsRequest extends AbstractModel
{
    /**
     * @var integer 创建者uin
     */
    public $CreateUin;

    /**
     * @var string 资源所在地域
     */
    public $ResourceRegion;

    /**
     * @var string 业务类型
     */
    public $ServiceType;

    /**
     * @var string 资源前缀
     */
    public $ResourcePrefix;

    /**
     * @var string 资源唯一标识。只输入ResourceId进行查询可能会查询较慢，或者无法匹配到结果，建议在输入ResourceId的同时也输入ServiceType、ResourcePrefix和ResourceRegion（不区分地域的资源可忽略该参数）
     */
    public $ResourceId;

    /**
     * @var integer 数据偏移量，默认为 0, 必须为Limit参数的整数倍
     */
    public $Offset;

    /**
     * @var integer 每页大小，默认为 15
     */
    public $Limit;

    /**
     * @var integer 是否是cos的资源（0或者1），输入的ResourceId为cos资源时必填
     */
    public $CosResourceId;

    /**
     * @param integer $CreateUin 创建者uin
     * @param string $ResourceRegion 资源所在地域
     * @param string $ServiceType 业务类型
     * @param string $ResourcePrefix 资源前缀
     * @param string $ResourceId 资源唯一标识。只输入ResourceId进行查询可能会查询较慢，或者无法匹配到结果，建议在输入ResourceId的同时也输入ServiceType、ResourcePrefix和ResourceRegion（不区分地域的资源可忽略该参数）
     * @param integer $Offset 数据偏移量，默认为 0, 必须为Limit参数的整数倍
     * @param integer $Limit 每页大小，默认为 15
     * @param integer $CosResourceId 是否是cos的资源（0或者1），输入的ResourceId为cos资源时必填
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
        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ResourcePrefix",$param) and $param["ResourcePrefix"] !== null) {
            $this->ResourcePrefix = $param["ResourcePrefix"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CosResourceId",$param) and $param["CosResourceId"] !== null) {
            $this->CosResourceId = $param["CosResourceId"];
        }
    }
}
