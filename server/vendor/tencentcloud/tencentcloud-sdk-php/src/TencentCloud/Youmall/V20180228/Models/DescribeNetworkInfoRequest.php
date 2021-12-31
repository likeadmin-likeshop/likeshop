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
 * DescribeNetworkInfo请求参数结构体
 *
 * @method integer getTime() 获取请求时间戳
 * @method void setTime(integer $Time) 设置请求时间戳
 * @method string getCompanyId() 获取优mall集团id，通过"指定身份标识获取客户门店列表"接口获取
 * @method void setCompanyId(string $CompanyId) 设置优mall集团id，通过"指定身份标识获取客户门店列表"接口获取
 * @method integer getShopId() 获取优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取，不填则拉取集团全部店铺当前
 * @method void setShopId(integer $ShopId) 设置优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取，不填则拉取集团全部店铺当前
 */
class DescribeNetworkInfoRequest extends AbstractModel
{
    /**
     * @var integer 请求时间戳
     */
    public $Time;

    /**
     * @var string 优mall集团id，通过"指定身份标识获取客户门店列表"接口获取
     */
    public $CompanyId;

    /**
     * @var integer 优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取，不填则拉取集团全部店铺当前
     */
    public $ShopId;

    /**
     * @param integer $Time 请求时间戳
     * @param string $CompanyId 优mall集团id，通过"指定身份标识获取客户门店列表"接口获取
     * @param integer $ShopId 优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取，不填则拉取集团全部店铺当前
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("ShopId",$param) and $param["ShopId"] !== null) {
            $this->ShopId = $param["ShopId"];
        }
    }
}
