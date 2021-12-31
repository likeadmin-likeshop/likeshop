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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDiagDBInstances请求参数结构体
 *
 * @method boolean getIsSupported() 获取是否是DBbrain支持的实例，固定传 true。
 * @method void setIsSupported(boolean $IsSupported) 设置是否是DBbrain支持的实例，固定传 true。
 * @method string getProduct() 获取服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
 * @method integer getOffset() 获取分页参数，偏移量。
 * @method void setOffset(integer $Offset) 设置分页参数，偏移量。
 * @method integer getLimit() 获取分页参数，分页值。
 * @method void setLimit(integer $Limit) 设置分页参数，分页值。
 * @method array getInstanceNames() 获取根据实例名称条件查询。
 * @method void setInstanceNames(array $InstanceNames) 设置根据实例名称条件查询。
 * @method array getInstanceIds() 获取根据实例ID条件查询。
 * @method void setInstanceIds(array $InstanceIds) 设置根据实例ID条件查询。
 * @method array getRegions() 获取根据地域条件查询。
 * @method void setRegions(array $Regions) 设置根据地域条件查询。
 */
class DescribeDiagDBInstancesRequest extends AbstractModel
{
    /**
     * @var boolean 是否是DBbrain支持的实例，固定传 true。
     */
    public $IsSupported;

    /**
     * @var string 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
     */
    public $Product;

    /**
     * @var integer 分页参数，偏移量。
     */
    public $Offset;

    /**
     * @var integer 分页参数，分页值。
     */
    public $Limit;

    /**
     * @var array 根据实例名称条件查询。
     */
    public $InstanceNames;

    /**
     * @var array 根据实例ID条件查询。
     */
    public $InstanceIds;

    /**
     * @var array 根据地域条件查询。
     */
    public $Regions;

    /**
     * @param boolean $IsSupported 是否是DBbrain支持的实例，固定传 true。
     * @param string $Product 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
     * @param integer $Offset 分页参数，偏移量。
     * @param integer $Limit 分页参数，分页值。
     * @param array $InstanceNames 根据实例名称条件查询。
     * @param array $InstanceIds 根据实例ID条件查询。
     * @param array $Regions 根据地域条件查询。
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
        if (array_key_exists("IsSupported",$param) and $param["IsSupported"] !== null) {
            $this->IsSupported = $param["IsSupported"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }
    }
}
