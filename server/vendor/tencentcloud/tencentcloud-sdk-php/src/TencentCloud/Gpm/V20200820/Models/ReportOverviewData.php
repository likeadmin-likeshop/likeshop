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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 匹配概况
 *
 * @method string getTotalTimes() 获取总次数
 * @method void setTotalTimes(string $TotalTimes) 设置总次数
 * @method float getSuccessPercent() 获取成功率
 * @method void setSuccessPercent(float $SuccessPercent) 设置成功率
 * @method float getTimeoutPercent() 获取超时率
 * @method void setTimeoutPercent(float $TimeoutPercent) 设置超时率
 * @method float getFailPercent() 获取失败率
 * @method void setFailPercent(float $FailPercent) 设置失败率
 * @method float getAverageSec() 获取平均匹配时间
 * @method void setAverageSec(float $AverageSec) 设置平均匹配时间
 */
class ReportOverviewData extends AbstractModel
{
    /**
     * @var string 总次数
     */
    public $TotalTimes;

    /**
     * @var float 成功率
     */
    public $SuccessPercent;

    /**
     * @var float 超时率
     */
    public $TimeoutPercent;

    /**
     * @var float 失败率
     */
    public $FailPercent;

    /**
     * @var float 平均匹配时间
     */
    public $AverageSec;

    /**
     * @param string $TotalTimes 总次数
     * @param float $SuccessPercent 成功率
     * @param float $TimeoutPercent 超时率
     * @param float $FailPercent 失败率
     * @param float $AverageSec 平均匹配时间
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
        if (array_key_exists("TotalTimes",$param) and $param["TotalTimes"] !== null) {
            $this->TotalTimes = $param["TotalTimes"];
        }

        if (array_key_exists("SuccessPercent",$param) and $param["SuccessPercent"] !== null) {
            $this->SuccessPercent = $param["SuccessPercent"];
        }

        if (array_key_exists("TimeoutPercent",$param) and $param["TimeoutPercent"] !== null) {
            $this->TimeoutPercent = $param["TimeoutPercent"];
        }

        if (array_key_exists("FailPercent",$param) and $param["FailPercent"] !== null) {
            $this->FailPercent = $param["FailPercent"];
        }

        if (array_key_exists("AverageSec",$param) and $param["AverageSec"] !== null) {
            $this->AverageSec = $param["AverageSec"];
        }
    }
}
