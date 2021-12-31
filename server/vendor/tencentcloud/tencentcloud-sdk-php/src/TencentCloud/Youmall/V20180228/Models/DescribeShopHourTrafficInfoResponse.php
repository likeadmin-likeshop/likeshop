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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeShopHourTrafficInfo返回参数结构体
 *
 * @method string getCompanyId() 获取公司ID
 * @method void setCompanyId(string $CompanyId) 设置公司ID
 * @method integer getShopId() 获取门店ID
 * @method void setShopId(integer $ShopId) 设置门店ID
 * @method integer getTotalCount() 获取查询结果总数
 * @method void setTotalCount(integer $TotalCount) 设置查询结果总数
 * @method array getShopHourTrafficInfoSet() 获取分时客流信息
 * @method void setShopHourTrafficInfoSet(array $ShopHourTrafficInfoSet) 设置分时客流信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeShopHourTrafficInfoResponse extends AbstractModel
{
    /**
     * @var string 公司ID
     */
    public $CompanyId;

    /**
     * @var integer 门店ID
     */
    public $ShopId;

    /**
     * @var integer 查询结果总数
     */
    public $TotalCount;

    /**
     * @var array 分时客流信息
     */
    public $ShopHourTrafficInfoSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CompanyId 公司ID
     * @param integer $ShopId 门店ID
     * @param integer $TotalCount 查询结果总数
     * @param array $ShopHourTrafficInfoSet 分时客流信息
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("ShopId",$param) and $param["ShopId"] !== null) {
            $this->ShopId = $param["ShopId"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ShopHourTrafficInfoSet",$param) and $param["ShopHourTrafficInfoSet"] !== null) {
            $this->ShopHourTrafficInfoSet = [];
            foreach ($param["ShopHourTrafficInfoSet"] as $key => $value){
                $obj = new ShopHourTrafficInfo();
                $obj->deserialize($value);
                array_push($this->ShopHourTrafficInfoSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
