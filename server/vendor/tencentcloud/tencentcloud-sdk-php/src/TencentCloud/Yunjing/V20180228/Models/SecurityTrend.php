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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全趋势统计数据。
 *
 * @method string getDate() 获取事件时间。
 * @method void setDate(string $Date) 设置事件时间。
 * @method integer getEventNum() 获取事件数量。
 * @method void setEventNum(integer $EventNum) 设置事件数量。
 */
class SecurityTrend extends AbstractModel
{
    /**
     * @var string 事件时间。
     */
    public $Date;

    /**
     * @var integer 事件数量。
     */
    public $EventNum;

    /**
     * @param string $Date 事件时间。
     * @param integer $EventNum 事件数量。
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

        if (array_key_exists("EventNum",$param) and $param["EventNum"] !== null) {
            $this->EventNum = $param["EventNum"];
        }
    }
}
