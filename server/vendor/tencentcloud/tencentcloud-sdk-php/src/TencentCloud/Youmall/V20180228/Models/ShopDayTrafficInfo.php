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
 * 门店客流量列表信息
 *
 * @method string getDate() 获取日期
 * @method void setDate(string $Date) 设置日期
 * @method integer getDayTrafficTotalCount() 获取客流量
 * @method void setDayTrafficTotalCount(integer $DayTrafficTotalCount) 设置客流量
 * @method array getGenderAgeTrafficDetailSet() 获取性别年龄分组下的客流信息
 * @method void setGenderAgeTrafficDetailSet(array $GenderAgeTrafficDetailSet) 设置性别年龄分组下的客流信息
 */
class ShopDayTrafficInfo extends AbstractModel
{
    /**
     * @var string 日期
     */
    public $Date;

    /**
     * @var integer 客流量
     */
    public $DayTrafficTotalCount;

    /**
     * @var array 性别年龄分组下的客流信息
     */
    public $GenderAgeTrafficDetailSet;

    /**
     * @param string $Date 日期
     * @param integer $DayTrafficTotalCount 客流量
     * @param array $GenderAgeTrafficDetailSet 性别年龄分组下的客流信息
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("DayTrafficTotalCount",$param) and $param["DayTrafficTotalCount"] !== null) {
            $this->DayTrafficTotalCount = $param["DayTrafficTotalCount"];
        }

        if (array_key_exists("GenderAgeTrafficDetailSet",$param) and $param["GenderAgeTrafficDetailSet"] !== null) {
            $this->GenderAgeTrafficDetailSet = [];
            foreach ($param["GenderAgeTrafficDetailSet"] as $key => $value){
                $obj = new GenderAgeTrafficDetail();
                $obj->deserialize($value);
                array_push($this->GenderAgeTrafficDetailSet, $obj);
            }
        }
    }
}
