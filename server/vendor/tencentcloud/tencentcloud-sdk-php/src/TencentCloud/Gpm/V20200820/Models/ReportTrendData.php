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
 * 统计数据之趋势数据
 *
 * @method array getTotalList() 获取总次数
 * @method void setTotalList(array $TotalList) 设置总次数
 * @method array getCancelList() 获取被取消次数
 * @method void setCancelList(array $CancelList) 设置被取消次数
 * @method array getSuccessList() 获取成功次数
 * @method void setSuccessList(array $SuccessList) 设置成功次数
 * @method array getFailList() 获取失败次数
 * @method void setFailList(array $FailList) 设置失败次数
 * @method array getTimeoutList() 获取超时次数
 * @method void setTimeoutList(array $TimeoutList) 设置超时次数
 * @method array getTimeList() 获取时间数组，单位：秒
 * @method void setTimeList(array $TimeList) 设置时间数组，单位：秒
 */
class ReportTrendData extends AbstractModel
{
    /**
     * @var array 总次数
     */
    public $TotalList;

    /**
     * @var array 被取消次数
     */
    public $CancelList;

    /**
     * @var array 成功次数
     */
    public $SuccessList;

    /**
     * @var array 失败次数
     */
    public $FailList;

    /**
     * @var array 超时次数
     */
    public $TimeoutList;

    /**
     * @var array 时间数组，单位：秒
     */
    public $TimeList;

    /**
     * @param array $TotalList 总次数
     * @param array $CancelList 被取消次数
     * @param array $SuccessList 成功次数
     * @param array $FailList 失败次数
     * @param array $TimeoutList 超时次数
     * @param array $TimeList 时间数组，单位：秒
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
        if (array_key_exists("TotalList",$param) and $param["TotalList"] !== null) {
            $this->TotalList = $param["TotalList"];
        }

        if (array_key_exists("CancelList",$param) and $param["CancelList"] !== null) {
            $this->CancelList = $param["CancelList"];
        }

        if (array_key_exists("SuccessList",$param) and $param["SuccessList"] !== null) {
            $this->SuccessList = $param["SuccessList"];
        }

        if (array_key_exists("FailList",$param) and $param["FailList"] !== null) {
            $this->FailList = $param["FailList"];
        }

        if (array_key_exists("TimeoutList",$param) and $param["TimeoutList"] !== null) {
            $this->TimeoutList = $param["TimeoutList"];
        }

        if (array_key_exists("TimeList",$param) and $param["TimeList"] !== null) {
            $this->TimeList = $param["TimeList"];
        }
    }
}
