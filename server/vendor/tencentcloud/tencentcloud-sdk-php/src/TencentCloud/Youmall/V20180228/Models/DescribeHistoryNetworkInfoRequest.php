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
 * DescribeHistoryNetworkInfo请求参数结构体
 *
 * @method integer getTime() 获取请求时间戳
 * @method void setTime(integer $Time) 设置请求时间戳
 * @method string getCompanyId() 获取优mall集团id，通过"指定身份标识获取客户门店列表"接口获取
 * @method void setCompanyId(string $CompanyId) 设置优mall集团id，通过"指定身份标识获取客户门店列表"接口获取
 * @method integer getShopId() 获取优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取，为0则拉取集团全部店铺当前
 * @method void setShopId(integer $ShopId) 设置优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取，为0则拉取集团全部店铺当前
 * @method string getStartDay() 获取拉取开始日期，格式：2018-09-05
 * @method void setStartDay(string $StartDay) 设置拉取开始日期，格式：2018-09-05
 * @method string getEndDay() 获取拉取结束日期，格式L:2018-09-05，超过StartDay 90天，按StartDay+90天算
 * @method void setEndDay(string $EndDay) 设置拉取结束日期，格式L:2018-09-05，超过StartDay 90天，按StartDay+90天算
 * @method integer getLimit() 获取拉取条数，默认10
 * @method void setLimit(integer $Limit) 设置拉取条数，默认10
 * @method integer getOffset() 获取拉取偏移，返回offset之后的数据
 * @method void setOffset(integer $Offset) 设置拉取偏移，返回offset之后的数据
 */
class DescribeHistoryNetworkInfoRequest extends AbstractModel
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
     * @var integer 优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取，为0则拉取集团全部店铺当前
     */
    public $ShopId;

    /**
     * @var string 拉取开始日期，格式：2018-09-05
     */
    public $StartDay;

    /**
     * @var string 拉取结束日期，格式L:2018-09-05，超过StartDay 90天，按StartDay+90天算
     */
    public $EndDay;

    /**
     * @var integer 拉取条数，默认10
     */
    public $Limit;

    /**
     * @var integer 拉取偏移，返回offset之后的数据
     */
    public $Offset;

    /**
     * @param integer $Time 请求时间戳
     * @param string $CompanyId 优mall集团id，通过"指定身份标识获取客户门店列表"接口获取
     * @param integer $ShopId 优mall店铺id，通过"指定身份标识获取客户门店列表"接口获取，为0则拉取集团全部店铺当前
     * @param string $StartDay 拉取开始日期，格式：2018-09-05
     * @param string $EndDay 拉取结束日期，格式L:2018-09-05，超过StartDay 90天，按StartDay+90天算
     * @param integer $Limit 拉取条数，默认10
     * @param integer $Offset 拉取偏移，返回offset之后的数据
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

        if (array_key_exists("StartDay",$param) and $param["StartDay"] !== null) {
            $this->StartDay = $param["StartDay"];
        }

        if (array_key_exists("EndDay",$param) and $param["EndDay"] !== null) {
            $this->EndDay = $param["EndDay"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
