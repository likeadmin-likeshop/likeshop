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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用量数据单元
 *
 * @method string getStatDate() 获取日期，格式为年-月-日，如2018-07-13
 * @method void setStatDate(string $StatDate) 设置日期，格式为年-月-日，如2018-07-13
 * @method integer getData() 获取统计值
 * @method void setData(integer $Data) 设置统计值
 */
class StatisticsItem extends AbstractModel
{
    /**
     * @var string 日期，格式为年-月-日，如2018-07-13
     */
    public $StatDate;

    /**
     * @var integer 统计值
     */
    public $Data;

    /**
     * @param string $StatDate 日期，格式为年-月-日，如2018-07-13
     * @param integer $Data 统计值
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
        if (array_key_exists("StatDate",$param) and $param["StatDate"] !== null) {
            $this->StatDate = $param["StatDate"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
