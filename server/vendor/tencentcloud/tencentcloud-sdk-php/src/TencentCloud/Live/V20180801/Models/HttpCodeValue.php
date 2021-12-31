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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTP返回码数据信息
 *
 * @method string getTime() 获取时间，格式：yyyy-mm-dd HH:MM:SS。
 * @method void setTime(string $Time) 设置时间，格式：yyyy-mm-dd HH:MM:SS。
 * @method integer getNumbers() 获取次数。
 * @method void setNumbers(integer $Numbers) 设置次数。
 * @method float getPercentage() 获取占比。
 * @method void setPercentage(float $Percentage) 设置占比。
 */
class HttpCodeValue extends AbstractModel
{
    /**
     * @var string 时间，格式：yyyy-mm-dd HH:MM:SS。
     */
    public $Time;

    /**
     * @var integer 次数。
     */
    public $Numbers;

    /**
     * @var float 占比。
     */
    public $Percentage;

    /**
     * @param string $Time 时间，格式：yyyy-mm-dd HH:MM:SS。
     * @param integer $Numbers 次数。
     * @param float $Percentage 占比。
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

        if (array_key_exists("Numbers",$param) and $param["Numbers"] !== null) {
            $this->Numbers = $param["Numbers"];
        }

        if (array_key_exists("Percentage",$param) and $param["Percentage"] !== null) {
            $this->Percentage = $param["Percentage"];
        }
    }
}
