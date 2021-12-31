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
 * DescribeResourceTagsByTagKeys请求参数结构体
 *
 * @method string getServiceType() 获取业务类型
 * @method void setServiceType(string $ServiceType) 设置业务类型
 * @method string getResourcePrefix() 获取资源前缀
 * @method void setResourcePrefix(string $ResourcePrefix) 设置资源前缀
 * @method string getResourceRegion() 获取资源地域
 * @method void setResourceRegion(string $ResourceRegion) 设置资源地域
 * @method array getResourceIds() 获取资源唯一标识
 * @method void setResourceIds(array $ResourceIds) 设置资源唯一标识
 * @method array getTagKeys() 获取资源标签键
 * @method void setTagKeys(array $TagKeys) 设置资源标签键
 * @method integer getLimit() 获取每页大小，默认为 400
 * @method void setLimit(integer $Limit) 设置每页大小，默认为 400
 * @method integer getOffset() 获取数据偏移量，默认为 0, 必须为Limit参数的整数倍
 * @method void setOffset(integer $Offset) 设置数据偏移量，默认为 0, 必须为Limit参数的整数倍
 */
class DescribeResourceTagsByTagKeysRequest extends AbstractModel
{
    /**
     * @var string 业务类型
     */
    public $ServiceType;

    /**
     * @var string 资源前缀
     */
    public $ResourcePrefix;

    /**
     * @var string 资源地域
     */
    public $ResourceRegion;

    /**
     * @var array 资源唯一标识
     */
    public $ResourceIds;

    /**
     * @var array 资源标签键
     */
    public $TagKeys;

    /**
     * @var integer 每页大小，默认为 400
     */
    public $Limit;

    /**
     * @var integer 数据偏移量，默认为 0, 必须为Limit参数的整数倍
     */
    public $Offset;

    /**
     * @param string $ServiceType 业务类型
     * @param string $ResourcePrefix 资源前缀
     * @param string $ResourceRegion 资源地域
     * @param array $ResourceIds 资源唯一标识
     * @param array $TagKeys 资源标签键
     * @param integer $Limit 每页大小，默认为 400
     * @param integer $Offset 数据偏移量，默认为 0, 必须为Limit参数的整数倍
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
        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ResourcePrefix",$param) and $param["ResourcePrefix"] !== null) {
            $this->ResourcePrefix = $param["ResourcePrefix"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
