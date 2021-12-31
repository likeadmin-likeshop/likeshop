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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 慢查询详情
 *
 * @method float getTotalTime() 获取花费总时间
 * @method void setTotalTime(float $TotalTime) 设置花费总时间
 * @method integer getTotalCalls() 获取调用总次数
 * @method void setTotalCalls(integer $TotalCalls) 设置调用总次数
 * @method array getNormalQueries() 获取脱敏后的慢SQL列表
 * @method void setNormalQueries(array $NormalQueries) 设置脱敏后的慢SQL列表
 */
class SlowlogDetail extends AbstractModel
{
    /**
     * @var float 花费总时间
     */
    public $TotalTime;

    /**
     * @var integer 调用总次数
     */
    public $TotalCalls;

    /**
     * @var array 脱敏后的慢SQL列表
     */
    public $NormalQueries;

    /**
     * @param float $TotalTime 花费总时间
     * @param integer $TotalCalls 调用总次数
     * @param array $NormalQueries 脱敏后的慢SQL列表
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
        if (array_key_exists("TotalTime",$param) and $param["TotalTime"] !== null) {
            $this->TotalTime = $param["TotalTime"];
        }

        if (array_key_exists("TotalCalls",$param) and $param["TotalCalls"] !== null) {
            $this->TotalCalls = $param["TotalCalls"];
        }

        if (array_key_exists("NormalQueries",$param) and $param["NormalQueries"] !== null) {
            $this->NormalQueries = [];
            foreach ($param["NormalQueries"] as $key => $value){
                $obj = new NormalQueryItem();
                $obj->deserialize($value);
                array_push($this->NormalQueries, $obj);
            }
        }
    }
}
