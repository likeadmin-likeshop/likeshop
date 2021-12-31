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
namespace TencentCloud\Asw\V20200722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExecutions请求参数结构体
 *
 * @method string getStateMachineResourceName() 获取状态机资源名
 * @method void setStateMachineResourceName(string $StateMachineResourceName) 设置状态机资源名
 * @method integer getPageSize() 获取页大小，最大100
 * @method void setPageSize(integer $PageSize) 设置页大小，最大100
 * @method integer getPageIndex() 获取页序号，从1开始
 * @method void setPageIndex(integer $PageIndex) 设置页序号，从1开始
 * @method string getFilterExecutionStatus() 获取按状态过滤条件，INIT，RUNNING，SUCCEED，FAILED，TERMINATED
 * @method void setFilterExecutionStatus(string $FilterExecutionStatus) 设置按状态过滤条件，INIT，RUNNING，SUCCEED，FAILED，TERMINATED
 * @method string getFilterExecutionResourceName() 获取按执行名过滤条件
 * @method void setFilterExecutionResourceName(string $FilterExecutionResourceName) 设置按执行名过滤条件
 */
class DescribeExecutionsRequest extends AbstractModel
{
    /**
     * @var string 状态机资源名
     */
    public $StateMachineResourceName;

    /**
     * @var integer 页大小，最大100
     */
    public $PageSize;

    /**
     * @var integer 页序号，从1开始
     */
    public $PageIndex;

    /**
     * @var string 按状态过滤条件，INIT，RUNNING，SUCCEED，FAILED，TERMINATED
     */
    public $FilterExecutionStatus;

    /**
     * @var string 按执行名过滤条件
     */
    public $FilterExecutionResourceName;

    /**
     * @param string $StateMachineResourceName 状态机资源名
     * @param integer $PageSize 页大小，最大100
     * @param integer $PageIndex 页序号，从1开始
     * @param string $FilterExecutionStatus 按状态过滤条件，INIT，RUNNING，SUCCEED，FAILED，TERMINATED
     * @param string $FilterExecutionResourceName 按执行名过滤条件
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
        if (array_key_exists("StateMachineResourceName",$param) and $param["StateMachineResourceName"] !== null) {
            $this->StateMachineResourceName = $param["StateMachineResourceName"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("FilterExecutionStatus",$param) and $param["FilterExecutionStatus"] !== null) {
            $this->FilterExecutionStatus = $param["FilterExecutionStatus"];
        }

        if (array_key_exists("FilterExecutionResourceName",$param) and $param["FilterExecutionResourceName"] !== null) {
            $this->FilterExecutionResourceName = $param["FilterExecutionResourceName"];
        }
    }
}
