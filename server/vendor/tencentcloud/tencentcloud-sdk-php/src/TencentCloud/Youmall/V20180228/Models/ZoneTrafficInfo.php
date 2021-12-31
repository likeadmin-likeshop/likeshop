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
 * 门店区域客流信息
 *
 * @method string getDate() 获取日期
 * @method void setDate(string $Date) 设置日期
 * @method array getZoneTrafficInfoDetailSet() 获取门店区域客流详细信息
 * @method void setZoneTrafficInfoDetailSet(array $ZoneTrafficInfoDetailSet) 设置门店区域客流详细信息
 */
class ZoneTrafficInfo extends AbstractModel
{
    /**
     * @var string 日期
     */
    public $Date;

    /**
     * @var array 门店区域客流详细信息
     */
    public $ZoneTrafficInfoDetailSet;

    /**
     * @param string $Date 日期
     * @param array $ZoneTrafficInfoDetailSet 门店区域客流详细信息
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

        if (array_key_exists("ZoneTrafficInfoDetailSet",$param) and $param["ZoneTrafficInfoDetailSet"] !== null) {
            $this->ZoneTrafficInfoDetailSet = [];
            foreach ($param["ZoneTrafficInfoDetailSet"] as $key => $value){
                $obj = new ZoneTrafficInfoDetail();
                $obj->deserialize($value);
                array_push($this->ZoneTrafficInfoDetailSet, $obj);
            }
        }
    }
}
