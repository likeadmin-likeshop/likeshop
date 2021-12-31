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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHaVips请求参数结构体
 *
 * @method array getHaVipIds() 获取HAVIP数组，HAVIP唯一ID，形如：havip-9o233uri。
 * @method void setHaVipIds(array $HaVipIds) 设置HAVIP数组，HAVIP唯一ID，形如：havip-9o233uri。
 * @method array getFilters() 获取过滤条件，参数不支持同时指定HaVipIds和Filters。
havip-id - String - HAVIP唯一ID，形如：havip-9o233uri。
havip-name - String - HAVIP名称。
vpc-id - String - HAVIP所在私有网络ID。
subnet-id - String - HAVIP所在子网ID。
 * @method void setFilters(array $Filters) 设置过滤条件，参数不支持同时指定HaVipIds和Filters。
havip-id - String - HAVIP唯一ID，形如：havip-9o233uri。
havip-name - String - HAVIP名称。
vpc-id - String - HAVIP所在私有网络ID。
subnet-id - String - HAVIP所在子网ID。
 * @method integer getOffset() 获取偏移量，默认值是0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认值是0。
 * @method integer getLimit() 获取返回数量，默认值是20，最大是100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认值是20，最大是100。
 * @method string getEcmRegion() 获取Ecm 区域，不填代表全部区域。
 * @method void setEcmRegion(string $EcmRegion) 设置Ecm 区域，不填代表全部区域。
 */
class DescribeHaVipsRequest extends AbstractModel
{
    /**
     * @var array HAVIP数组，HAVIP唯一ID，形如：havip-9o233uri。
     */
    public $HaVipIds;

    /**
     * @var array 过滤条件，参数不支持同时指定HaVipIds和Filters。
havip-id - String - HAVIP唯一ID，形如：havip-9o233uri。
havip-name - String - HAVIP名称。
vpc-id - String - HAVIP所在私有网络ID。
subnet-id - String - HAVIP所在子网ID。
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认值是0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认值是20，最大是100。
     */
    public $Limit;

    /**
     * @var string Ecm 区域，不填代表全部区域。
     */
    public $EcmRegion;

    /**
     * @param array $HaVipIds HAVIP数组，HAVIP唯一ID，形如：havip-9o233uri。
     * @param array $Filters 过滤条件，参数不支持同时指定HaVipIds和Filters。
havip-id - String - HAVIP唯一ID，形如：havip-9o233uri。
havip-name - String - HAVIP名称。
vpc-id - String - HAVIP所在私有网络ID。
subnet-id - String - HAVIP所在子网ID。
     * @param integer $Offset 偏移量，默认值是0。
     * @param integer $Limit 返回数量，默认值是20，最大是100。
     * @param string $EcmRegion Ecm 区域，不填代表全部区域。
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
        if (array_key_exists("HaVipIds",$param) and $param["HaVipIds"] !== null) {
            $this->HaVipIds = $param["HaVipIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }
    }
}
