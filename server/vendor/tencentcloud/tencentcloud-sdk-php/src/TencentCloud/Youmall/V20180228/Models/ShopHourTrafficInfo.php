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
 * 分时客流量信息
 *
 * @method string getDate() 获取日期，格式yyyy-MM-dd
 * @method void setDate(string $Date) 设置日期，格式yyyy-MM-dd
 * @method array getHourTrafficInfoDetailSet() 获取分时客流详细信息
 * @method void setHourTrafficInfoDetailSet(array $HourTrafficInfoDetailSet) 设置分时客流详细信息
 */
class ShopHourTrafficInfo extends AbstractModel
{
    /**
     * @var string 日期，格式yyyy-MM-dd
     */
    public $Date;

    /**
     * @var array 分时客流详细信息
     */
    public $HourTrafficInfoDetailSet;

    /**
     * @param string $Date 日期，格式yyyy-MM-dd
     * @param array $HourTrafficInfoDetailSet 分时客流详细信息
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

        if (array_key_exists("HourTrafficInfoDetailSet",$param) and $param["HourTrafficInfoDetailSet"] !== null) {
            $this->HourTrafficInfoDetailSet = [];
            foreach ($param["HourTrafficInfoDetailSet"] as $key => $value){
                $obj = new HourTrafficInfoDetail();
                $obj->deserialize($value);
                array_push($this->HourTrafficInfoDetailSet, $obj);
            }
        }
    }
}
