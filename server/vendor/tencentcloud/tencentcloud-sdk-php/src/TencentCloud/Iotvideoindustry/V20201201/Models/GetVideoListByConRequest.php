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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetVideoListByCon请求参数结构体
 *
 * @method string getDeviceId() 获取设备唯一标识
 * @method void setDeviceId(string $DeviceId) 设置设备唯一标识
 * @method integer getOffset() 获取偏移量，默认0
 * @method void setOffset(integer $Offset) 设置偏移量，默认0
 * @method integer getLimit() 获取限制量，默认200
 * @method void setLimit(integer $Limit) 设置限制量，默认200
 * @method integer getLatestDay() 获取0：查询指定日期的录像；1：查询最近一天的录像；默认0
 * @method void setLatestDay(integer $LatestDay) 设置0：查询指定日期的录像；1：查询最近一天的录像；默认0
 * @method string getDate() 获取指定某天。取值【YYYY-MM-DD】
当LatestDay为空或为0时，本参数不允许为空。
 * @method void setDate(string $Date) 设置指定某天。取值【YYYY-MM-DD】
当LatestDay为空或为0时，本参数不允许为空。
 */
class GetVideoListByConRequest extends AbstractModel
{
    /**
     * @var string 设备唯一标识
     */
    public $DeviceId;

    /**
     * @var integer 偏移量，默认0
     */
    public $Offset;

    /**
     * @var integer 限制量，默认200
     */
    public $Limit;

    /**
     * @var integer 0：查询指定日期的录像；1：查询最近一天的录像；默认0
     */
    public $LatestDay;

    /**
     * @var string 指定某天。取值【YYYY-MM-DD】
当LatestDay为空或为0时，本参数不允许为空。
     */
    public $Date;

    /**
     * @param string $DeviceId 设备唯一标识
     * @param integer $Offset 偏移量，默认0
     * @param integer $Limit 限制量，默认200
     * @param integer $LatestDay 0：查询指定日期的录像；1：查询最近一天的录像；默认0
     * @param string $Date 指定某天。取值【YYYY-MM-DD】
当LatestDay为空或为0时，本参数不允许为空。
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("LatestDay",$param) and $param["LatestDay"] !== null) {
            $this->LatestDay = $param["LatestDay"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
